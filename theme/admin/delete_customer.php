<?php 
$back=$_SERVER['HTTP_REFERER'];

require("connect.php");
							
							  (string)$id=($_REQUEST['delcust']);
							  
						 		if(isset($_POST["delcust"])){

						 $sel1=mysql($dbName,"select goods_id from shop_cart where uid='{$id}'");
						 			 					
						 	 while($ii=mysql_fetch_array($sel1,MYSQL_NUM)){
							 $sql24=mysql($dbName,"update instock set amount='1' where idinstock='".$ii[0]."'"); 
								 					 
							 }
							 $sql3=mysql($dbName,"delete from shop_cart where uid='{$id}'");

							 $idb=mysql($dbName,"select idbill from bill where idcustomer='{$id}'");
							 while($ord=mysql_fetch_array($idb,MYSQL_NUM)) {
							 
							 
							  $sel=mysql($dbName,"select idvagon from receipt where idbill='".$ord[0]."'");
									$co=mysql_num_rows($sel);
								
						 	 while($i=mysql_fetch_array($sel,MYSQL_NUM)){
							 $sql2=mysql($dbName,"update instock set amount='1' where idinstock='".$i[0]."'"); 
								 					 
							 }
							
						
						  $sql="delete from receipt where idbill='".$ord[0]."'";
						mysql_query($sql);
							 
							 $sql1="delete from bill where idbill='".$ord[0]."'";
							 mysql_query($sql1);
							 }


							$delc=mysql($dbName,"delete from customer where idcustomer='{$id}'");
							 echo "Покупатель $id удален!";
							
						 }




						 

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='2; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );

						 
?>