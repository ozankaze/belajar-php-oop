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
}