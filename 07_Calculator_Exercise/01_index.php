<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <div class="calculator">
        <h1>Simple Calculator</h1>
        <!-- Changed method to POST to match PHP $_POST handling -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <select name="operator" required>
                <option value="ADD">+</option>
                <option value="SUBTRACT">-</option>
                <option value="MULTIPLY">*</option>
                <option value="DIVIDE">/</option>
            </select>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="submit">Calculate</button>
        </form>

        <?php 
            // Handle the form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
                $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
                $operator = htmlspecialchars($_POST["operator"]);

                // Error handlers
                $errors = false;

                // Check if any field is empty
                if (empty($num1) || empty($num2) || empty($operator)) {
                    echo "<p class='calc-error'>Fill in All Fields</p>"; 
                    $errors = true;
                }
                
                // Check if both inputs are numeric
                if (!is_numeric($num1) || !is_numeric($num2)) {
                    echo "<p class='calc-error'>Only Write Numbers</p>"; 
                    $errors = true;
                }

                // Calculate result if no errors
                if (!$errors) {
                    $value = 0;
                    switch($operator) {
                        case "ADD":
                            $value = $num1 + $num2;
                            break;
                        case "SUBTRACT":
                            $value = $num1 - $num2;
                            break;
                        case "MULTIPLY":
                            $value = $num1 * $num2;
                            break;
                        case "DIVIDE":
                            // Check division by zero
                            if ($num2 == 0) {
                                echo "<p class='calc-error'>Cannot Divide by Zero</p>";
                                $errors = true;
                            } else {
                                $value = $num1 / $num2;
                            }
                            break;
                        default:
                            echo "<p class='calc-error'>Something went WRONG!</p>"; 
                            $errors = true;
                    }

                    // Display result if no errors
                    if (!$errors) {
                        echo "<p class='calc-result'>Result = " . $value . "</p>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>
