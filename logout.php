<?php
// echo $_COOKIE['id'];
setcookie('id', '', time()-3600);
header("Location: index.php");
?>