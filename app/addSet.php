<?php
require "conectdb.php";
$InputWeight = substr(htmlspecialchars(trim($_POST['InputWeight'])), 0, 100);
$InputRepeat = substr(htmlspecialchars(trim($_POST['InputRepeat'])), 0, 50);
$movement = substr(htmlspecialchars(trim($_POST['movement'])), 0, 50);
$userId = $_COOKIE['user_id'];



$trainingSet = R::dispense('training');
$trainingSet -> weight = $InputWeight;
$trainingSet -> repeat = $InputRepeat;
$trainingSet -> movement = $movement;
$trainingSet -> userId = $userId;

R::store($trainingSet);

header("Location: ".$_SERVER['HTTP_REFERER']);
?>
