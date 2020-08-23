<?php

namespace Phabel;

use PhpParser\Node;
use PhpParser\Parser;
use PhpParser\ParserFactory;
use SplQueue;

/**
 * @author Daniil Gentili <daniil@daniil.it>
 */
class Traverser
{
    /**
     * Plugin queue.
     *
     * @return SplQueue<SplQueue<Plugin>>
     */
    private SplQueue $queue;
    /**
     * Parser instance.
     */
    private Parser $parser;
    /**
     * Plugin queue for specific package.
     *
     * @return SplQueue<SplQueue<Plugin>>
     */
    private SplQueue $packageQueue;
    /**
     * AST traverser.
     *
     * @return SplQueue<SplQueue<Plugin>> $queue Plugin queue
     */
    public function __construct(SplQueue $queue)
    {
        $this->queue = $queue;
        $this->parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
    }
    /**
     * Set package name.
     *
     * @param string $package Package name
     *
     * @return void
     */
    public function setPackage(string $package): void
    {
        $this->packageQueue = new SplQueue;
        $newQueue = new SplQueue;
        foreach ($this->queue as $queue) {
            if ($newQueue->count()) {
                $this->packageQueue->enqueue($newQueue);
                $newQueue = new SplQueue;
            }
            /** @var Plugin */
            foreach ($queue as $plugin) {
                if ($plugin->shouldRun($package)) {
                    $newQueue->enqueue($plugin);
                }
            }
        }
        if ($newQueue->count()) {
            $this->packageQueue->enqueue($newQueue);
        }
    }
    /**
     * Traverse AST of file.
     *
     * @param string $file    File
     *
     * @return void
     */
    public function traverse(string $file): void
    {
        /** @var SplQueue<SplQueue<Plugin>> */
        $reducedQueue = new SplQueue;
        $newQueue = new SplQueue;
        foreach ($this->packageQueue ?? $this->queue as $queue) {
            if ($newQueue->count()) {
                $reducedQueue->enqueue($newQueue);
                $newQueue = new SplQueue;
            }
            /** @var Plugin */
            foreach ($queue as $plugin) {
                if ($plugin->shouldRunFile($file)) {
                    $newQueue->enqueue($plugin);
                }
            }
        }
        if ($newQueue->count()) {
            $reducedQueue->enqueue($newQueue);
        } elseif (!$reducedQueue->count()) {
            return;
        }
        $ast = new RootNode($this->parser->parse(\file_get_contents($file)));
        $context = new Context;
        $context->parents->push($ast);
        foreach ($reducedQueue as $queue) {
            $this->traverseNode($ast, $queue, $context);
        }
    }
    /**
     * Traverse node.
     *
     * @param Node             &$node   Node
     * @param SplQueue<Plugin> $plugins Plugins
     * @param Context          $context Context
     *
     * @return void
     */
    public function traverseNode(Node &$node, SplQueue $plugins, Context $context): void
    {
        foreach ($plugins as $plugin) {
            foreach (PluginCache::enterMethods(\get_class($plugin)) as $type => $methods) {
                if (!$node instanceof $type) {
                    continue;
                }
                foreach ($methods as $method) {
                    $result = $plugin->{$method}($node, $context);
                    if ($result instanceof Node) {
                        if (!$result instanceof $node) {
                            $node = $result;
                            continue 2;
                        }
                        $node = $result;
                    }
                }
            }
        }
        $context->parents->push($node);
        foreach ($node->getSubNodeNames() as $name) {
            $node->setAttribute('currentNode', $name);

            $subNode = &$node->{$name};
            if (\is_array($subNode)) {
                for ($index = 0; $index < \count($subNode);) {
                    $node->setAttribute('currentNodeIndex', $index);
                    $this->traverseNode($subNodeNode, $plugins, $context);
                    $index = $node->getAttribute('currentNodeIndex');
                    do {
                        $index++;
                    } while (\in_array($index, $node->getAttribute('skipNodes', [])));
                }
                $node->setAttribute('skipNodes', []);
            } else {
                $this->traverseNode($subNode, $plugins, $context);
            }
        }
        $context->parents->pop();
        foreach ($plugins as $plugin) {
            foreach (PluginCache::leaveMethods(\get_class($plugin)) as $type => $methods) {
                if (!$node instanceof $type) {
                    continue;
                }
                foreach ($methods as $method) {
                    $result = $plugin->{$method}($node, $context);
                    if ($result instanceof Node) {
                        if (!$result instanceof $node) {
                            $node = $result;
                            continue 2;
                        }
                        $node = $result;
                    }
                }
            }
        }
    }
}
