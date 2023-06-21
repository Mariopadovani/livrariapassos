<?php
// echo $_COOKIE['id'];
setcookie('id', '', time()-3600);
setcookie('admin', '', time()-3600);
header("Location: /livrariapassos/");
?>