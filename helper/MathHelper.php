<?php

namespace Helper;

class MathHelper
{
    static string $name = "MathHelper";

    static public function sum(int... $numbers)
    {
        $total = 0;
            foreach($numbers as $number)
            {
                $total += $number;
            }
        return $total; 
    }
}

