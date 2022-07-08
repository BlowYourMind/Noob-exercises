<?php

class Professional {
private array $keys = [];
private array $values = [];

    public function makeAllGood(array $array) : string{
        for($i=0;$i<count($array);$i++){
            $this->keys[$i] = $i;
            $this->values[$i] = $array[$i];
        }
        return "keys = " .implode(',',$this->keys).". values = " . implode(',',$this->values);
    }
}
$new = new Professional();
echo $new->makeAllGood(["Yes","no",23]);