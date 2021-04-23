<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;

class IPv6Address extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:'
            .                                                                         '(?:' . H16::getPattern() . ':){6}' . LS32::getPattern() . '|'
            .                                                                       '::(?:' . H16::getPattern() . ':){5}' . LS32::getPattern() . '|'
            .                                         '(?:' . H16::getPattern() . ')?::(?:' . H16::getPattern() . ':){4}' . LS32::getPattern() . '|'
            . '(?:' . '(?:' . H16::getPattern() . ':){0,1}' . H16::getPattern() . ')?::(?:' . H16::getPattern() . ':){3}' . LS32::getPattern() . '|'
            . '(?:' . '(?:' . H16::getPattern() . ':){0,2}' . H16::getPattern() . ')?::(?:' . H16::getPattern() . ':){2}' . LS32::getPattern() . '|'
            . '(?:' . '(?:' . H16::getPattern() . ':){0,3}' . H16::getPattern() . ')?::(?:' . H16::getPattern() . ':){1}' . LS32::getPattern() . '|'
            . '(?:' . '(?:' . H16::getPattern() . ':){0,4}' . H16::getPattern() . ')?::'                                  . LS32::getPattern() . '|'
            . '(?:' . '(?:' . H16::getPattern() . ':){0,5}' . H16::getPattern() . ')?::'                                  . H16::getPattern()  . '|'
            . '(?:' . '(?:' . H16::getPattern() . ':){0,6}' . H16::getPattern() . ')?::'
            . ')'
        ;
    }
}
