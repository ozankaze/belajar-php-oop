<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $example;

    public function setExample(string $example):void
    {
        $this->example = $example;
    }

    public function __clone()
    {
        unset($this->id);
        unset($this->example);
    }

    // 176
    public function __toString(): string
    {
        return "Student id: $this->id name: $this->name value: $this->value" . PHP_EOL;
    }

    public function __invoke(... $argument): void
    {
        $join = join(":", $argument);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->example,
            "version" => "5.0.2"
        ];
    }
    // End 176
}