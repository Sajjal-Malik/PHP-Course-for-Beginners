<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup and Login Forms</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<?php

check_login_errors();

?>
<!-- Signup Form -->
<div class="container">
    <h3>Signup</h3>
    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_inputs();
        ?>
        <button>Signup</button>
    </form>
</div>

<?php

check_signup_errors();

?>

<!-- Login Form -->
<div class="container">
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>
</div>

<?php

check_login_errors();

?>

<div class="container">
    <h3>Logout</h3>
    <form action="includes/logout.inc.php" method="post">
        <button>Login</button>
    </form>
</div>

</html>
;