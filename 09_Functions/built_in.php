<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builtin Functions</title>
</head>

<body>

    <?php

    /**
     * PHP Built-in Functions: A Detailed Guide
     * 
     * PHP comes with a rich set of built-in functions that can be used for various operations. 
     * These functions are categorized into different types based on their functionality, 
     * such as string manipulation, array handling, mathematical operations, and more.
     *
     * Below is a detailed explanation of some common built-in functions.
     */

    /**
     * 1. String Functions
     */

    // strlen(): Returns the length of a string.
    $string = "Hello, World!";
    echo "The length of the string is: " . strlen($string) . "\n";
    // Output: The length of the string is: 13

    // str_replace(): Replaces all occurrences of a substring with another substring in a string.
    $originalString = "Hello, PHP!";
    $newString = str_replace("PHP", "World", $originalString);
    echo "Replaced string: " . $newString . "\n";
    // Output: Replaced string: Hello, World!

    // strtolower() and strtoupper(): Convert strings to lower or upper case.
    echo strtolower("PHP IS GREAT") . "\n"; // Output: php is great
    echo strtoupper("php is great") . "\n"; // Output: PHP IS GREAT

    /**
     * 2. Array Functions
     */

    // count(): Returns the number of elements in an array.
    $array = ["Apple", "Banana", "Cherry"];
    echo "The array has " . count($array) . " elements.\n";
    // Output: The array has 3 elements.

    // array_merge(): Merges one or more arrays.
    $array1 = ["a" => "Apple", "b" => "Banana"];
    $array2 = ["c" => "Cherry", "d" => "Date"];
    $mergedArray = array_merge($array1, $array2);
    print_r($mergedArray);
    // Output: Array ( [a] => Apple [b] => Banana [c] => Cherry [d] => Date )

    // in_array(): Checks if a value exists in an array.
    $fruits = ["Apple", "Banana", "Cherry"];
    echo in_array("Banana", $fruits) ? "Banana is in the array.\n" : "Banana is not in the array.\n";
    // Output: Banana is in the array.

    /**
     * 3. Mathematical Functions
     */

    // abs(): Returns the absolute value of a number.
    $number = -10;
    echo "The absolute value of $number is: " . abs($number) . "\n";
    // Output: The absolute value of -10 is: 10

    // round(): Rounds a floating-point number to the nearest integer.
    $float = 4.7;
    echo "4.7 rounded is: " . round($float) . "\n";
    // Output: 4.7 rounded is: 5

    // rand(): Generates a random integer.
    echo "Random number: " . rand(1, 100) . "\n";
    // Output: Random number: (varies)

    /**
     * 4. Date and Time Functions
     */

    // date(): Formats a local date and time.
    echo "Current date: " . date("Y-m-d") . "\n";
    // Output: Current date: (e.g., 2024-12-22)

    // time(): Returns the current timestamp.
    echo "Current timestamp: " . time() . "\n";
    // Output: Current timestamp: (e.g., 1735241245)

    // strtotime(): Converts a string to a timestamp.
    $dateString = "next Monday";
    echo "Timestamp for next Monday: " . strtotime($dateString) . "\n";
    // Output: Timestamp for next Monday: (varies)

    /**
     * 5. File Handling Functions
     */

    // file_get_contents(): Reads the content of a file into a string.
    $file = "example.txt";
    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        echo "File does not exist.\n";
    }
    // Output: (Content of example.txt or "File does not exist.")

    // file_put_contents(): Writes data to a file.
    file_put_contents("example.txt", "Hello, PHP File Handling!");
    // Creates example.txt with the content "Hello, PHP File Handling!"

    /**
     * 6. Miscellaneous Functions
     */

    // isset(): Checks if a variable is set and is not null.
    $var = "Hello";
    echo isset($var) ? "Variable is set.\n" : "Variable is not set.\n";
    // Output: Variable is set.

    // empty(): Checks if a variable is empty.
    $var = "";
    echo empty($var) ? "Variable is empty.\n" : "Variable is not empty.\n";
    // Output: Variable is empty.

    // var_dump(): Dumps information about a variable.
    $var = [1, 2, 3];
    var_dump($var);
    // Output: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }

    ?>


</body>

</html>