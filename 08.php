<?php


class Person{
    private string $name;
    private int $age;
    protected  int $number;

    public function __construct(string $name, int $age, int $number)
    {
        $this->name = $name;
        $this->age = $age;
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}

class Budget {

    public static function calculate (array $people):int{
        $budget = 0;
    foreach ($people as $person){
        $budget+=$person->getNumber();
    }
    return  $budget;
    }
}

$people = [
    new Person("Maxis",20,2000),
    new Person("Sanja",33,11),
    new Person("Rick",15,300),
];
echo "Total budget is: ".Budget::calculate($people);