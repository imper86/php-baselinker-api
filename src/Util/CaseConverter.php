<?php

namespace Imper86\PhpBaselinkerApi\Util;

use Jawira\CaseConverter\CaseConverter as JawiraCaseConverter;
use Jawira\CaseConverter\CaseConverterInterface;

class CaseConverter
{
    private static ?CaseConverterInterface $caseConverter = null;

    public static function toSnake(string $str): string
    {
        return self::getConverter()
            ->convert($str)
            ->toSnake();
    }

    public static function toCamel(string $str): string
    {
        return self::getConverter()
            ->convert($str)
            ->toCamel();
    }

    private static function getConverter(): CaseConverterInterface
    {
        return self::$caseConverter ??= new JawiraCaseConverter();
    }
}
