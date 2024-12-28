<?php 

require_once 'config.php';

session_start();

if (isset($_SESSION['last_regeneration'])){
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}
else{
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval){
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}

// $_SESSION["username"] = "Malik";

// unset($_SESSION["username"]);
// session_unset();

// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session in PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php 

    // echo $_SESSION["username"];

?>
    
</body>
</html>