<?php 
$back=$_SERVER['HTTP_REFERER'];
						  require("connect.php");
						  
							$id1=trim($_REQUEST['dobtov']);
							$id2=trim($_REQUEST['deltov']);

						 if(isset($_POST["dobtov"])){
							 
							 
							 
							 $add=mysql($dbName,"update instock set amount='1' where idinstock='{$id1}'");
	 echo("Товар $id1 Добавлен!");
						 
							
						 }

 if(isset($_POST["deltov"])){
							 
							 
							 
						 
							 $del=mysql($dbName,"update instock set amount='0' where idinstock='{$id2}'");
	 echo("Товар $id2 Удален!");
							
							
						 }

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );
?>
 