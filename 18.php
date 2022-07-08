<?php

class Cashier {
    private string $product;
    private int $quantity;
    private int $price;
    private int $totalPrice = 0;
    public function __construct(string $product, int $quantity, int $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    public function countTotalPrice(Cashier $product):int{
        $this->totalPrice += $product->price * $product->quantity;
        return  $this->totalPrice;
    }
}
$products  =[
    $egg = new Cashier("Egg",5,1),
    $bread = new Cashier("Bread", 2,4),
];
$total = 0;
foreach ($products as $product){
    $total+= $product->countTotalPrice($product);
}
echo "Total price is $total";