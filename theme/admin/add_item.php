<?php 
$back=$_SERVER['HTTP_REFERER'];
						  require("connect.php");
						  
							$type=trim($_REQUEST['type']);
							$title=trim($_REQUEST['title']);
							$pic=trim($_REQUEST['picture']);
							$year=trim($_REQUEST['year']);
							(int)$probeg=trim($_REQUEST['probeg']);
							(int)$price=trim($_REQUEST['price']);
							(int)$amount=trim($_REQUEST['amount']);
 
 if (!preg_match("/[^-0-9]/", $title))  {
 	if (!preg_match("/[^\:\/\.\_\-a-zA-Z0-9]/", $pic))  {
 		if (!preg_match("/[^0-9]/", $year)) {
 			if (!preg_match("/[^0-9]/", $probeg)) {
 				if (!preg_match("/[^0-9]/", $price)) {
 					if (!preg_match("/[^01]/", $amount)) {


						 if(isset($_POST["btnadd"])){
							 
							 
							 
					
						$sql1="insert into instock(idtype,title,picture,year,probeg,amount,price) values ('{$type}','{$title}' ,'{$pic}','{$year}-00-00','{$probeg}','{$amount}','{$price}')";
							mysql_query($sql1);
							
							echo "DFggdgdfgddg";
						 }

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );

} else {
	echo "Wrong amount!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
} else {
	echo "Wrong price!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
}else {
	echo "Wrong probeg!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
}else {
	echo "Wrong year!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
}else {
	echo "Wrong pic!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
}else {
	echo "Wrong title!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}
?>
 