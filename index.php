<?php

class NumberToWordFormatter
{

    const MALE   = 0;
    const FEMALE = 1;
    const NEUTER = 2;

    protected static $zero = "ноль";

    protected static $ten = [
        ['', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'],
        ['', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'],
    ];


    protected static $teens = [
        'десять',
        'одиннадцать',
        'двенадцать',
        'тринадцать',
        'четырнадцать',
        'пятнадцать',
        'шестнадцать',
        'семнадцать',
        'восемнадцать',
        'девятнадцать',
    ];

    protected static $tens = [
        '',
        'двадцать',
        'тридцать',
        'сорок',
        'пятьдесят',
        'шестьдесят',
        'семьдесят',
        'восемьдесят',
        'девяносто',
    ];

    protected static $hundred = [
        '',
        'сто',
        'двести',
        'триста',
        'четыреста',
        'пятьсот',
        'шестьсот',
        'семьсот',
        'восемьсот',
        'девятьсот',
    ];

    public static function convert($number): string
    {
        switch (true) {
            case $number === 0:
                return static::$zero;
            case $number > 0 && $number < 10:
                return self::$ten[0][$number];
            case $number > 10 && $number < 20:
                $index = str_split($number);
                return self::$teens[$index[1]];
        }
    }

}


echo NumberToWordFormatter::convert(19);

