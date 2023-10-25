<?php

namespace App\Enum;

enum Gender : string
{
    case MAN = 'man';
    case WOMAN = 'woman';
    case OTHER = 'other';


    public static function values() : array
    {
        return array_column(self::cases(), 'value');
    }
}
