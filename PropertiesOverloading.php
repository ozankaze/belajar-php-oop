<?php

// 185

class Zero
{
    private array $properties = [];

    // untuk mengambil data berdasarkan property namenya
    public function __get($name)
    {
        return $this->properties[$name];
    }

    // mengubah data berdasarkan property namenya
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    // untuk mengecek apakah sudah di set berdasarkan property namenya
    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

     // untuk meng unset berdasarkan dari property namenya
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }

}

$zero = new Zero();
$zero->firstName = "Euha";
$zero->midleName = "Swee";
$zero->lastName = "Eva";

echo "Firts Name: $zero->firstName" . PHP_EOL;
echo "Midle Name: $zero->midleName" . PHP_EOL;
echo "Last Name: $zero->lastName" . PHP_EOL;

$zero->sayHello("Eva", "Momona");
Zero::sayHai("Eunha", "Jia");