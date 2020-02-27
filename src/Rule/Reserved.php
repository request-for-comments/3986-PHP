<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;

class Reserved extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:' . GenDelims::getPattern() . '|' . SubDelims::getPattern() . ')';
    }
}
