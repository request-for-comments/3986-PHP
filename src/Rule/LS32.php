<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;

class LS32 extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:(?:' . H16::getPattern() . ':' . H16::getPattern() . ')|' . IPv4Address::getPattern() . ')';
    }
}
