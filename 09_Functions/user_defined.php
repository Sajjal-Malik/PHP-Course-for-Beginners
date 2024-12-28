<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>

<body>

    <?php

    // Example 1: Basic Function
    function sayHello()
    {
        echo "Hello, World!";
    }

    // Calling the function
    sayHello(); // Output: Hello, World!

    // Example 2: Function with Parameters
    function greet($name)
    {
        echo "Hello, $name!";
    }

    // Calling the function
    greet("Alice"); // Output: Hello, Alice!

    // Example 3: Function with Return Value
    function add($a, $b)
    {
        return $a + $b;
    }

    // Calling the function
    $sum = add(5, 3);
    echo $sum; // Output: 8

    // Example 4: Function with Default Parameter Values
    function greetDefault($name = "Guest")
    {
        echo "Hello, $name!";
    }

    // Calling the function
    greetDefault(); // Output: Hello, Guest!
    greetDefault("Alice"); // Output: Hello, Alice!

    // Example 5: Variable Scope
    function showNumber()
    {
        $number = 10; // Local variable
        echo $number;
    }

    showNumber(); // Output: 10
    // echo $number; // Error: Undefined variable

    // Example 6: Global Variables
    $count = 0;

    function incrementCount()
    {
        global $count;
        $count++;
    }

    incrementCount();
    echo $count; // Output: 1

    // Example 7: Static Variables
    function counter()
    {
        static $count = 0;
        $count++;
        echo $count . "\n";
    }

    counter(); // Output: 1
    counter(); // Output: 2

    // Example 8: Functions with Variable Number of Arguments
    function sum(...$numbers)
    {
        return array_sum($numbers);
    }

    echo sum(1, 2, 3, 4); // Output: 10

    ?>



</body>

</html>