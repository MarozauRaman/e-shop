<?php 
$back=$_SERVER['HTTP_REFERER'];

require("connect.php");
							
							  (string)$ord=($_REQUEST['del']);
							  
						 		if(isset($_POST["del"])){
							 
							 
							  $sel=mysql($dbName,"select idvagon from receipt where idbill='{$ord}'");
									$co=mysql_num_rows($sel);
									
						 	 while($i=mysql_fetch_array($sel,MYSQL_NUM)){
							 $sql2=mysql($dbName,"update instock set amount='1' where idinstock='".$i[0]."'"); 
								 					 
							 }
							 
						  $sql="delete from receipt where idbill='{$ord}'";
						mysql_query($sql);
							 
							 $sql1="delete from bill where idbill='{$ord}'";
							 mysql_query($sql1);
							 echo("Заказ удален $ord!");
							
						 }




						 

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='2; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );

						 
?>