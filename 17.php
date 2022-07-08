<?php

class Game1
{
    private array $conditions = [
        'rock' => ['scissors'],
        'paper' => ['rock'],
        'scissors' => ['paper'],
    ];

    public function start(array $players ):string
    {

            if ($players[0] === $players[1]) {
                return "Tie!";
            } elseif (in_array($players[0], $this->conditions[$players[1]])) {
                return "Benson win!!";
            } else {
                return "Abigail win!!";
            }
        }

    }

    $new = new Game1();
   echo $new->start(["paper","paper"],);