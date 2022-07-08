<?php

class MaxMin
{
    public static function checkMaxMin(array $numbers): array
    {
        $resultArray = [];
        $numberMax = 0;
        $numberMin = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] < $numberMin) {
                $numberMin = $numbers[$i];
            }
            if ($numbers[$i] > $numberMax) {
                $numberMax = $numbers[$i];
            }
        }
         array_push($resultArray, $numberMin, $numberMax);
        return $resultArray;
    }
}

echo implode(',',MaxMin::checkMaxMin([1, 23, 3, -1232131, 523, 12, -123, 23125, 6, 123,]));