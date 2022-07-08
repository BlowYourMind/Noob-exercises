<?php

class Discount
{
    public static function makeDiscount(int $price, int $discount): float
    {
         return  $price - ($price * ($discount / 100));
    }
}

echo Discount::makeDiscount(33333, 2);