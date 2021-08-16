<?php

namespace Phabel\PluginGraph;

use Phabel\Exception;
use Phabel\PluginCache;
use Phabel\PluginInterface;
use SplObjectStorage;
use SplQueue;

/**
 * Represents a plugin with a certain configuration.
 *
 * @author Daniil Gentili <daniil@daniil.it>
 * @license MIT
 */
class Node
{
    /**
     * Plugins and configs.
     *
     * @var Plugins
     */
    public Plugins $plugin;

    /**
     * Original plugin name.
     *
     * @var class-string<PluginInterface>
     */
    private string $name;

    /**
     * Associated package context.
     *
     * @var PackageContext
     */
    private PackageContext $packageContext;
    /**
     * Nodes that this node requires.
     *
     * @var SplObjectStorage<Node, null>
     */
    private SplObjectStorage $requires;

    /**
     * Nodes that this node extends.
     *
     * @var SplObjectStorage<Node, null>
     */
    private SplObjectStorage $extends;

    /**
     * Nodes that require this node.
     *
     * @var SplObjectStorage<Node, null>
     */
    private SplObjectStorage $requiredBy;

    /**
     * Nodes that extend this node.
     *
     * @var SplObjectStorage<Node, null>
     */
    private SplObjectStorage $extendedBy;

    /**
     * Graph instance.
     */
    private GraphInternal $graph;

    /**
     * Whether this node was visited when looking for circular requirements.
     */
    private bool $visitedCircular = false;

    /**
     * Whether this node can be required, or only extended.
     */
    private bool $canBeRequired = true;

    /**
     * Constructor.
     *
     * @param GraphInternal  $graph  Graph instance
     */
    public function __construct(GraphInternal $graph, PackageContext $ctx)
    {
        $this->packageContext = $ctx;
        $this->graph = $graph;
        $this->requiredBy = new SplObjectStorage;
        $this->extendedBy = new SplObjectStorage;
        $this->requires = new SplObjectStorage;
        $this->extends = new SplObjectStorage;
    }
    /**
     * Initialization function.
     *
     * @param string         $plugin Plugin name
     * @param array          $config Plugin configuration
     * @param PackageContext $ctx    Context
     *
     * @psalm-param class-string<PluginInterface> $plugin Plugin name
     *
     * @return self
     */
    public function init(string $plugin, array $pluginConfig): self
    {
        $this->name = $plugin;
        $this->plugin = new Plugins($plugin, $pluginConfig);

        $this->canBeRequired = PluginCache::canBeRequired($plugin);
        foreach (PluginCache::next($plugin, $pluginConfig) as $class => $config) {
            foreach ($this->graph->addPlugin($class, $config, $this->packageContext) as $node) {
                $node->require($this);
            }
        }
        foreach (PluginCache::previous($plugin, $pluginConfig) as $class => $config) {
            foreach ($this->graph->addPlugin($class, $config, $this->packageContext) as $node) {
                $this->require($node);
            }
        }
        foreach (PluginCache::withNext($plugin, $pluginConfig) as $class => $config) {
            foreach ($this->graph->addPlugin($class, $config, $this->packageContext) as $node) {
                $node->extend($this);
            }
        }
        foreach (PluginCache::withPrevious($plugin, $pluginConfig) as $class => $config) {
            foreach ($this->graph->addPlugin($class, $config, $this->packageContext) as $node) {
                $this->extend($node);
            }
        }

        return $this;
    }

    /**
     * Make node require another node.
     *
     * @param self $node Node
     *
     * @return void
     */
    private function require(self $node): void
    {
        if (!$node->canBeRequired) {
            $this->extend($node);
            return;
        }
        if ($this->extends->contains($node) || $node->extendedBy->contains($this)) {
            $this->extends->detach($node);
            $node->extendedBy->detach($this);
        }
        $this->requires->attach($node);
        $node->requiredBy->attach($this);

        $this->graph->linkNode($this);
    }
    /**
     * Make node extend another node.
     *
     * @param self $node Node
     *
     * @return void
     */
    private function extend(self $node): void
    {
        if ($this->requires->contains($node) || $node->requiredBy->contains($this)) {
            return;
        }
        $this->extends->attach($node);
        $node->extendedBy->attach($this);

        $this->graph->linkNode($this);
    }

    /**
     * Merge node with another node.
     *
     * @param self $other Other node
     *
     * @return Node
     */
    public function merge(self $other): Node
    {
        if ($other->requires->count() || $other->extends->count()) {
            throw new Exception('Cannot merge a node that requires other nodes!');
        }
        $this->packageContext->merge($other->packageContext);
        $this->plugin->merge($other->plugin);
        foreach ($other->requiredBy as $that) {
            $that->require($this);
            $that->requires->detach($other);
        }
        foreach ($other->extendedBy as $that) {
            $that->extend($this);
            $that->extends->detach($other);
        }
        return $this;
    }

    /**
     * Look for circular references, while merging package contexts.
     *
     * @return self
     */
    public function circular(): self
    {
        if ($this->visitedCircular) {
            $plugins = [$this->name];
            foreach (\debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, DEBUG_BACKTRACE_PROVIDE_OBJECT) as $frame) {
                $plugins []= $frame['object']->name;
                if ($frame['object'] === $this) {
                    break;
                }
            }
            throw new CircularException($plugins);
        }
        $this->visitedCircular = true;

        foreach ($this->requiredBy as $that) {
            $this->packageContext->merge($that->circular()->packageContext);
        }
        foreach ($this->extendedBy as $that) {
            $this->packageContext->merge($that->circular()->packageContext);
        }

        $this->visitedCircular = false;

        return $this;
    }
    /**
     * Flatten tree.
     *
     * @return SplQueue<SplQueue<PluginInterface>>
     */
    public function flatten(): SplQueue
    {
        /** @var SplQueue<PluginInterface> */
        $initQueue = new SplQueue;

        /** @var SplQueue<SplQueue<PluginInterface>> */
        $queue = new SplQueue;
        $queue->enqueue($initQueue);

        while ($this->extendedBy->count() && $this->requiredBy->count()) {
            if (!$this->flattenInternal($queue)) {
                throw new Exception('Graph resolution has stalled');
            }
        }

        return $queue;
    }
    /**
     * Internal flattening.
     *
     * @param SplQueue<SplQueue<PluginInterface>> $queueOfQueues Queue
     *
     * @return int
     */
    private function flattenInternal(SplQueue $queueOfQueues): int
    {
        $queue = $queueOfQueues->top();
        $this->plugin->enqueue($queue, $this->packageContext);

        /** @var SplQueue<Node> */
        $extendedBy = new SplQueue;
        $prevNode = null;
        foreach ($this->extendedBy as $node) {
            $node->extends->detach($this);
            if (\count($node->requires) + \count($node->extends) === 0) {
                if ($prevNode instanceof self) {
                    $prevNode->merge($node);
                } else {
                    $prevNode = $node;
                }
            } else {
                $extendedBy->enqueue($node);
            }
        }
        if ($prevNode) {
            $extendedBy->enqueue($prevNode);
        }

        /** @var SplQueue<Node> */
        $requiredBy = new SplQueue;
        $prevNode = null;
        foreach ($this->requiredBy as $node) {
            $node->requires->detach($this);
            if (\count($node->requires) + \count($node->extends) === 0) {
                if ($prevNode instanceof self) {
                    $prevNode->merge($node);
                } else {
                    $prevNode = $node;
                }
            } else {
                $requiredBy->enqueue($node);
            }
        }
        if ($prevNode) {
            $requiredBy->enqueue($prevNode);
        }

        $processed = 0;
        foreach ($extendedBy as $node) {
            if (\count($node->extends) + \count($node->requires) === 0) {
                $this->extendedBy->detach($node);
                $node->flattenInternal($queueOfQueues);
                $processed++;
            }
        }
        foreach ($requiredBy as $node) {
            if (\count($node->extends) + \count($node->requires) === 0) {
                $this->requiredBy->detach($node);
                if (!$queue->isEmpty()) {
                    $queueOfQueues->enqueue(new SplQueue);
                }
                $node->flattenInternal($queueOfQueues);
                $processed++;
            }
        }
        return $processed;
    }

    /**
     * Add packages from package context.
     *
     * @param PackageContext $ctx Package context
     *
     * @return self
     */
    public function addPackages(PackageContext $ctx): self
    {
        $this->packageContext->merge($ctx);
        return $this;
    }
}
