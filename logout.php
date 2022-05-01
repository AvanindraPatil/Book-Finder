<?php
setcookie("username", false, time() - 3600);
setcookie("password", false, time() - 3600);
header('Location: login.php')
?>