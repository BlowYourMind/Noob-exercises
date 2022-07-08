<?php

class DateService
{
    public function makePairs(array $women, array $men): void
    {
        for ($i = 0; $i < count($men) && $i < count($women); $i++) {
            $pairCount = $i + 1;
            echo " Pair number $pairCount - {$women[$i]} and {$men[$i]} |";
        }
        if (count($men) > count($women) ||count($men) < count($women) ) {
            echo " Cupid is on vacation";
        }
    }
}

$new = new DateService();
$new->makePairs(["Women1", "Women2", "Women3", "Women4", "Women5",], ["Men1", "Men2", "Men3", "Men4", "Men5", "Men6", "Men7", "Men8", "Men9",]);