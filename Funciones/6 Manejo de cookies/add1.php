<?php


$valor = $_COOKIE['count'];
$valor++;
setcookie('count',$valor, time() + 3600);


echo'Adding 1 ';