<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databases with PHP</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<!-- Signup Form -->
<div class="form-container">
    <h2>Signup</h2>
    <form action="includes/formhandler.inc.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="pwd" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit" class="signup-button">Signup</button>
    </form>
</div>


</body>

</html>