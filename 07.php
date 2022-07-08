<?php

class Move
{
    public static function volume(array $sizes): int
    {
        $total = 0;
        foreach ($sizes as $size) {
            $total += array_product($size);

        }
        return $total;
    }
}

echo Move::volume([[2, 3, 2], [6, 6, 7], [1, 2, 1]]);