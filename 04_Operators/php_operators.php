<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>

<body>

    <?php
    // Arithmetic Operators
    echo "Arithmetic Operators:\n";
    $a = 5;
    $b = 3;
    echo "Addition: " . ($a + $b) . "\n";
    echo "Subtraction: " . ($a - $b) . "\n";
    echo "Multiplication: " . ($a * $b) . "\n";
    echo "Division: " . ($a / $b) . "\n";
    echo "Modulus: " . ($a % $b) . "\n\n";

    // Assignment Operators
    echo "Assignment Operators:\n";
    $x = 10;
    echo "Initial Value: $x\n";
    $x += 5;
    echo "Add and assign: $x\n";
    $x -= 3;
    echo "Subtract and assign: $x\n";
    $x *= 2;
    echo "Multiply and assign: $x\n";
    $x /= 4;
    echo "Divide and assign: $x\n";
    $x %= 3;
    echo "Modulus and assign: $x\n\n";

    // Comparison Operators
    echo "Comparison Operators:\n";
    $x = 5;
    $y = 3;
    echo "Equal: " . ($x == $y ? "true" : "false") . "\n";
    echo "Identical: " . ($x === $y ? "true" : "false") . "\n";
    echo "Not Equal: " . ($x != $y ? "true" : "false") . "\n";
    echo "Not Identical: " . ($x !== $y ? "true" : "false") . "\n";
    echo "Greater Than: " . ($x > $y ? "true" : "false") . "\n";
    echo "Less Than: " . ($x < $y ? "true" : "false") . "\n\n";

    // Increment/Decrement Operators
    echo "Increment/Decrement Operators:\n";
    $x = 5;
    echo "Pre-increment: " . (++$x) . "\n";
    echo "Post-increment: " . ($x++) . " (After increment: $x)\n";
    echo "Pre-decrement: " . (--$x) . "\n";
    echo "Post-decrement: " . ($x--) . " (After decrement: $x)\n\n";

    // Logical Operators
    echo "Logical Operators:\n";
    $x = true;
    $y = false;
    echo "And: " . ($x && $y ? "true" : "false") . "\n";
    echo "Or: " . ($x || $y ? "true" : "false") . "\n";
    echo "Not: " . (!$x ? "true" : "false") . "\n\n";

    // String Operators
    echo "String Operators:\n";
    $str1 = "Hello ";
    $str2 = "World!";
    echo "Concatenation: " . ($str1 . $str2) . "\n";
    $str1 .= $str2;
    echo "Concatenation Assignment: $str1\n\n";

    // Array Operators
    echo "Array Operators:\n";
    $arr1 = [1, 2];
    $arr2 = [3, 4];
    print_r($arr1 + $arr2);
    echo "Equality: " . ($arr1 == $arr2 ? "true" : "false") . "\n";
    echo "Identity: " . ($arr1 === $arr2 ? "true" : "false") . "\n\n";

    // Bitwise Operators
    echo "Bitwise Operators:\n";
    $x = 6; // 110 in binary
    $y = 3; // 011 in binary
    echo "And: " . ($x & $y) . "\n";
    echo "Or: " . ($x | $y) . "\n";
    echo "Xor: " . ($x ^ $y) . "\n";
    echo "Not: " . (~$x) . "\n";
    echo "Left Shift: " . ($x << $y) . "\n";
    echo "Right Shift: " . ($x >> $y) . "\n\n";

    // Error Control Operator
    echo "Error Control Operator:\n";
    $result = @file('non_existing_file.txt'); // Suppresses error
    echo $result ? "File read successful\n" : "File does not exist\n\n";

    // Execution Operator
    echo "Execution Operator:\n";
    $output = `echo "Hello from shell"`;
    echo $output . "\n";

    // Type Operator
    echo "Type Operator:\n";
    class MyClass {}
    $obj = new MyClass();
    echo "Instanceof: " . ($obj instanceof MyClass ? "true" : "false") . "\n";
    ?>

</body>

</html>