<?php 
$back=$_SERVER['HTTP_REFERER'];
						  require("connect.php");
						  
							$id=trim($_REQUEST['am']);

						 if(isset($_POST["dobtov"])){
							 
							 
							 
							 $add=mysql($dbName,"update instock set amount='1' where idinstock='{$id}'");
	 echo("Товар $id Добавлен!");
						 
							
						 }

 if(isset($_POST["deltov"])){
							 
							 
							 
						 
							 $del=mysql($dbName,"update instock set amount='0' where idinstock='{$id}'");
	 echo("Товар $id Удален!");
							
							
						 }

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );
?>
 