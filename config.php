<?php
/*
 * Конфигурационный файл
 */

$host = 'localhost';
$pass = '';
$user = 'root';
$db = 'data';

$b = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db, $b) or die(mysql_error());


?>
