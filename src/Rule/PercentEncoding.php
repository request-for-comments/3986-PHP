<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;
use RFC5234\Core\Rule\HexDig;

class PercentEncoding extends AbstractRule
{
    public static function getPattern(): string
    {;
        return '(?:%' . HexDig::getPattern() . HexDig::getPattern() . ')';
    }
}
