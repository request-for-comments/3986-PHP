<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;
use RFC5234\Core\Rule\Alpha;
use RFC5234\Core\Rule\Digit;

class Scheme extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:' . Alpha::getPattern() . '(?:' . Alpha::getPattern() . '|' . Digit::getPattern() . '|\+|-|\.)*)';
    }
}
