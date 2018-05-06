<?php 
$uniq=$_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE']

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ru">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Вагоны</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/pages/css/animate.css" rel="stylesheet">
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/pages/css/slider.css" rel="stylesheet">
  <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    

    <?php 
include("connect.php");
?>
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="http://localhost/shop/theme/shop-index.php"><img src="assets/corporate/img/logos/logo-shop.png"  class="img-thumbnail"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><em class="fa fa-bars"></em></a>

        

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            
            <li class="dropdown dropdown-megamenu" >
              <a class="dropdown-toggle"  data-toggle="dropdown" data-target="#" href="admin.php">
                Товары
                
              </a>
              
            </li>
            <li></li>
            
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Заказы
                
              </a>
                
                      </li>
            
            
            
           
          </ul>
        </div>
        <?php
			  include("incart.php");
			  ?>

        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
     

   
            <!-- BEGIN PRODUCT LIST -->
            <div class="row product-list">
             <!-- PRODUCT ITEM START -->
              
		<?php
					
				$result1=mysql($dbName,"select idcustomer from customer");
				$count=mysql_num_rows($result);
				
				
while($i=mysql_fetch_array($result1,MYSQL_NUM)){	
				
				?>
              <div class="col-md-9 col-sm-8 ">
                <div class="product-item">
                 
                  <h3>
                   <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select surname from customer where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>Surname: $res</td><br/>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	
                  <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select name from customer where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>Name: $res</td><br/>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	
                  	<?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select idcustomer from customer where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $id=mysql_result($result,$j);
					  echo("<tr>id: $id</td><br/>");
					  $j++;
					  }
            	mysql_free_result($result);
					  ?>
                
                  </h3>
                 <form action="delete_customer.php"  method="post">
                  <input type="hidden" name="am" value="<?php echo("$id"); ?>">

             <input id="submit"  class="add2cart"  type="submit"  name="delcust" readonly value="Удалить пользователя">
                  </form>
                 
                          	<div>
                  <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select country from customer where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>Country: $res</td>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	</div>
                          	<div>
                  <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select city from customer where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>City: $res</td>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	</div>
                          	<div>
                  <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select email from customer where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>E-mail: $res</td>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	</div>
                          	<div>
                  <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select phone from customer where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>Phone:$res</td>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	</div>
                           
                          	 <div>
                  <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select idbill,date from bill where idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j,'idbill');
						  $res1=mysql_result($result,$j,'date');
					  echo("<tr>Order: $res Date: $res1   </td><br/>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?> 
                         	
                          	</div>
                          	
                          	<div>
                  <?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select * from receipt join bill on receipt.idbill=bill.idbill where bill.idcustomer='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  (string)$ord=mysql_result($result,$j,'idbill');
						  $res1=mysql_result($result,$j,'idvagon');
					  echo("<tr>Order: $ord vagon: $res1</td><br/>");
  
						?>
				<form action="delete_order.php"  method="post">
           <input type="hidden" name="am" value="<?php echo("$ord"); ?>">
             <input id="submit"  class="add2cart"  type="submit"  name="del" readonly value="удалить заказ">
                  </form>
						<?php
						
					  $j++;
					  }
	mysql_free_result($result);
                  ?> 
                         	
                          	</div>
                 
                  
            				  
                </div>
               
              </div>
              <?php

}
				
		
				mysql_free_result($result1);?>
              <!-- PRODUCT ITEM END -->
               

               

            </div>
            <!-- END PRODUCT LIST -->
           
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>


    
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
