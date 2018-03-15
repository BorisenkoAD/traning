<?php
require "conectdb.php";
$id = $_COOKIE['user_id'];
$date_today = date("Y-m-d"); //присвоено 12.03.15
// $allTraning_benchPress = R::find('training', "user_id = ? AND movement = 'squats'", array($id));

$allTraning_benchPress = R::find('training', "user_id = ? AND date_insert = ? order by date_insert, movement", array($id, $date_today));
if(empty($allTraning_benchPress)) {
    $allTraning_benchPress = R::find('training', "user_id = ? AND date_insert < ? order by date_insert, movement", array($id, $date_today));
}
//$allTraning_benchPress = R::getAll('SELECT * FROM training WHERE user_id = ? AND movement = ?', [$id, 'bench_press']);
//$allTraning_benchPress = R::find( 'training', ' user_id ? AND movement LIKE ? ', array($id, 'bench_press') );
//$books  = R::find( 'book', ' rating < :rating ', [ ':rating' => 2 ] );
?>