<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;

class UserInfo extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:(?:' . Unreserved::getPattern() . '|' . PercentEncoding::getPattern() . '|' . SubDelims::getPattern() . '|:)*)';
    }
}
