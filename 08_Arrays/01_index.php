<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body>

    <?php
    // PHP ARRAYS TUTORIAL

    /* 
 * Arrays in PHP
 * ----------------------------
 * An array is a data structure that allows you to store multiple values in a single variable.
 * In PHP, arrays can hold values of any type, including numbers, strings, or even other arrays.
 */

    // Types of Arrays in PHP
    // 1. Indexed Arrays
    // 2. Associative Arrays
    // 3. Multidimensional Arrays

    // 1. Indexed Arrays
    // ----------------------------
    // An indexed array uses numeric indexes to store and access elements.

    // Example:
    $fruits = array("Apple", "Banana", "Cherry"); // Creating an array using array() function

    // Accessing elements in an indexed array:
    echo $fruits[0]; // Output: Apple

    // Adding elements to the array:
    $fruits[] = "Date"; // Adds "Date" to the end of the array

    // Looping through an indexed array:
    foreach ($fruits as $fruit) {
        echo $fruit . "\n"; // Prints all fruits
    }

    // 2. Associative Arrays
    // ----------------------------
    // An associative array uses named keys instead of numeric indexes.

    // Example:
    $person = array("name" => "John", "age" => 25, "city" => "New York");

    // Accessing elements in an associative array:
    echo $person["name"]; // Output: John

    // Adding new key-value pairs:
    $person["country"] = "USA";

    // Looping through an associative array:
    foreach ($person as $key => $value) {
        echo "$key: $value\n"; // Prints each key-value pair
    }

    // 3. Multidimensional Arrays
    // ----------------------------
    // A multidimensional array is an array containing one or more arrays.

    // Example:
    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    // Accessing elements in a multidimensional array:
    echo $matrix[0][1]; // Output: 2 (first row, second column)

    // Looping through a multidimensional array:
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            echo $element . " "; // Prints each element
        }
        echo "\n";
    }

    // Common Array Functions
    // ----------------------------
    // PHP provides many built-in functions to work with arrays:

    // 1. count(): Counts the number of elements in an array
    $numbers = array(10, 20, 30);
    echo count($numbers); // Output: 3

    // 2. array_push(): Adds elements to the end of an array
    array_push($numbers, 40, 50);
    print_r($numbers); // Output: Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 [4] => 50 )

    // 3. array_pop(): Removes the last element of an array
    array_pop($numbers);
    print_r($numbers); // Output: Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 )

    // 4. array_keys(): Returns all the keys of an array
    print_r(array_keys($person)); // Output: Array ( [0] => name [1] => age [2] => city [3] => country )

    // 5. array_values(): Returns all the values of an array
    print_r(array_values($person)); // Output: Array ( [0] => John [1] => 25 [2] => New York [3] => USA )

    // 6. sort(): Sorts an indexed array in ascending order
    sort($fruits);
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Date )

    // 7. asort(): Sorts an associative array by values in ascending order
    asort($person);
    print_r($person); // Output: Sorted by values

    // 8. ksort(): Sorts an associative array by keys in ascending order
    ksort($person);
    print_r($person); // Output: Sorted by keys

    /*
 * Tips for Working with Arrays in PHP:
 * - Always initialize arrays before using them to avoid warnings.
 * - Use appropriate array functions for better performance.
 * - For large datasets, consider using multidimensional arrays to organize data efficiently.
 */
    ?>



</body>

</html>