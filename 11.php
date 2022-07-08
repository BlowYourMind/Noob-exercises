<?php

class Kindergarten{
    public static function reverseWord(string $sentence, string $letter):string{
        $split = explode(' ',$sentence);
        $newSentence = [];
        foreach ($split as $word){
            if($word[0] == $letter){
                var_dump($word[0]);
                array_push($newSentence, strrev($word));
            }
            else {
                array_push($newSentence,$word);
            }
        }
        return  implode(' ',$newSentence);
    }
}

echo Kindergarten::reverseWord("Hello, My name is Max", "M");