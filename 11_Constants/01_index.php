<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants in PHP</title>
</head>

<body>

    <?php
    // Defining constants using define()
    define("SITE_NAME", "My Awesome Website");
    define("MAX_USERS", 100);

    // Defining constants using const
    const API_VERSION = "1.0.0";

    // Accessing constants
    echo "Welcome to " . SITE_NAME . "\n";
    echo "This site supports up to " . MAX_USERS . " users.\n";
    echo "API Version: " . API_VERSION . "\n";

    // Predefined constants
    echo "PHP Version: " . PHP_VERSION . "\n";
    echo "Maximum Integer Value: " . PHP_INT_MAX . "\n";

    // Demonstrating constant immutability
    // Uncommenting the below line will cause an error
    // define("SITE_NAME", "New Site"); // Error: Cannot redefine constant

    // Scope demonstration: Constants are global
    function showConstant()
    {
        echo "Site Name inside function: " . SITE_NAME . "\n";
    }

    showConstant();
    ?>




</body>

</html>