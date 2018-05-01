<?php require("cookie.php3");
$hostname="localhost";
$username="root";
$password="1234";
$dbName="vagontea";
mysql_connect($hostname,$username,$password) or die ("Can't connect!");

@mysql_select_db($dbName) or die ("Can't choose DB!");
            $sql="select * from shop_cart";
            $result=mysql($dbname,$sql);
             $num=mysql_num_rows($result);
             Print "$num"; 
             If($num=0){
             Print "0";
             }            
?>