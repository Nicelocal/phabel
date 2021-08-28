<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Phabel\Symfony\Component\String;

use Phabel\Symfony\Component\String\Exception\ExceptionInterface;
use Phabel\Symfony\Component\String\Exception\InvalidArgumentException;
use Phabel\Symfony\Component\String\Exception\RuntimeException;
/**
 * Represents a string of abstract Unicode characters.
 *
 * Unicode defines 3 types of "characters" (bytes, code points and grapheme clusters).
 * This class is the abstract type to use as a type-hint when the logic you want to
 * implement is Unicode-aware but doesn't care about code points vs grapheme clusters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @throws ExceptionInterface
 */
abstract class AbstractUnicodeString extends AbstractString
{
    const NFC = \Normalizer::NFC;
    const NFD = \Normalizer::NFD;
    const NFKC = \Normalizer::NFKC;
    const NFKD = \Normalizer::NFKD;
    // all ASCII letters sorted by typical frequency of occurrence
    const ASCII = " eiasntrolud][cmp'\ng|hv.fb,:=-q10C2*yx)(L9AS/P\"EjMIk3>5T<D4}B{8FwR67UGN;JzV#HOW_&!K?XQ%Y\\\tZ+~^\$@`\x00\x01\x02\x03\x04\x05\x06\x07\x08\v\f\r\x0e\x0f\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1a\x1b\x1c\x1d\x1e\x1f";
    // the subset of folded case mappings that is not in lower case mappings
    const FOLD_FROM = ['İ', 'µ', 'ſ', "ͅ", 'ς', 'ϐ', 'ϑ', 'ϕ', 'ϖ', 'ϰ', 'ϱ', 'ϵ', 'ẛ', "ι", 'ß', 'İ', 'ŉ', 'ǰ', 'ΐ', 'ΰ', 'և', 'ẖ', 'ẗ', 'ẘ', 'ẙ', 'ẚ', 'ẞ', 'ὐ', 'ὒ', 'ὔ', 'ὖ', 'ᾀ', 'ᾁ', 'ᾂ', 'ᾃ', 'ᾄ', 'ᾅ', 'ᾆ', 'ᾇ', 'ᾈ', 'ᾉ', 'ᾊ', 'ᾋ', 'ᾌ', 'ᾍ', 'ᾎ', 'ᾏ', 'ᾐ', 'ᾑ', 'ᾒ', 'ᾓ', 'ᾔ', 'ᾕ', 'ᾖ', 'ᾗ', 'ᾘ', 'ᾙ', 'ᾚ', 'ᾛ', 'ᾜ', 'ᾝ', 'ᾞ', 'ᾟ', 'ᾠ', 'ᾡ', 'ᾢ', 'ᾣ', 'ᾤ', 'ᾥ', 'ᾦ', 'ᾧ', 'ᾨ', 'ᾩ', 'ᾪ', 'ᾫ', 'ᾬ', 'ᾭ', 'ᾮ', 'ᾯ', 'ᾲ', 'ᾳ', 'ᾴ', 'ᾶ', 'ᾷ', 'ᾼ', 'ῂ', 'ῃ', 'ῄ', 'ῆ', 'ῇ', 'ῌ', 'ῒ', 'ΐ', 'ῖ', 'ῗ', 'ῢ', 'ΰ', 'ῤ', 'ῦ', 'ῧ', 'ῲ', 'ῳ', 'ῴ', 'ῶ', 'ῷ', 'ῼ', 'ﬀ', 'ﬁ', 'ﬂ', 'ﬃ', 'ﬄ', 'ﬅ', 'ﬆ', 'ﬓ', 'ﬔ', 'ﬕ', 'ﬖ', 'ﬗ'];
    const FOLD_TO = ['i̇', 'μ', 's', 'ι', 'σ', 'β', 'θ', 'φ', 'π', 'κ', 'ρ', 'ε', 'ṡ', 'ι', 'ss', 'i̇', 'ʼn', 'ǰ', 'ΐ', 'ΰ', 'եւ', 'ẖ', 'ẗ', 'ẘ', 'ẙ', 'aʾ', 'ss', 'ὐ', 'ὒ', 'ὔ', 'ὖ', 'ἀι', 'ἁι', 'ἂι', 'ἃι', 'ἄι', 'ἅι', 'ἆι', 'ἇι', 'ἀι', 'ἁι', 'ἂι', 'ἃι', 'ἄι', 'ἅι', 'ἆι', 'ἇι', 'ἠι', 'ἡι', 'ἢι', 'ἣι', 'ἤι', 'ἥι', 'ἦι', 'ἧι', 'ἠι', 'ἡι', 'ἢι', 'ἣι', 'ἤι', 'ἥι', 'ἦι', 'ἧι', 'ὠι', 'ὡι', 'ὢι', 'ὣι', 'ὤι', 'ὥι', 'ὦι', 'ὧι', 'ὠι', 'ὡι', 'ὢι', 'ὣι', 'ὤι', 'ὥι', 'ὦι', 'ὧι', 'ὰι', 'αι', 'άι', 'ᾶ', 'ᾶι', 'αι', 'ὴι', 'ηι', 'ήι', 'ῆ', 'ῆι', 'ηι', 'ῒ', 'ΐ', 'ῖ', 'ῗ', 'ῢ', 'ΰ', 'ῤ', 'ῦ', 'ῧ', 'ὼι', 'ωι', 'ώι', 'ῶ', 'ῶι', 'ωι', 'ff', 'fi', 'fl', 'ffi', 'ffl', 'st', 'st', 'մն', 'մե', 'մի', 'վն', 'մխ'];
    // the subset of upper case mappings that map one code point to many code points
    const UPPER_FROM = ['ß', 'ﬀ', 'ﬁ', 'ﬂ', 'ﬃ', 'ﬄ', 'ﬅ', 'ﬆ', 'և', 'ﬓ', 'ﬔ', 'ﬕ', 'ﬖ', 'ﬗ', 'ŉ', 'ΐ', 'ΰ', 'ǰ', 'ẖ', 'ẗ', 'ẘ', 'ẙ', 'ẚ', 'ὐ', 'ὒ', 'ὔ', 'ὖ', 'ᾶ', 'ῆ', 'ῒ', 'ΐ', 'ῖ', 'ῗ', 'ῢ', 'ΰ', 'ῤ', 'ῦ', 'ῧ', 'ῶ'];
    const UPPER_TO = ['SS', 'FF', 'FI', 'FL', 'FFI', 'FFL', 'ST', 'ST', 'ԵՒ', 'ՄՆ', 'ՄԵ', 'ՄԻ', 'ՎՆ', 'ՄԽ', 'ʼN', 'Ϊ́', 'Ϋ́', 'J̌', 'H̱', 'T̈', 'W̊', 'Y̊', 'Aʾ', 'Υ̓', 'Υ̓̀', 'Υ̓́', 'Υ̓͂', 'Α͂', 'Η͂', 'Ϊ̀', 'Ϊ́', 'Ι͂', 'Ϊ͂', 'Ϋ̀', 'Ϋ́', 'Ρ̓', 'Υ͂', 'Ϋ͂', 'Ω͂'];
    // the subset of https://github.com/unicode-org/cldr/blob/master/common/transforms/Latin-ASCII.xml that is not in NFKD
    const TRANSLIT_FROM = ['Æ', 'Ð', 'Ø', 'Þ', 'ß', 'æ', 'ð', 'ø', 'þ', 'Đ', 'đ', 'Ħ', 'ħ', 'ı', 'ĸ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'ŉ', 'Ŋ', 'ŋ', 'Œ', 'œ', 'Ŧ', 'ŧ', 'ƀ', 'Ɓ', 'Ƃ', 'ƃ', 'Ƈ', 'ƈ', 'Ɖ', 'Ɗ', 'Ƌ', 'ƌ', 'Ɛ', 'Ƒ', 'ƒ', 'Ɠ', 'ƕ', 'Ɩ', 'Ɨ', 'Ƙ', 'ƙ', 'ƚ', 'Ɲ', 'ƞ', 'Ƣ', 'ƣ', 'Ƥ', 'ƥ', 'ƫ', 'Ƭ', 'ƭ', 'Ʈ', 'Ʋ', 'Ƴ', 'ƴ', 'Ƶ', 'ƶ', 'Ǆ', 'ǅ', 'ǆ', 'Ǥ', 'ǥ', 'ȡ', 'Ȥ', 'ȥ', 'ȴ', 'ȵ', 'ȶ', 'ȷ', 'ȸ', 'ȹ', 'Ⱥ', 'Ȼ', 'ȼ', 'Ƚ', 'Ⱦ', 'ȿ', 'ɀ', 'Ƀ', 'Ʉ', 'Ɇ', 'ɇ', 'Ɉ', 'ɉ', 'Ɍ', 'ɍ', 'Ɏ', 'ɏ', 'ɓ', 'ɕ', 'ɖ', 'ɗ', 'ɛ', 'ɟ', 'ɠ', 'ɡ', 'ɢ', 'ɦ', 'ɧ', 'ɨ', 'ɪ', 'ɫ', 'ɬ', 'ɭ', 'ɱ', 'ɲ', 'ɳ', 'ɴ', 'ɶ', 'ɼ', 'ɽ', 'ɾ', 'ʀ', 'ʂ', 'ʈ', 'ʉ', 'ʋ', 'ʏ', 'ʐ', 'ʑ', 'ʙ', 'ʛ', 'ʜ', 'ʝ', 'ʟ', 'ʠ', 'ʣ', 'ʥ', 'ʦ', 'ʪ', 'ʫ', 'ᴀ', 'ᴁ', 'ᴃ', 'ᴄ', 'ᴅ', 'ᴆ', 'ᴇ', 'ᴊ', 'ᴋ', 'ᴌ', 'ᴍ', 'ᴏ', 'ᴘ', 'ᴛ', 'ᴜ', 'ᴠ', 'ᴡ', 'ᴢ', 'ᵫ', 'ᵬ', 'ᵭ', 'ᵮ', 'ᵯ', 'ᵰ', 'ᵱ', 'ᵲ', 'ᵳ', 'ᵴ', 'ᵵ', 'ᵶ', 'ᵺ', 'ᵻ', 'ᵽ', 'ᵾ', 'ᶀ', 'ᶁ', 'ᶂ', 'ᶃ', 'ᶄ', 'ᶅ', 'ᶆ', 'ᶇ', 'ᶈ', 'ᶉ', 'ᶊ', 'ᶌ', 'ᶍ', 'ᶎ', 'ᶏ', 'ᶑ', 'ᶒ', 'ᶓ', 'ᶖ', 'ᶙ', 'ẚ', 'ẜ', 'ẝ', 'ẞ', 'Ỻ', 'ỻ', 'Ỽ', 'ỽ', 'Ỿ', 'ỿ', '©', '®', '₠', '₢', '₣', '₤', '₧', '₺', '₹', 'ℌ', '℞', '㎧', '㎮', '㏆', '㏗', '㏞', '㏟', '¼', '½', '¾', '⅓', '⅔', '⅕', '⅖', '⅗', '⅘', '⅙', '⅚', '⅛', '⅜', '⅝', '⅞', '⅟', '〇', '‘', '’', '‚', '‛', '“', '”', '„', '‟', '′', '″', '〝', '〞', '«', '»', '‹', '›', '‐', '‑', '‒', '–', '—', '―', '︱', '︲', '﹘', '‖', '⁄', '⁅', '⁆', '⁎', '、', '。', '〈', '〉', '《', '》', '〔', '〕', '〘', '〙', '〚', '〛', '︑', '︒', '︹', '︺', '︽', '︾', '︿', '﹀', '﹑', '﹝', '﹞', '｟', '｠', '｡', '､', '×', '÷', '−', '∕', '∖', '∣', '∥', '≪', '≫', '⦅', '⦆'];
    const TRANSLIT_TO = ['AE', 'D', 'O', 'TH', 'ss', 'ae', 'd', 'o', 'th', 'D', 'd', 'H', 'h', 'i', 'q', 'L', 'l', 'L', 'l', '\'n', 'N', 'n', 'OE', 'oe', 'T', 't', 'b', 'B', 'B', 'b', 'C', 'c', 'D', 'D', 'D', 'd', 'E', 'F', 'f', 'G', 'hv', 'I', 'I', 'K', 'k', 'l', 'N', 'n', 'OI', 'oi', 'P', 'p', 't', 'T', 't', 'T', 'V', 'Y', 'y', 'Z', 'z', 'DZ', 'Dz', 'dz', 'G', 'g', 'd', 'Z', 'z', 'l', 'n', 't', 'j', 'db', 'qp', 'A', 'C', 'c', 'L', 'T', 's', 'z', 'B', 'U', 'E', 'e', 'J', 'j', 'R', 'r', 'Y', 'y', 'b', 'c', 'd', 'd', 'e', 'j', 'g', 'g', 'G', 'h', 'h', 'i', 'I', 'l', 'l', 'l', 'm', 'n', 'n', 'N', 'OE', 'r', 'r', 'r', 'R', 's', 't', 'u', 'v', 'Y', 'z', 'z', 'B', 'G', 'H', 'j', 'L', 'q', 'dz', 'dz', 'ts', 'ls', 'lz', 'A', 'AE', 'B', 'C', 'D', 'D', 'E', 'J', 'K', 'L', 'M', 'O', 'P', 'T', 'U', 'V', 'W', 'Z', 'ue', 'b', 'd', 'f', 'm', 'n', 'p', 'r', 'r', 's', 't', 'z', 'th', 'I', 'p', 'U', 'b', 'd', 'f', 'g', 'k', 'l', 'm', 'n', 'p', 'r', 's', 'v', 'x', 'z', 'a', 'd', 'e', 'e', 'i', 'u', 'a', 's', 's', 'SS', 'LL', 'll', 'V', 'v', 'Y', 'y', '(C)', '(R)', 'CE', 'Cr', 'Fr.', 'L.', 'Pts', 'TL', 'Rs', 'x', 'Rx', 'm/s', 'rad/s', 'C/kg', 'pH', 'V/m', 'A/m', ' 1/4', ' 1/2', ' 3/4', ' 1/3', ' 2/3', ' 1/5', ' 2/5', ' 3/5', ' 4/5', ' 1/6', ' 5/6', ' 1/8', ' 3/8', ' 5/8', ' 7/8', ' 1/', '0', '\'', '\'', ',', '\'', '"', '"', ',,', '"', '\'', '"', '"', '"', '<<', '>>', '<', '>', '-', '-', '-', '-', '-', '-', '-', '-', '-', '||', '/', '[', ']', '*', ',', '.', '<', '>', '<<', '>>', '[', ']', '[', ']', '[', ']', ',', '.', '[', ']', '<<', '>>', '<', '>', ',', '[', ']', '((', '))', '.', ',', '*', '/', '-', '/', '\\', '|', '||', '<<', '>>', '((', '))'];
    private static $transliterators = [];
    /**
     * @return static
     */
    public static function fromCodePoints(...$codes)
    {
        foreach ($codes as $phabelVariadicIndex => $phabelVariadic) {
            if (!\is_int($phabelVariadic)) {
                if (!(\is_bool($phabelVariadic) || \is_numeric($phabelVariadic))) {
                    throw new \TypeError(__METHOD__ . '(): Argument #' . (1 + $phabelVariadicIndex) . ' must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($codes) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                } else {
                    $phabelVariadic = (int) $phabelVariadic;
                }
            }
        }
        $string = '';
        foreach ($codes as $code) {
            if (0x80 > ($code %= 0x200000)) {
                $string .= \chr($code);
            } elseif (0x800 > $code) {
                $string .= \chr(0xc0 | $code >> 6) . \chr(0x80 | $code & 0x3f);
            } elseif (0x10000 > $code) {
                $string .= \chr(0xe0 | $code >> 12) . \chr(0x80 | $code >> 6 & 0x3f) . \chr(0x80 | $code & 0x3f);
            } else {
                $string .= \chr(0xf0 | $code >> 18) . \chr(0x80 | $code >> 12 & 0x3f) . \chr(0x80 | $code >> 6 & 0x3f) . \chr(0x80 | $code & 0x3f);
            }
        }
        $phabelReturn = new static($string);
        if (!$phabelReturn instanceof self) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . self::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    /**
     * Generic UTF-8 to ASCII transliteration.
     *
     * Install the intl extension for best results.
     *
     * @param string[]|\Transliterator[]|\Closure[] $rules See "*-Latin" rules from Transliterator::listIDs()
     */
    public function ascii(array $rules = [])
    {
        $str = clone $this;
        $s = $str->string;
        $str->string = '';
        \array_unshift($rules, 'nfd');
        $rules[] = 'latin-ascii';
        if (\function_exists('transliterator_transliterate')) {
            $rules[] = 'any-latin/bgn';
        }
        $rules[] = 'nfkd';
        $rules[] = '[:nonspacing mark:] remove';
        while (\strlen($s) - 1 > ($i = \strspn($s, self::ASCII))) {
            if (0 < --$i) {
                $str->string .= \substr($s, 0, $i);
                $s = \substr($s, $i);
            }
            if (!($rule = \array_shift($rules))) {
                $rules = [];
                // An empty rule interrupts the next ones
            }
            if ($rule instanceof \Transliterator) {
                $s = $rule->transliterate($s);
            } elseif ($rule instanceof \Closure) {
                $s = $rule($s);
            } elseif ($rule) {
                if ('nfd' === ($rule = \strtolower($rule))) {
                    \normalizer_is_normalized($s, self::NFD) ?: ($s = \normalizer_normalize($s, self::NFD));
                } elseif ('nfkd' === $rule) {
                    \normalizer_is_normalized($s, self::NFKD) ?: ($s = \normalizer_normalize($s, self::NFKD));
                } elseif ('[:nonspacing mark:] remove' === $rule) {
                    $s = \preg_replace('/\\p{Mn}++/u', '', $s);
                } elseif ('latin-ascii' === $rule) {
                    $s = \str_replace(self::TRANSLIT_FROM, self::TRANSLIT_TO, $s);
                } elseif ('de-ascii' === $rule) {
                    $s = \preg_replace("/([AUO])̈(?=\\p{Ll})/u", '$1e', $s);
                    $s = \str_replace(["ä", "ö", "ü", "Ä", "Ö", "Ü"], ['ae', 'oe', 'ue', 'AE', 'OE', 'UE'], $s);
                } elseif (\function_exists('transliterator_transliterate')) {
                    if (null === ($transliterator = isset(self::$transliterators[$rule]) ? self::$transliterators[$rule] : (self::$transliterators[$rule] = \Transliterator::create($rule)))) {
                        if ('any-latin/bgn' === $rule) {
                            $rule = 'any-latin';
                            $transliterator = isset(self::$transliterators[$rule]) ? self::$transliterators[$rule] : (self::$transliterators[$rule] = \Transliterator::create($rule));
                        }
                        if (null === $transliterator) {
                            throw new InvalidArgumentException(\sprintf('Unknown transliteration rule "%s".', $rule));
                        }
                        self::$transliterators['any-latin/bgn'] = $transliterator;
                    }
                    $s = $transliterator->transliterate($s);
                }
            } elseif (!\function_exists('iconv')) {
                $s = \preg_replace('/[^\\x00-\\x7F]/u', '?', $s);
            } else {
                $s = @\preg_replace_callback('/[^\\x00-\\x7F]/u', static function ($c) {
                    $c = (string) \iconv('UTF-8', 'ASCII//TRANSLIT', $c[0]);
                    if ('' === $c && '' === \iconv('UTF-8', 'ASCII//TRANSLIT', '²')) {
                        throw new \LogicException(\sprintf('"%s" requires a translit-able iconv implementation, try installing "gnu-libiconv" if you\'re using Alpine Linux.', static::class));
                    }
                    return 1 < \strlen($c) ? \ltrim($c, '\'`"^~') : ('' !== $c ? $c : '?');
                }, $s);
            }
        }
        $str->string .= $s;
        $phabelReturn = $str;
        if (!$phabelReturn instanceof self) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . self::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function camel()
    {
        $str = clone $this;
        $str->string = \str_replace(' ', '', \preg_replace_callback('/\\b./u', static function ($m) use(&$i) {
            return 1 === ++$i ? 'İ' === $m[0] ? 'i̇' : \mb_strtolower($m[0], 'UTF-8') : \mb_convert_case($m[0], \MB_CASE_TITLE, 'UTF-8');
        }, \preg_replace('/[^\\pL0-9]++/u', ' ', $this->string)));
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    /**
     * @return int[]
     */
    public function codePointsAt($offset)
    {
        if (!\is_int($offset)) {
            if (!(\is_bool($offset) || \is_numeric($offset))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($offset) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($offset) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $offset = (int) $offset;
            }
        }
        $str = $this->slice($offset, 1);
        if ('' === $str->string) {
            $phabelReturn = [];
            if (!\is_array($phabelReturn)) {
                throw new \TypeError(__METHOD__ . '(): Return value must be of type array, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            }
            return $phabelReturn;
        }
        $codePoints = [];
        foreach (\preg_split('//u', $str->string, -1, \PREG_SPLIT_NO_EMPTY) as $c) {
            $codePoints[] = \mb_ord($c, 'UTF-8');
        }
        $phabelReturn = $codePoints;
        if (!\is_array($phabelReturn)) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type array, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function folded($compat = \true)
    {
        if (!\is_bool($compat)) {
            if (!(\is_bool($compat) || \is_numeric($compat) || \is_string($compat))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($compat) must be of type bool, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($compat) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $compat = (bool) $compat;
            }
        }
        $str = clone $this;
        if (!$compat || \PHP_VERSION_ID < 70300 || !\defined('Normalizer::NFKC_CF')) {
            $str->string = \normalizer_normalize($str->string, $compat ? \Normalizer::NFKC : \Normalizer::NFC);
            $str->string = \mb_strtolower(\str_replace(self::FOLD_FROM, self::FOLD_TO, $this->string), 'UTF-8');
        } else {
            $str->string = \normalizer_normalize($str->string, \Normalizer::NFKC_CF);
        }
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function join(array $strings, $lastGlue = null)
    {
        if (!\is_null($lastGlue)) {
            if (!\is_string($lastGlue)) {
                if (!(\is_string($lastGlue) || \is_object($lastGlue) && \method_exists($lastGlue, '__toString') || (\is_bool($lastGlue) || \is_numeric($lastGlue)))) {
                    throw new \TypeError(__METHOD__ . '(): Argument #2 ($lastGlue) must be of type ?string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($lastGlue) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                } else {
                    $lastGlue = (string) $lastGlue;
                }
            }
        }
        $str = clone $this;
        $tail = null !== $lastGlue && 1 < \count($strings) ? $lastGlue . \array_pop($strings) : '';
        $str->string = \implode($this->string, $strings) . $tail;
        if (!\preg_match('//u', $str->string)) {
            throw new InvalidArgumentException('Invalid UTF-8 string.');
        }
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function lower()
    {
        $str = clone $this;
        $str->string = \mb_strtolower(\str_replace('İ', 'i̇', $str->string), 'UTF-8');
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function match($regexp, $flags = 0, $offset = 0)
    {
        if (!\is_string($regexp)) {
            if (!(\is_string($regexp) || \is_object($regexp) && \method_exists($regexp, '__toString') || (\is_bool($regexp) || \is_numeric($regexp)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($regexp) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($regexp) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $regexp = (string) $regexp;
            }
        }
        if (!\is_int($flags)) {
            if (!(\is_bool($flags) || \is_numeric($flags))) {
                throw new \TypeError(__METHOD__ . '(): Argument #2 ($flags) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($flags) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $flags = (int) $flags;
            }
        }
        if (!\is_int($offset)) {
            if (!(\is_bool($offset) || \is_numeric($offset))) {
                throw new \TypeError(__METHOD__ . '(): Argument #3 ($offset) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($offset) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $offset = (int) $offset;
            }
        }
        $match = (\PREG_PATTERN_ORDER | \PREG_SET_ORDER) & $flags ? 'preg_match_all' : 'preg_match';
        if ($this->ignoreCase) {
            $regexp .= 'i';
        }
        \set_error_handler(static function ($t, $m) {
            throw new InvalidArgumentException($m);
        });
        try {
            if (\false === $match($regexp . 'u', $this->string, $matches, $flags | \PREG_UNMATCHED_AS_NULL, $offset)) {
                $lastError = \preg_last_error();
                foreach (\get_defined_constants(\true)['pcre'] as $k => $v) {
                    if ($lastError === $v && '_ERROR' === \substr($k, -6)) {
                        throw new RuntimeException('Matching failed with ' . $k . '.');
                    }
                }
                throw new RuntimeException('Matching failed with unknown error code.');
            }
        } finally {
            \restore_error_handler();
        }
        $phabelReturn = $matches;
        if (!\is_array($phabelReturn)) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type array, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    /**
     * @return static
     */
    public function normalize($form = self::NFC)
    {
        if (!\is_int($form)) {
            if (!(\is_bool($form) || \is_numeric($form))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($form) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($form) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $form = (int) $form;
            }
        }
        if (!\in_array($form, [self::NFC, self::NFD, self::NFKC, self::NFKD])) {
            throw new InvalidArgumentException('Unsupported normalization form.');
        }
        $str = clone $this;
        \normalizer_is_normalized($str->string, $form) ?: ($str->string = \normalizer_normalize($str->string, $form));
        $phabelReturn = $str;
        if (!$phabelReturn instanceof self) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . self::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function padBoth($length, $padStr = ' ')
    {
        if (!\is_int($length)) {
            if (!(\is_bool($length) || \is_numeric($length))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($length) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($length) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $length = (int) $length;
            }
        }
        if (!\is_string($padStr)) {
            if (!(\is_string($padStr) || \is_object($padStr) && \method_exists($padStr, '__toString') || (\is_bool($padStr) || \is_numeric($padStr)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #2 ($padStr) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($padStr) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $padStr = (string) $padStr;
            }
        }
        if ('' === $padStr || !\preg_match('//u', $padStr)) {
            throw new InvalidArgumentException('Invalid UTF-8 string.');
        }
        $pad = clone $this;
        $pad->string = $padStr;
        $phabelReturn = $this->pad($length, $pad, \STR_PAD_BOTH);
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function padEnd($length, $padStr = ' ')
    {
        if (!\is_int($length)) {
            if (!(\is_bool($length) || \is_numeric($length))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($length) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($length) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $length = (int) $length;
            }
        }
        if (!\is_string($padStr)) {
            if (!(\is_string($padStr) || \is_object($padStr) && \method_exists($padStr, '__toString') || (\is_bool($padStr) || \is_numeric($padStr)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #2 ($padStr) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($padStr) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $padStr = (string) $padStr;
            }
        }
        if ('' === $padStr || !\preg_match('//u', $padStr)) {
            throw new InvalidArgumentException('Invalid UTF-8 string.');
        }
        $pad = clone $this;
        $pad->string = $padStr;
        $phabelReturn = $this->pad($length, $pad, \STR_PAD_RIGHT);
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function padStart($length, $padStr = ' ')
    {
        if (!\is_int($length)) {
            if (!(\is_bool($length) || \is_numeric($length))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($length) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($length) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $length = (int) $length;
            }
        }
        if (!\is_string($padStr)) {
            if (!(\is_string($padStr) || \is_object($padStr) && \method_exists($padStr, '__toString') || (\is_bool($padStr) || \is_numeric($padStr)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #2 ($padStr) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($padStr) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $padStr = (string) $padStr;
            }
        }
        if ('' === $padStr || !\preg_match('//u', $padStr)) {
            throw new InvalidArgumentException('Invalid UTF-8 string.');
        }
        $pad = clone $this;
        $pad->string = $padStr;
        $phabelReturn = $this->pad($length, $pad, \STR_PAD_LEFT);
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function replaceMatches($fromRegexp, $to)
    {
        if (!\is_string($fromRegexp)) {
            if (!(\is_string($fromRegexp) || \is_object($fromRegexp) && \method_exists($fromRegexp, '__toString') || (\is_bool($fromRegexp) || \is_numeric($fromRegexp)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($fromRegexp) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($fromRegexp) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $fromRegexp = (string) $fromRegexp;
            }
        }
        if ($this->ignoreCase) {
            $fromRegexp .= 'i';
        }
        if (\is_array($to) || $to instanceof \Closure) {
            if (!\is_callable($to)) {
                throw new \TypeError(\sprintf('Argument 2 passed to "%s::replaceMatches()" must be callable, array given.', static::class));
            }
            $replace = 'preg_replace_callback';
            $to = static function (array $m) use($to) {
                $to = $to($m);
                if ('' !== $to && (!\is_string($to) || !\preg_match('//u', $to))) {
                    throw new InvalidArgumentException('Replace callback must return a valid UTF-8 string.');
                }
                $phabelReturn = $to;
                if (!\is_string($phabelReturn)) {
                    if (!(\is_string($phabelReturn) || \is_object($phabelReturn) && \method_exists($phabelReturn, '__toString') || (\is_bool($phabelReturn) || \is_numeric($phabelReturn)))) {
                        throw new \TypeError(__METHOD__ . '(): Return value must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                    } else {
                        $phabelReturn = (string) $phabelReturn;
                    }
                }
                return $phabelReturn;
            };
        } elseif ('' !== $to && !\preg_match('//u', $to)) {
            throw new InvalidArgumentException('Invalid UTF-8 string.');
        } else {
            $replace = 'preg_replace';
        }
        \set_error_handler(static function ($t, $m) {
            throw new InvalidArgumentException($m);
        });
        try {
            if (null === ($string = $replace($fromRegexp . 'u', $to, $this->string))) {
                $lastError = \preg_last_error();
                foreach (\get_defined_constants(\true)['pcre'] as $k => $v) {
                    if ($lastError === $v && '_ERROR' === \substr($k, -6)) {
                        throw new RuntimeException('Matching failed with ' . $k . '.');
                    }
                }
                throw new RuntimeException('Matching failed with unknown error code.');
            }
        } finally {
            \restore_error_handler();
        }
        $str = clone $this;
        $str->string = $string;
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function reverse()
    {
        $str = clone $this;
        $str->string = \implode('', \array_reverse(\preg_split('/(\\X)/u', $str->string, -1, \PREG_SPLIT_DELIM_CAPTURE | \PREG_SPLIT_NO_EMPTY)));
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function snake()
    {
        $str = $this->camel()->title();
        $str->string = \mb_strtolower(\preg_replace(['/(\\p{Lu}+)(\\p{Lu}\\p{Ll})/u', '/([\\p{Ll}0-9])(\\p{Lu})/u'], 'Phabel\\1_\\2', $str->string), 'UTF-8');
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function title($allWords = \false)
    {
        if (!\is_bool($allWords)) {
            if (!(\is_bool($allWords) || \is_numeric($allWords) || \is_string($allWords))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($allWords) must be of type bool, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($allWords) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $allWords = (bool) $allWords;
            }
        }
        $str = clone $this;
        $limit = $allWords ? -1 : 1;
        $str->string = \preg_replace_callback('/\\b./u', static function (array $m) {
            $phabelReturn = \mb_convert_case($m[0], \MB_CASE_TITLE, 'UTF-8');
            if (!\is_string($phabelReturn)) {
                if (!(\is_string($phabelReturn) || \is_object($phabelReturn) && \method_exists($phabelReturn, '__toString') || (\is_bool($phabelReturn) || \is_numeric($phabelReturn)))) {
                    throw new \TypeError(__METHOD__ . '(): Return value must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                } else {
                    $phabelReturn = (string) $phabelReturn;
                }
            }
            return $phabelReturn;
        }, $str->string, $limit);
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function trim($chars = " \t\n\r\x00\v\f ﻿")
    {
        if (!\is_string($chars)) {
            if (!(\is_string($chars) || \is_object($chars) && \method_exists($chars, '__toString') || (\is_bool($chars) || \is_numeric($chars)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($chars) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($chars) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $chars = (string) $chars;
            }
        }
        if (" \t\n\r\x00\v\f ﻿" !== $chars && !\preg_match('//u', $chars)) {
            throw new InvalidArgumentException('Invalid UTF-8 chars.');
        }
        $chars = \preg_quote($chars);
        $str = clone $this;
        $str->string = \preg_replace("{^[{$chars}]++|[{$chars}]++\$}uD", '', $str->string);
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function trimEnd($chars = " \t\n\r\x00\v\f ﻿")
    {
        if (!\is_string($chars)) {
            if (!(\is_string($chars) || \is_object($chars) && \method_exists($chars, '__toString') || (\is_bool($chars) || \is_numeric($chars)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($chars) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($chars) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $chars = (string) $chars;
            }
        }
        if (" \t\n\r\x00\v\f ﻿" !== $chars && !\preg_match('//u', $chars)) {
            throw new InvalidArgumentException('Invalid UTF-8 chars.');
        }
        $chars = \preg_quote($chars);
        $str = clone $this;
        $str->string = \preg_replace("{[{$chars}]++\$}uD", '', $str->string);
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function trimStart($chars = " \t\n\r\x00\v\f ﻿")
    {
        if (!\is_string($chars)) {
            if (!(\is_string($chars) || \is_object($chars) && \method_exists($chars, '__toString') || (\is_bool($chars) || \is_numeric($chars)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($chars) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($chars) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $chars = (string) $chars;
            }
        }
        if (" \t\n\r\x00\v\f ﻿" !== $chars && !\preg_match('//u', $chars)) {
            throw new InvalidArgumentException('Invalid UTF-8 chars.');
        }
        $chars = \preg_quote($chars);
        $str = clone $this;
        $str->string = \preg_replace("{^[{$chars}]++}uD", '', $str->string);
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function upper()
    {
        $str = clone $this;
        $str->string = \mb_strtoupper($str->string, 'UTF-8');
        if (\PHP_VERSION_ID < 70300) {
            $str->string = \str_replace(self::UPPER_FROM, self::UPPER_TO, $str->string);
        }
        $phabelReturn = $str;
        if (!$phabelReturn instanceof parent) {
            throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
        }
        return $phabelReturn;
    }
    public function width($ignoreAnsiDecoration = \true)
    {
        if (!\is_bool($ignoreAnsiDecoration)) {
            if (!(\is_bool($ignoreAnsiDecoration) || \is_numeric($ignoreAnsiDecoration) || \is_string($ignoreAnsiDecoration))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($ignoreAnsiDecoration) must be of type bool, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($ignoreAnsiDecoration) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $ignoreAnsiDecoration = (bool) $ignoreAnsiDecoration;
            }
        }
        $width = 0;
        $s = \str_replace(["\x00", "\x05", "\x07"], '', $this->string);
        if (\false !== \strpos($s, "\r")) {
            $s = \str_replace(["\r\n", "\r"], "\n", $s);
        }
        if (!$ignoreAnsiDecoration) {
            $s = \preg_replace('/[\\p{Cc}\\x7F]++/u', '', $s);
        }
        foreach (\explode("\n", $s) as $s) {
            if ($ignoreAnsiDecoration) {
                $s = \preg_replace('/(?:\\x1B(?:
                    \\[ [\\x30-\\x3F]*+ [\\x20-\\x2F]*+ [0x40-\\x7E]
                    | [P\\]X^_] .*? \\x1B\\\\
                    | [\\x41-\\x7E]
                )|[\\p{Cc}\\x7F]++)/xu', '', $s);
            }
            // Non printable characters have been dropped, so wcswidth cannot logically return -1.
            $width += $this->wcswidth($s);
        }
        $phabelReturn = $width;
        if (!\is_int($phabelReturn)) {
            if (!(\is_bool($phabelReturn) || \is_numeric($phabelReturn))) {
                throw new \TypeError(__METHOD__ . '(): Return value must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $phabelReturn = (int) $phabelReturn;
            }
        }
        return $phabelReturn;
    }
    /**
     * @return static
     */
    private function pad($len, self $pad, $type)
    {
        if (!\is_int($len)) {
            if (!(\is_bool($len) || \is_numeric($len))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($len) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($len) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $len = (int) $len;
            }
        }
        if (!\is_int($type)) {
            if (!(\is_bool($type) || \is_numeric($type))) {
                throw new \TypeError(__METHOD__ . '(): Argument #3 ($type) must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($type) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $type = (int) $type;
            }
        }
        $sLen = $this->length();
        if ($len <= $sLen) {
            $phabelReturn = clone $this;
            if (!$phabelReturn instanceof parent) {
                throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            }
            return $phabelReturn;
        }
        $padLen = $pad->length();
        $freeLen = $len - $sLen;
        $len = $freeLen % $padLen;
        switch ($type) {
            case \STR_PAD_RIGHT:
                $phabelReturn = $this->append(\str_repeat($pad->string, \intdiv($freeLen, $padLen)) . ($len ? $pad->slice(0, $len) : ''));
                if (!$phabelReturn instanceof parent) {
                    throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                }
                return $phabelReturn;
            case \STR_PAD_LEFT:
                $phabelReturn = $this->prepend(\str_repeat($pad->string, \intdiv($freeLen, $padLen)) . ($len ? $pad->slice(0, $len) : ''));
                if (!$phabelReturn instanceof parent) {
                    throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                }
                return $phabelReturn;
            case \STR_PAD_BOTH:
                $freeLen /= 2;
                $rightLen = \ceil($freeLen);
                $len = $rightLen % $padLen;
                $str = $this->append(\str_repeat($pad->string, \intdiv($rightLen, $padLen)) . ($len ? $pad->slice(0, $len) : ''));
                $leftLen = \floor($freeLen);
                $len = $leftLen % $padLen;
                $phabelReturn = $str->prepend(\str_repeat($pad->string, \intdiv($leftLen, $padLen)) . ($len ? $pad->slice(0, $len) : ''));
                if (!$phabelReturn instanceof parent) {
                    throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                }
                return $phabelReturn;
            default:
                throw new InvalidArgumentException('Invalid padding type.');
        }
        throw new \TypeError(__METHOD__ . '(): Return value must be of type ' . parent::class . ', none returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
    }
    /**
     * Based on https://github.com/jquast/wcwidth, a Python implementation of https://www.cl.cam.ac.uk/~mgk25/ucs/wcwidth.c.
     */
    private function wcswidth($string)
    {
        if (!\is_string($string)) {
            if (!(\is_string($string) || \is_object($string) && \method_exists($string, '__toString') || (\is_bool($string) || \is_numeric($string)))) {
                throw new \TypeError(__METHOD__ . '(): Argument #1 ($string) must be of type string, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($string) . ' given, called in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $string = (string) $string;
            }
        }
        $width = 0;
        foreach (\preg_split('//u', $string, -1, \PREG_SPLIT_NO_EMPTY) as $c) {
            $codePoint = \mb_ord($c, 'UTF-8');
            if (0 === $codePoint || 0x34f === $codePoint || 0x200b <= $codePoint && 0x200f >= $codePoint || 0x2028 === $codePoint || 0x2029 === $codePoint || 0x202a <= $codePoint && 0x202e >= $codePoint || 0x2060 <= $codePoint && 0x2063 >= $codePoint) {
                continue;
            }
            // Non printable characters
            if (32 > $codePoint || 0x7f <= $codePoint && 0xa0 > $codePoint) {
                $phabelReturn = -1;
                if (!\is_int($phabelReturn)) {
                    if (!(\is_bool($phabelReturn) || \is_numeric($phabelReturn))) {
                        throw new \TypeError(__METHOD__ . '(): Return value must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
                    } else {
                        $phabelReturn = (int) $phabelReturn;
                    }
                }
                return $phabelReturn;
            }
            static $tableZero;
            if (null === $tableZero) {
                $tableZero = (require __DIR__ . '/Resources/data/wcswidth_table_zero.php');
            }
            if ($codePoint >= $tableZero[0][0] && $codePoint <= $tableZero[$ubound = \count($tableZero) - 1][1]) {
                $lbound = 0;
                while ($ubound >= $lbound) {
                    $mid = \floor(($lbound + $ubound) / 2);
                    if ($codePoint > $tableZero[$mid][1]) {
                        $lbound = $mid + 1;
                    } elseif ($codePoint < $tableZero[$mid][0]) {
                        $ubound = $mid - 1;
                    } else {
                        continue 2;
                    }
                }
            }
            static $tableWide;
            if (null === $tableWide) {
                $tableWide = (require __DIR__ . '/Resources/data/wcswidth_table_wide.php');
            }
            if ($codePoint >= $tableWide[0][0] && $codePoint <= $tableWide[$ubound = \count($tableWide) - 1][1]) {
                $lbound = 0;
                while ($ubound >= $lbound) {
                    $mid = \floor(($lbound + $ubound) / 2);
                    if ($codePoint > $tableWide[$mid][1]) {
                        $lbound = $mid + 1;
                    } elseif ($codePoint < $tableWide[$mid][0]) {
                        $ubound = $mid - 1;
                    } else {
                        $width += 2;
                        continue 2;
                    }
                }
            }
            ++$width;
        }
        $phabelReturn = $width;
        if (!\is_int($phabelReturn)) {
            if (!(\is_bool($phabelReturn) || \is_numeric($phabelReturn))) {
                throw new \TypeError(__METHOD__ . '(): Return value must be of type int, ' . \Phabel\Plugin\TypeHintReplacer::getDebugType($phabelReturn) . ' returned in ' . \Phabel\Plugin\TypeHintReplacer::trace());
            } else {
                $phabelReturn = (int) $phabelReturn;
            }
        }
        return $phabelReturn;
    }
}
