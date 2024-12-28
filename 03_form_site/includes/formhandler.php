<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

// This is way is not the best way
// if(isset($_POST['submit'])){
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize user input
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favoritepet = htmlspecialchars($_POST['favoritepet']);

    if(empty($firstname) || empty($lastname) || empty($favoritepet)) {
        header("location: ../index.php");
        exit();
    }

    // Print the variables
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Favorite Pet: " . $favoritepet;

    header("location: ../index.php");
}
 else {
    header("location: ../index.php");
}
