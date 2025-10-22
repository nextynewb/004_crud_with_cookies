<?php
require 'conn.php';


if(!isset($_COOKIE['user_id'])) {
    header("Location: login.php");
    exit();
}



$allUsers = getAllUsers();

?>

<html>
    <body>
        <h1>All Users</h1>
        <p>
            <a href="register.php">Register</a> |
            <a href="login.php">Login</a> |
            <a href="logout.php">Logout</a>
        </p>
        <table border="1" cellpadding="6" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($allUsers as $u) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($u['id']); ?></td>
                    <td><?php echo htmlspecialchars($u['name']); ?></td>
                    <td><?php echo htmlspecialchars($u['email']); ?></td>
                    <td><?php echo htmlspecialchars($u['phone']); ?></td>
                    <td><?php echo htmlspecialchars($u['username']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo urlencode($u['id']); ?>">Edit</a>
                        |
                        <a href="delete.php?id=<?php echo urlencode($u['id']); ?>" onclick="return confirm('Delete this user?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

