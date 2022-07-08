<?php

class Exo
{
    public static function repeatExo(string $word, int $times): void
    {
        for ($i = 0; $i < $times; $i++) {
            echo "(". $i+1 .") - $word ". PHP_EOL;
        }
    }
}

Exo::repeatExo("Hello", 10);