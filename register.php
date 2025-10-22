<?php


if(isset($_COOKIE['user_id'])) {
    header("Location: index.php");
    exit();
}

require 'conn.php';

if($_POST) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $newId = register($name, $email, $phone, $username, $password);
    if ($newId) {
        setcookie("user_id", $newId, time() + (86400 * 30), "/");
        header("Location: index.php");
        exit();
    }
}

?>

<html>
    <body>
        <h1>Register</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
        <p><a href="login.php">Already have an account? Login</a></p>
    </body>
</html>