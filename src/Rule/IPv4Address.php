<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;

class IPv4Address extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:(?:' . DecOctet::getPattern() . '\.){3}' . DecOctet::getPattern() . ')';
    }
}
