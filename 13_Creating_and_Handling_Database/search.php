<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usersearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELEECT * users FROM comments WHERE username = :usersearch;";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $usersearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databases with PHP</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<section>

    <h2>Search Result:</h2>
    <?php

    if (empty($results)) {
        echo "<div>";
        echo "<p> There is NO Result </p>";
        echo "</div>";
    } else {
        foreach ($results as $row) {
            echo "<div>";
            echo "<h4>" .  htmlspecialchars($row["username"]) . "</h4>";
            echo "<h4>" . htmlspecialchars($row["comment_message"]) . "</h4>";
            echo "<h4>" . htmlspecialchars($row["created_at"]) . "</h4>";
            echo "</div>";
        }
    }

    ?>
</section>


</body>

</html>