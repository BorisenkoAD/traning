<?php
require "conectdb.php";
$id = $_COOKIE['user_id'];
$tovars_ID1 = R::find('training', "userId = ?", array($id));
?>