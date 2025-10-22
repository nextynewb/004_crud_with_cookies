<?php

require 'conn.php';

if(isset($_COOKIE['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    deleteUser($id);
}

header("Location: index.php");
exit();

?>


