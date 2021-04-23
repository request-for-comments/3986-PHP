<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;
use RFC5234\Core\Rule\Alpha;
use RFC5234\Core\Rule\Digit;

class Unreserved extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:' . Alpha::getPattern() . '|' . Digit::getPattern() . '|-|\.|_|~' . ')';
    }
}
