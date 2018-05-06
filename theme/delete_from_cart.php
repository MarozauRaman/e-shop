<?php 
$back=$_SERVER['HTTP_REFERER'];
						  require("connect.php");
						  	$id=trim($_REQUEST['am']);
						 if(isset($_POST["btn1"])){
						  $sql="delete from shop_cart where goods_id='{$id}'";
						mysql_query($sql);
							$bacc=mysql($dbName,"update instock set amount='1' where idinstock='{$id}'");
							
						 }

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );
?>
 