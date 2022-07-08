<?php

class Words
{
    public static function finder(string $word): ?string
    {
        $word1 = str_split($word);
        foreach ($word1 as $letter) {
            if (!ctype_upper($letter)) {
                echo  $letter;
            }
        }
        return null;
    }
}


$word = 'MAXmaxisMAXMAX';
echo  Words::finder($word);