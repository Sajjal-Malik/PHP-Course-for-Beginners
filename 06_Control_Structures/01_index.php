<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>

<body>

    <?php
    // PHP Control Structures Examples

    // If-Else Statement
    $age = 20;
    echo "If-Else Example:\n";
    if ($age >= 18) {
        echo "You are an adult.\n";
    } else {
        echo "You are a minor.\n";
    }

    // Switch Statement
    $day = 3;
    echo "\nSwitch Example:\n";
    switch ($day) {
        case 1:
            echo "Today is Monday.\n";
            break;
        case 2:
            echo "Today is Tuesday.\n";
            break;
        case 3:
            echo "Today is Wednesday.\n";
            break;
        default:
            echo "Invalid day.\n";
            break;
    }

    // While Loop
    $count = 1;
    echo "\nWhile Loop Example:\n";
    while ($count <= 5) {
        echo "Count: $count\n";
        $count++;
    }

    // Do-While Loop
    $count = 1;
    echo "\nDo-While Loop Example:\n";
    do {
        echo "Count: $count\n";
        $count++;
    } while ($count <= 5);

    // For Loop
    echo "\nFor Loop Example:\n";
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration: $i\n";
    }

    // Foreach Loop
    $colors = ["Red", "Green", "Blue"];
    echo "\nForeach Loop Example:\n";
    foreach ($colors as $color) {
        echo "Color: $color\n";
    }

    // Nested Control Structures Example
    echo "\nNested Control Structures Example:\n";
    for ($i = 1; $i <= 3; $i++) {
        echo "Outer Loop $i:\n";
        for ($j = 1; $j <= 2; $j++) {
            echo "  Inner Loop $j\n";
        }
    }

    ?>


</body>

</html>