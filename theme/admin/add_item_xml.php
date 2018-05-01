<?php 
$back=$_SERVER['HTTP_REFERER'];
						  require("connect.php");
						  $path=trim($_REQUEST['path']);
						  if (!preg_match("/[^\:\/\.\_\-a-zA-Z0-9]*[.][xml]{3,4}/", $path))  {
$xml=simplexml_load_file(rawurlencode($path));
foreach ($xml as $x) {
	$type = $x->type;
	$title = $x->title;
	$picture = $x->picture;
	$year = $x->year;
	$probeg = $x->probeg;
	$amount = $x->amount;
	$price = $x->price;


	$sql1="insert into instock(idtype,title,picture,year,probeg,amount,price) values ('{$type}','{$title}' ,'{$picture}','{$year}-00-00','{$probeg}','{$amount}','{$price}')";
		mysql_query($sql1);
							
}

}else {
	echo "Wrong path!";
	echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	
}

echo("
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='0; URL=".$_SERVER['HTTP_REFERER']."'>
	</head>
	</html>" );	

?>