<?php

class Event
{
    public static function checkDoubleNames(array $names): array
    {
        return array_unique($names);
    }
}

$names = ["Max","Rick","Maxis","Max","Max"];

echo implode(',', Event::checkDoubleNames($names));