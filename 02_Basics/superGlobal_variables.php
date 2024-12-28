<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variables</title>
</head>

<body>



    <?php
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $_GET["name"];
    echo "<br>";
    echo $_GET["eyecolor"];

    $name = "Alice";

    function greet()
    {
        echo "Hello, " . $GLOBALS['name'];
    }

    greet(); // Output: Hello, Alice

    echo $_GET['email']; 
    echo $_POST['password'];

    echo $_REQUEST['name'];

    session_start();
    $_SESSION['user'] = 'Alice';

    echo $_SESSION['user']; // Output: Alice

    setcookie('theme', 'dark', time() + 3600);
    echo $_COOKIE['theme']; // Output: dark

    echo $_FILES['fileToUpload']['name']; // Name of the uploaded file

    echo $_ENV['PATH']; // Output: System path environment variable
    ?>

</body>

</html>