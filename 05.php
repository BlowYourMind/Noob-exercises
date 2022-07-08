<?php


class FindNemo {
    public static function findTheFish(string $sentence):string{
        $split = explode(' ',$sentence);
        foreach ($split as $key =>$item){
            if($item === "Nemo"){
                $key+=1;
                 return "I found Nemo at $key!";
            }
        }
        return  "I can't find Nemo :(";
    }
}
echo FindNemo::findTheFish("Hello, my name is Max. I got fish called Nemo");