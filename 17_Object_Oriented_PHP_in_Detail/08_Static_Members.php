<?php 

class Calculator {
    public static $count = 0;

    public static function add($a, $b) {
        self::$count++;
        return $a + $b;
    }

    public static function getCount() {
        return self::$count;
    }
}

echo Calculator::add(10, 20) . "\n"; // Output: 30
echo Calculator::getCount() . "\n";  // Output: 1



?>