<?php

class Data implements IteratorAggregate
{
    var string $first = "Fitst";
    public string $secoud = "Secoud";
    private string $third = "Third";
    protected string $forth = "Forth";

    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "secoud" => $this->secoud,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        $iterator = new ArrayIterator($array);
        return $iterator;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}