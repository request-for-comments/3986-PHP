<?php


namespace Rule;


use RFC5234\Core\Rule\AbstractRule;

class SubDelims extends AbstractRule
{
    public static function getPattern(): string
    {
        return '(?:!|\$|&|\'|\(|\)|\*|\+|,|;|=)';
    }
}
