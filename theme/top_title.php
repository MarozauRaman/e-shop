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
    

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                      <li><em class="fa fa-phone"></em><span>+375 00 000 00 00</span></li>
                      <!-- BEGIN CURRENCIES -->
                        <li class="shop-currencies">
                          <a href="javascript:void(0);" class="current">$</a>
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">Русский </a>
                      </div></div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
      </div>
                <!-- END TOP BAR LEFT PART -->
               
</div>
        </div>        
    </div>
    <!-- END TOP BAR -->
<?php 
include("connect.php");
?>
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="shop-index.php"><img src="assets/corporate/img/logos/logo-shop.png"  class="img-thumbnail"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><em class="fa fa-bars"></em></a>

        

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Вагоны
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-4 header-navigation-col">
                        <h4>Грузовые</h4>
                        <ul>
                          <li><a href="krytyj.php">Крытый</a></li>
                          <li><a href="poluvagon.php">Полувагон</a></li>
                          <li><a href="hopper.php">Хоппер</a></li>
                          <li><a href="platforma.php">Платформа</a></li>
                          <li><a href="fitingovaya.php">Фитинговая платформа</a></li>
                          <li><a href="platforma_les.php">Платформы для перевозки леса</a></li>
                          <li><a href="cisterna.php">Вагон-цистерна</a></li>
                          <li><a href="dumpkar.php">Думпкар</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Пассажирские</h4>
                        <ul>
                         <li><a href="kupe.php">Купейный</a></li>
                         <li><a href="platskart.php">Плацкартный</a></li>
                         <li><a href="sv.php">Спальный</a></li>
                         <li><a href="restoran.php">Вагон-ресторан</a></li>
                        </ul>
                      </div>
                                        
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li></li>
            
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Pages
                
              </a>
                
              <ul class="dropdown-menu">
                <li class="active"><a href="shop-index.php">Home Default</a></li>
                
                <li><a href="admin/admin.php">Admin</a></li>
               
              </ul>
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
