<?php
unset($_COOKIE['user_id']);
unset($_COOKIE['username']);
setcookie('user_id', '', -1, '/');
setcookie('username', '', -1, '/');
header( "Location: http://" . $_SERVER['HTTP_HOST']);
//header("Location: ".$_SERVER['SERVER_NAME']);
?>