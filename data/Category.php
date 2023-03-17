<?php

class Category
{
    private string $name;
    private bool $expensive;
    
    public function getName(): string //Getter
    {
        return $this->name;
    }

    public function setName(string $name): void //Setter
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}