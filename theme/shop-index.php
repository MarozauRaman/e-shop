
<?php
include ("top_title.php");
?>
    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                                Низкие<br/><span class="color-red-v2">цены</span><br/> 
                       </h2>
                      </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                                Быстрая<br/><span class="color-red-v2">доставка</span><br/> 
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-six">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                                Полное<br/><span class="color-red-v2">сопровождение</span><br/> 
                            </h2>
                        </div>
                    </div>
                </div>

               
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix dropdown">
                <a href="shop-product-list.html">
                  <i class="fa fa-angle-right"></i>
                  Грузовые
                  
                </a>
                <ul class="dropdown-menu">
                  <li class="list-group-item dropdown clearfix">                                
                  <li><a href="krytyj.php"><i class="fa fa-angle-right"></i> Крытый</a></li>
                  <li><a href="poluvagon.php"><i class="fa fa-angle-right"></i> Полувагон</a></li>
                  <li><a href="hopper.php"><i class="fa fa-angle-right"></i> Хоппер</a></li>
                  <li><a href="platforma.php"><i class="fa fa-angle-right"></i> Платформа</a></li>
                  <li><a href="fitingovaya.php"><i class="fa fa-angle-right"></i> Фитинговая платформа</a></li>
                  <li><a href="platforma_les.php"><i class="fa fa-angle-right"></i> Платформы для перевозки леса</a></li>
                  <li><a href="cisterna.php"><i class="fa fa-angle-right"></i> Вагон-цистерна</a></li>
                  <li><a href="dumpkar.php"><i class="fa fa-angle-right"></i> Думпкар</a></li>
                </ul>
              </li>
               <li class="list-group-item clearfix dropdown">
                <a href="shop-product-list.html">
                  <i class="fa fa-angle-right"></i>
                  Пассажирские
                  
                </a>
                <ul class="dropdown-menu">
                  <li class="list-group-item dropdown clearfix">                                
                  <li><a href="kupe.php"><i class="fa fa-angle-right"></i> Купейный</a></li>
                  <li><a href="platskart.php"><i class="fa fa-angle-right"></i> Плацкартный</a></li>
                  <li><a href="sv.php"><i class="fa fa-angle-right"></i> Спальный</a></li>
                  <li><a href="restoran.php"><i class="fa fa-angle-right"></i> Вагон-ресторан</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <h2>Новое поступление</h2>
            <div class="owl-carousel owl-carousel3">
             	<?php
				$result1=mysql($dbName,"select idinstock from instock where amount>0 order by idinstock desc limit 3");		
				
while($i=mysql_fetch_array($result1,MYSQL_NUM)){	
				
				?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <?php
                  	$result=mysql($dbName,"select picture from  instock  where instock.idinstock='".$i[0]."'");
					  $row=mysql_fetch_array($result,MYSQL_ASSOC);
						 echo "<img src='".$row['picture']."'><br/>";
					  ?>
                    
                  </div>
                  <h3>
                  	<?php
					mysql_set_charset('utf8');
                  	$result=mysql($dbName,"select title from  instock  where instock.idinstock='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>$res</td>");
					  $j++;
					  }
					  ?>
                  </h3>
                  <div>
                  <?php
					
                  	$result=mysql($dbName,"select instock.price from instock where idinstock='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>Цена: $res</td>");
					  $j++;
					  }
                  ?>
                          	</div>
                          	<div>
                  <?php
					
                  	$result=mysql($dbName,"select instock.probeg from instock where idinstock='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>Пробег: $res</td>");
					  $j++;
					  }


                  ?>
                          	</div>
                          	
                   <form action="add.php"   method="post">
                   <!-- <input type="number" name="am" placeholder="Amount" min="1"> -->
                  	<input id="submit"  class="add2cart" type="submit"  name="btn"  readonly value="<?php echo("$i[0]"); ?>"><br/>
                  </form>
                  
                </div>
              </div>
              <?php
				}
				?>
             
        </div>
        <!-- END SIDEBAR & CONTENT -->

               
      </div>
    </div>

    
<?php
		  include("bottom_title.php");
		  ?>


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