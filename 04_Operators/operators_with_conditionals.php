<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators with Conditionals</title>
</head>

<body>


    <?php
    // Comparison Operators with if-else
    echo "1. Comparison Operators with if-else:\n";
    $age = 17;
    if ($age >= 18) {
        echo "You are eligible to vote.\n";
    } else {
        echo "You are not eligible to vote.\n";
    }
    echo "\n";

    // Logical Operators with if-else
    echo "2. Logical Operators with if-else:\n";
    $age = 25;
    $isMember = true;
    if ($age < 18 || $isMember) {
        echo "You are eligible for a discount.\n";
    } else {
        echo "You are not eligible for a discount.\n";
    }
    echo "\n";

    // Assignment Operators in Logical Flow
    echo "3. Assignment Operators in if-else:\n";
    $score = 85;
    if ($score > 80) {
        $score += 10; // Add 10 bonus points
    } else {
        $score -= 5; // Deduct 5 points for average performance
    }
    echo "Final score: $score\n\n";

    // Bitwise Operators in Logical Tasks
    echo "4. Bitwise Operators in if-else:\n";
    $number = 7;
    if ($number & 1) {
        echo "$number is odd.\n";
    } else {
        echo "$number is even.\n";
    }
    echo "\n";

    // Error Control Operator with if-else
    echo "5. Error Control Operator:\n";
    $fileContent = @file_get_contents("non_existing_file.txt");
    if ($fileContent === false) {
        echo "Error: File not found.\n";
    } else {
        echo $fileContent;
    }
    echo "\n";

    // Type Operator with if-else
    echo "6. Type Operator:\n";
    class Vehicle {}
    class Car extends Vehicle {}
    $myCar = new Car();
    if ($myCar instanceof Vehicle) {
        echo "myCar is a type of Vehicle.\n";
    }
    ?>

</body>

</html>