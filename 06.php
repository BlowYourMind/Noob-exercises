<?php

class Robbery
{
    private array $robbedItems;

    public function __construct(array $robbedItems)
    {
        $this->robbedItems = $robbedItems;
    }

    public function checkRobbedItems(): string
    {
        if (empty($this->robbedItems)) {
            return "Lucky you!";
        }
        return count($this->robbedItems) . " Was robbed from your mansion :(" . PHP_EOL;
    }
}

$new = new Robbery(["Phone","Car","Holder"]);
echo $new->checkRobbedItems();