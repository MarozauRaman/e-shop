<?php 
$uniq=$_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];
?>
<?php 
$back=$_SERVER['HTTP_REFERER'];
						  require("connect.php");
						  
							$id=trim($_REQUEST['btn']);

						 if(isset($_POST["btn"])){
							 
							 
							 
						  $sql="insert into shop_cart(uid,goods_id,amount) values ('{$uniq}','{$id}','1')";
						mysql_query($sql);
							 $del=mysql($dbName,"update instock set amount='0' where idinstock='{$id}'");
							
							
						 }

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );
?>
 