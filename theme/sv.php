<?php
include("top_title.php");
?>
    <div class="title-wrapper">
      <div class="container"><div class="container-inner">
       
        <h1><span>Спальные</span>вагоны</h1>
        <em>Всегда в наличии</em>
      </div></div>
    </div>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="shop-index.php">Главная</a></li>
              <li class="active">Спальные вагоны</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
<!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">
            <li class="list-group-item dropdown clearfix"> 
            <a href="shop-product-list.html">
            <ul class="list-group margin-bottom-25 sidebar-menu">
                
               <li class="list-group-item clearfix dropdown">
                
                  <i class="fa fa-angle-right"></i>
                  Грузовые
                  
                </a>
                <ul class="dropdown-menu" >
                  
                  <li><a href="krytyj.php"><i class="fa fa-angle-right"></i> Крытый</a></li>
                  <li><a href="poluvagon.php"><i class="fa fa-angle-right"></i> Полувагон</a></li>
                  <li><a href="hopper.php"><i class="fa fa-angle-right"></i> Хоппер</a></li>
                  <li><a href="platforma.php"><i class="fa fa-angle-right"></i> Платформа</a></li>
                  <li><a href="fitingovaya.php"><i class="fa fa-angle-right"></i>Фитинговая платформа</a></li>
                  <li><a href="platforma_les.php"><i class="fa fa-angle-right"></i>Платформы для перевозки леса</a></li>
                  <li><a href="cisterna.php"><i class="fa fa-angle-right"></i>  Вагон-цистерна</a></li>
                  <li><a href="dumpkar.php"><i class="fa fa-angle-right"></i>Думпкар</a></li>
             
                                 
                                   
                  
                  
                      </ul>
                  </li>
                      
                       </ul>
              </li>
              <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix dropdown active">
               <a href="javascript:void(0);" class="collapsed">
                  <i class="fa fa-angle-right"></i>
                  Пассажирские                  
                </a>
                <ul class="dropdown-menu" style="display:block;" >
                <li><a href="kupe.php"><i class="fa fa-angle-right"></i> Купейный</a></li>
                 <li><a href="platskart.php"><i class="fa fa-angle-right"></i>Плацкартный</a></li>
                  <li class="list-group-item dropdown clearfix active">
                   <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i>Спальный</a>
                                 </li>                              
                 
                  
                  
                  <li><a href="restoran.php"><i class="fa fa-angle-right"></i> Вагон-ресторан</a></li>
                </ul>
              </li>
            </ul>
              
            </ul>

                      
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            
            <!-- BEGIN PRODUCT LIST -->
            <div class="row product-list">
              <!-- PRODUCT ITEM START -->
              
		<?php
					
				$result1=mysql($dbName,"select idinstock from instock where instock.idtype='11' and amount>0");	
				$count=mysql_num_rows($result);
				
				
while($i=mysql_fetch_array($result1,MYSQL_NUM)){	
				
				?>
              <div class="col-md-9 col-sm-8 ">
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
					
                  	$result=mysql($dbName,"select year(year) from instock where idinstock='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result,$j);
					  echo("<tr>Год: $res</td>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	</div>
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
                 
                 
                          	 <div>
                  <?php
					
                  	$result=mysql($dbName,"select idinstock from instock where idinstock='".$i[0]."'");
					  $num=mysql_num_rows($result);
					  $j=0;
					  while($j<$num){
					  $id=mysql_result($result,$j);
					  echo("<tr>id: $id</td>");
					  $j++;
					  }
	mysql_free_result($result);
                  ?>
                          	</div>
                 
                  <form action="add.php"   method="post">
                    <input type="hidden" name="am" value="<?php echo("$i[0]") ?>">
                    <input id="submit"  class="add2cart" type="submit"  name="btn"  readonly value="Add to cart"><br/>
                  </form>
            				  
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