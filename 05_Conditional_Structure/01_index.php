<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Structures</title>
</head>

<body>

    <?php
    // File: conditional_structures.php

    // Display purpose
    echo "PHP Conditional Structures Examples\n\n";

    /*
1. IF Statement
   Syntax: if (condition) { code to execute if condition is true }
*/
    $number = 10;

    if ($number > 5) {
        echo "IF Statement: $number is greater than 5.\n";
    }

    /*
2. IF-ELSE Statement
   Syntax: if (condition) { code if true } else { code if false }
*/
    if ($number % 2 == 0) {
        echo "IF-ELSE Statement: $number is an even number.\n";
    } else {
        echo "IF-ELSE Statement: $number is an odd number.\n";
    }

    /*
3. ELSEIF Statement
   Syntax: if (condition) { code if true } elseif (condition) { another code if true } else { code if all false }
*/
    $grade = 85;

    if ($grade >= 90) {
        echo "ELSEIF Statement: You got an A.\n";
    } elseif ($grade >= 75) {
        echo "ELSEIF Statement: You got a B.\n";
    } else {
        echo "ELSEIF Statement: You need improvement.\n";
    }

    /*
4. SWITCH Statement
   Syntax:
   switch (variable) {
       case value1:
           code for case1;
           break;
       case value2:
           code for case2;
           break;
       default:
           code if none match;
   }
*/
    $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "SWITCH Statement: It's the start of the week.\n";
            break;
        case "Friday":
            echo "SWITCH Statement: It's almost the weekend.\n";
            break;
        default:
            echo "SWITCH Statement: It's just another day.\n";
            break;
    }

    /*
5. Ternary Operator
   Syntax: condition ? value_if_true : value_if_false;
*/
    $isLoggedIn = true;

    echo "Ternary Operator: " . ($isLoggedIn ? "Welcome back, user!" : "Please log in.") . "\n";

    /*
6. Null Coalescing Operator
   Syntax: $variable ?? $default_value;
   Returns $variable if it exists and is not null; otherwise, returns $default_value.
*/
    $userInput = null;
    echo "Null Coalescing Operator: " . ($userInput ?? "No input provided.") . "\n";

    /*
7. Short Ternary Operator (PHP 7.4+)
   Syntax: $variable ?: $default_value;
   Similar to Null Coalescing but checks for falsy values.
*/
    $username = "";
    echo "Short Ternary Operator: " . ($username ?: "Guest User") . "\n";

    ?>


</body>

</html>