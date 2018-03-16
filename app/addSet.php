<?php
require "conectdb.php";
$weight = substr(htmlspecialchars(trim($_POST['InputWeight'])), 0, 5);
$repeat = substr(htmlspecialchars(trim($_POST['InputRepeat'])), 0, 5);
$approach = substr(htmlspecialchars(trim($_POST['InputApproach'])), 0, 5);
$movement = substr(htmlspecialchars(trim($_POST['movement'])), 0, 50);
$userId = $_COOKIE['user_id'];

$date_today = date("Y-m-d"); //присвоено 2018-03-15

$trainingSet = R::dispense('training');
$trainingSet -> weight = $weight;
$trainingSet -> repeat = $repeat;
$trainingSet -> movement = $movement;
$trainingSet -> userId = $userId;
$trainingSet -> date_insert = $date_today;
$trainingSet -> approach = $approach;

R::store($trainingSet);

header("Location: ".$_SERVER['HTTP_REFERER']);
?>