<?php

require 'conn.php';


if (isset($_COOKIE['user_id'])) {
    header("Location: index.php");
    exit();
}

if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = login($username, $password);
    if ($result) {
        // Set a cookie with the user's ID that expires in 30 days
        $user_id = $result['id'];
        setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location: index.php");
        exit();
    } else {
        $error = "Login failed";
    }
}

?>


<html>
    <body>
        <h1>Login</h1>
        <?php if (isset($error)) { echo '<p style="color:red">'.$error.'</p>'; } ?>
        <form  method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
        <p><a href="register.php">No account? Register</a></p>
    </body>
</html>
