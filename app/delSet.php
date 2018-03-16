<?php
require "conectdb.php";
$id = $_GET['id'];
$item = R::load( 'training', $id );
R::trash($item);
header("Location: ".$_SERVER['HTTP_REFERER']);
?>