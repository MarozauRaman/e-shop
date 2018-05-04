<?php 
$uniq=$_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];
?>
<?php 
$back=$_SERVER['HTTP_REFERER'];
$idbill=uniqid(" ");



						  require("connect.php");
							  $sur=trim($_REQUEST['surname']);
							  $name=trim($_REQUEST['name']);
							  $email=trim($_REQUEST['email']);
							  $phone=trim($_REQUEST['phone']);
							  $country=trim($_REQUEST['country']);
							  $city=trim($_REQUEST['city']);
$reg='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
							  
							if (!preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $sur))  {
     						if (!preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $name)) {
							if (preg_match($reg, $email)) { //разрешить @ and dot
							if (!preg_match("/[^+()0-9]/", $phone)) { //запретить все, кроме цифр, () и +
 							if (!preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $country)) {
 							if (!preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $city)) {
								


								
							
							
		
						if(isset($_POST["btn1"])){
							 
							 $sql11=mysql($dbName,"select Name from customer where idcustomer='$uniq'");
							 
								$num=mysql_num_rows($sql11);
								 if ($num != 0){
							 	
							 	$sqll=mysql($dbName,"update customer set Surname = '{$sur}', Name = '{$name}', email = '{$email}', Phone = '{$phone}', Country = '{$country}', City = '{$city}' where idcustomer='$uniq'");
							 }
								  else{

							 
						  $sql="insert into customer (idcustomer,Surname,Name,email,Phone,Country,City) values ('{$uniq}','{$sur}','{$name}','{$email}','{$phone}','{$country}','{$city}')";
						mysql_query($sql);
							}
							
							$sql1="insert into bill (idbill,idcustomer) values ('{$idbill}','{$uniq}')";
							 mysql_query($sql1);
							 
							 $sel=mysql($dbName,"select goods_id from shop_cart where uid='$uniq'");		
						 	 while($i=mysql_fetch_array($sel,MYSQL_NUM)){
							 $sql2=mysql($dbName,"insert into receipt (idbill,idvagon) values ('{$idbill}','{$i[0]}')"); 
							 }

							  
							$del="delete from shop_cart where uid='$uniq'";
							 mysql_query($del);
						 

echo("Спасибо за заказ, $name!");
echo(" С вами свяжутся в течении 10 минут!");

						

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='3; URL=shop-index.php'>
	</head>
	</html>" );


}
} else {
	echo "Wrong city!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
} else {
 echo "Wrong country!"; 
 echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
} else {
	echo "Wrong phone!";
echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
} else {
	echo "Wrong email!";
echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
} else {
	echo "Wrong name!";
echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
} else {
	echo "Wrong Surname!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}



 	 
?>
 