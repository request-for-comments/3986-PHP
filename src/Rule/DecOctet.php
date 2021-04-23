<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;
use RFC5234\Core\Rule\Digit;

class DecOctet extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:' . Digit::getPattern() . '|[\x31-\x39]' . Digit::getPattern() . '|1' . Digit::getPattern()
            . '{2}|2[\x30-\x34]' . Digit::getPattern() . '|25[\x30-\x35])'
        ;
    }
}
