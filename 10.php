<?php

class GreatWar
{
    public static function winner(array $numbers): string
    {
        $oddNum = 0;
        $evenNum=0;
        foreach ($numbers as $number){
            if($number%2 ==0){
                $evenNum+=$number;
            }
            else{
                $oddNum+=$number;
            }
        }
        if($oddNum > $evenNum){
           return "Odd numbers win by $oddNum";
        }
        elseif($evenNum>$oddNum){
            return  "Even numbers win by $evenNum";
        }
        else{
            return "There are no winners";
        }
    }
}
echo GreatWar::winner([1,2,3,4,5,6,7,8,123,2321,2321,32,232,32415,6126,6,21,]);