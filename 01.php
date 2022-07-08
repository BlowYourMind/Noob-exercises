<?php
class DogAge{
    public static function convert(int $ageInHumanYears):int{
        (int)$result =$ageInHumanYears/7;
        return $result;
    }
}
echo "Your doggie is ". DogAge::convert(58). " years old in dog years!" . PHP_EOL;