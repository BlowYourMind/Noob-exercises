<?php

class ArrayConvert
{
    public static function convertArray(array $input): array
    {
        $newArr = [];
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if (($j !== 0 && $j !== 3) && ($i !== 0 && $i !== 3)) {
                    $newArr[$i][$j] = $input[$i][$j];
                }
            }
        }
        return $newArr;
    }
}


var_dump(ArrayConvert::convertArray([
    ["a", "b", "c", "d"],// 0
    ["e", "f", "g", "h"],// 1
    ["i", "j", "k", "l"],// 2
    ["m", "n", "o", "p"]// 3
]));