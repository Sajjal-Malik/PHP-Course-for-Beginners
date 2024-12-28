<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>

<body>

    <?php

    /**
     * Loops in PHP
     * PHP provides several types of loops to handle repetitive tasks. 
     * These include `for`, `while`, `do-while`, and `foreach`. Each loop is suited for specific use cases.
     */

    // 1. For Loop
    // Use when you know in advance how many times the loop should run.

    echo "\nFor Loop Example:\n";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration: $i\n";
    }

    // 2. While Loop
    // Use when the number of iterations depends on a condition.

    echo "\nWhile Loop Example:\n";
    $counter = 1;
    while ($counter <= 5) {
        echo "Counter: $counter\n";
        $counter++;
    }

    // 3. Do-While Loop
    // Similar to while but guarantees the loop runs at least once.

    echo "\nDo-While Loop Example:\n";
    do {
        echo "Counter: $counter\n";
        $counter++;
    } while ($counter <= 5);

    // 4. Foreach Loop
    // Specifically used to iterate over arrays.

    echo "\nForeach Loop Example:\n";
    $fruits = ["Apple", "Banana", "Cherry"];
    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit\n";
    }

    // Key-Value Pairs in Foreach
    echo "\nForeach with Key-Value Pairs:\n";
    $prices = ["Apple" => 1.2, "Banana" => 0.5, "Cherry" => 2.0];
    foreach ($prices as $item => $price) {
        echo "$item costs $$price\n";
    }

    /**
     * Additional Notes:
     * - You can use `break` to exit a loop prematurely.
     * - Use `continue` to skip to the next iteration.
     * - Nested loops are possible, but use them carefully to avoid performance issues.
     */

    // Example of Break and Continue
    echo "\nBreak and Continue Example:\n";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            echo "Skipping 5\n";
            continue;
        }
        if ($i == 8) {
            echo "Breaking at 8\n";
            break;
        }
        echo "Number: $i\n";
    }

    ?>


</body>

</html>