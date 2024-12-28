<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Programs</title>
</head>

<body>

    <?php

    // PHP Loops Explained

    /*
 * Loops are used to execute a block of code repeatedly, as long as a certain condition is true.
 * PHP supports the following types of loops:
 * 1. for
 * 2. while
 * 3. do-while
 * 4. foreach (used specifically for arrays)
 */

    // 1. For Loop
    /*
 * Syntax:
 * for (initialization; condition; increment/decrement) {
 *     // Code to execute
 * }
 */

    echo "\n--- For Loop Example ---\n";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration: $i\n";
    }

    // 2. While Loop
    /*
 * Syntax:
 * while (condition) {
 *     // Code to execute
 * }
 */

    echo "\n--- While Loop Example ---\n";
    $count = 1;
    while ($count <= 5) {
        echo "Count: $count\n";
        $count++;
    }

    // 3. Do-While Loop
    /*
 * Syntax:
 * do {
 *     // Code to execute
 * } while (condition);
 */

    echo "\n--- Do-While Loop Example ---\n";
    $count = 1;
    do {
        echo "Count: $count\n";
        $count++;
    } while ($count <= 5);

    // 4. Foreach Loop (specific to arrays)
    /*
 * Syntax:
 * foreach ($array as $value) {
 *     // Code to execute
 * }
 * OR
 * foreach ($array as $key => $value) {
 *     // Code to execute
 * }
 */

    echo "\n--- Foreach Loop Example ---\n";
    $array = ["apple", "banana", "cherry"];
    foreach ($array as $item) {
        echo "Item: $item\n";
    }

    // Logical Programs Using Loops

    // Program 1: Calculate the sum of numbers from 1 to 10
    echo "\n--- Sum of Numbers from 1 to 10 ---\n";
    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        $sum += $i;
    }
    echo "Sum: $sum\n";

    // Program 2: Print the multiplication table of 5
    echo "\n--- Multiplication Table of 5 ---\n";
    $number = 5;
    for ($i = 1; $i <= 10; $i++) {
        echo "$number x $i = " . ($number * $i) . "\n";
    }

    // Program 3: Check if a number is prime
    echo "\n--- Check if a Number is Prime ---\n";
    $number = 7;
    $isPrime = true;
    if ($number < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }
    echo $number . ($isPrime ? " is a Prime Number\n" : " is not a Prime Number\n");

    // Program 4: Generate Fibonacci series up to 10 terms
    echo "\n--- Fibonacci Series up to 10 Terms ---\n";
    $n1 = 0;
    $n2 = 1;
    $terms = 10;
    echo "$n1, $n2";
    for ($i = 3; $i <= $terms; $i++) {
        $nextTerm = $n1 + $n2;
        echo ", $nextTerm";
        $n1 = $n2;
        $n2 = $nextTerm;
    }
    echo "\n";

    ?>


</body>

</html>