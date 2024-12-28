<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];

        
        try{
            require_once "dbh.inc.php";

            $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

            $options = [
                'cost' => 12,
            ];
            
            $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT, $options);

            $stmt = $pdo->prepare($query);

            $stmt ->bindParam(":username", $username);
            $stmt ->bindParam(":pwd", $hashedPassword);
            $stmt ->bindParam(":email", $email);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");

        }
        catch (PDOException $e){
            die("Query Failed: " . $e->getMessage());
        }
    }
    else{
        header("Location: ../index.php");
    }











?>