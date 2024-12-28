<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators with Loops</title>
</head>

<body>

    <?php
    // Arithmetic Operators with Loops
    echo "1. Arithmetic Operators with Loops:\n";
    $sum = 0;
    for ($i = 1; $i <= 5; $i++) {
        $sum += $i; // Adding numbers to the sum
    }
    echo "Sum of numbers from 1 to 5 is: $sum\n\n";

    // Increment/Decrement Operators in Loops
    echo "2. Increment/Decrement Operators in Loops:\n";
    $count = 5;
    while ($count > 0) {
        echo "Count: $count\n";
        $count--; // Decrease the count by 1
    }
    echo "\n";

    // Array Operators in Loops
    echo "3. Array Operators with Loops:\n";
    $classA = ["Alice", "Bob"];
    $classB = ["Charlie", "Diana"];
    $allStudents = $classA + $classB; // Combine arrays
    foreach ($allStudents as $student) {
        echo "Student: $student\n";
    }
    echo "\n";

    // Execution Operators in Loops
    echo "4. Execution Operators in Loops:\n";
    for ($i = 1; $i <= 3; $i++) {
        $output = `echo "Loop iteration $i"`;
        echo $output;
    }
    ?>



</body>

</html>