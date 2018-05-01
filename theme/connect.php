<?php


$hostname="localhost";
$username="root";
$password="1234";
$dbName="vagontea";
$link=mysql_connect($hostname,$username,$password) or die ("Can't connect!");

mysql_select_db($dbName,$link) or die ("Can't choose DB!");


?>