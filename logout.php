<?php

// Clear the user cookie by setting expiration in the past
setcookie("user_id", "", time() - 3600, "/");

header("Location: login.php");
exit();

?>


