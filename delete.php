<?php

require 'conn.php';



$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    deleteUser($id);
}

header("Location: index.php");
exit();

?>


