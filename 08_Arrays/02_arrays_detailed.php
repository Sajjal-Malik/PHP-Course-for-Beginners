<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in Detail</title>
</head>

<body>

    <?php
    // DETAILED ARRAYS IN PHP

    /* 
 * What Are Arrays in PHP?
 * ------------------------
 * An array in PHP is a collection of values, where each value is associated with a key.
 * Keys can be integers or strings.
 * Arrays allow you to store multiple related or unrelated values under a single variable.
 */

    // Array Structure
    // -------------------
    // Syntax for creating arrays:
    // 1. Using the array() function:
    $exampleArray1 = array("value1", "value2", "value3");

    // 2. Using short syntax (introduced in PHP 5.4):
    $exampleArray2 = ["value1", "value2", "value3"];

    // TYPES OF ARRAYS IN DETAIL
    // --------------------------

    // 1. Indexed Arrays
    // -------------------
    // Indexed arrays use numeric indexes starting from 0.
    $colors = ["Red", "Green", "Blue", "Yellow"];

    // Access elements in indexed arrays:
    echo $colors[2]; // Output: Blue

    // Add a new element:
    $colors[] = "Purple"; // Adds "Purple" at the end

    // Modify an element:
    $colors[1] = "Light Green"; // Changes "Green" to "Light Green"

    // Loop through indexed arrays:
    for ($i = 0; $i < count($colors); $i++) {
        echo $colors[$i] . "\n";
    }

    // 2. Associative Arrays
    // -----------------------
    // Associative arrays use named keys instead of numeric indexes.
    $student = [
        "name" => "Alice",
        "age" => 22,
        "course" => "Computer Science"
    ];

    // Access elements:
    echo $student["name"]; // Output: Alice

    // Add a new key-value pair:
    $student["grade"] = "A";

    // Modify a value:
    $student["age"] = 23;

    // Loop through associative arrays:
    foreach ($student as $key => $value) {
        echo "$key: $value\n";
    }

    // 3. Multidimensional Arrays
    // ----------------------------
    // Multidimensional arrays are arrays containing other arrays.
    $employees = [
        ["id" => 101, "name" => "John", "department" => "HR"],
        ["id" => 102, "name" => "Jane", "department" => "Finance"],
        ["id" => 103, "name" => "Sam", "department" => "IT"]
    ];

    // Access elements:
    echo $employees[1]["name"]; // Output: Jane

    // Loop through multidimensional arrays:
    foreach ($employees as $employee) {
        foreach ($employee as $key => $value) {
            echo "$key: $value\n";
        }
        echo "\n";
    }

    // WORKING WITH ARRAYS IN DEPTH
    // ----------------------------

    // 1. Merging Arrays
    // -------------------
    $team1 = ["Alice", "Bob"];
    $team2 = ["Charlie", "Diana"];
    $mergedTeam = array_merge($team1, $team2);
    print_r($mergedTeam); // Output: ["Alice", "Bob", "Charlie", "Diana"]

    // 2. Filtering Arrays
    // --------------------
    $numbers = [1, 2, 3, 4, 5, 6];
    $evenNumbers = array_filter($numbers, function ($num) {
        return $num % 2 === 0;
    });
    print_r($evenNumbers); // Output: [2, 4, 6]

    // 3. Sorting Arrays
    // ------------------
    $unsorted = [4, 2, 8, 5];
    sort($unsorted); // Sorts in ascending order
    print_r($unsorted); // Output: [2, 4, 5, 8]

    // Sorting Associative Arrays by Value:
    $prices = ["Apple" => 3, "Banana" => 1, "Cherry" => 2];
    asort($prices); // Sorts by value in ascending order
    print_r($prices); // Output: ["Banana" => 1, "Cherry" => 2, "Apple" => 3]

    // 4. Combining Arrays
    // --------------------
    $keys = ["id", "name", "department"];
    $values = [101, "John", "HR"];
    $combined = array_combine($keys, $values);
    print_r($combined); // Output: ["id" => 101, "name" => "John", "department" => "HR"]

    // 5. Chunking Arrays
    // --------------------
    $largeArray = range(1, 10);
    $chunks = array_chunk($largeArray, 3);
    print_r($chunks); // Output: [[1, 2, 3], [4, 5, 6], [7, 8, 9], [10]]

    // Summary
    // --------
    /*
 * Arrays are powerful and versatile structures in PHP.
 * They can be used to handle large and complex datasets efficiently.
 * Mastering arrays involves understanding their types and utilizing built-in functions.
 */
    ?>


</body>

</html>