<?php

require "conectdb.php";

$user = R::dispense('user');
$user -> username = 'Костя';
$user -> password = '123';
R::store($user);
$user = R::dispense('user');
$user -> username = 'Рома';
$user -> password = '123';
R::store($user);
$user = R::dispense('user');
$user -> username = 'Саша';
$user -> password = '123';
R::store($user);

?>