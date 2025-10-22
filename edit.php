<?php

require 'conn.php';
$id = $_GET['id'];


if ($_POST) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    updateUser($id, $name, $email, $phone, $username, $password);
    header("Location: index.php");
    exit();
}

$user = getUserById($id);


?>

<html>
    <body>
        <h1>Edit User</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Name" value="<?php echo htmlspecialchars($user['name']); ?>">
            <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($user['email']); ?>">
            <input type="text" name="phone" placeholder="Phone" value="<?php echo htmlspecialchars($user['phone']); ?>">
            <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($user['username']); ?>">
            <input type="text" name="password" placeholder="Password" value="<?php echo htmlspecialchars($user['password']); ?>">
            <button type="submit">Update</button>
        </form>
        <p><a href="index.php">Back</a></p>
    </body>
</html>


