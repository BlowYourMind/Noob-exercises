<?php

class DigitNumber
{
    public static function digitSwap(int $number): string
    {
        $firstNum = null;
        if (strlen($number) == 2) {
            $firstNum = strrev($number);
        }
        if ($firstNum > $number) return "Swapped number is bigger $firstNum > $number";
        if ($firstNum == $number) {
            return "The numbers are similar $firstNum = $number";
        }
        return "Given number is bigger $number>$firstNum";
    }
}


echo DigitNumber::digitSwap(19);