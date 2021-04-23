<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;
use RFC5234\Core\Rule\HexDig;

class H16 extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:' . HexDig::getPattern() . '{1,4})';
    }
}
