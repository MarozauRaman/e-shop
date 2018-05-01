<? include ("top_title.php"); ?>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="shop-index.php">Главная</a></li>
            
            <li class="active">Заказ</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Заказ</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <form action="confirm.php"  method="post">
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

              
              <!-- BEGIN SHIPPING ADDRESS -->
              
              <div id="shipping-address" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-address-content" class="accordion-toggle">
                      Доставка
                    </a>
                  </h2>
                </div>
                
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label for="firstname-dd">Фамилия <span class="require">*</span></label>
                        <input type="text" id="firstname-dd" name="surname" maxlength="30" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="lastname-dd">Имя <span class="require">*</span></label>
                        <input type="text" id="lastname-dd" name="name" maxlength="15" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="email-dd">E-Mail <span class="require">*</span></label>
                        <input type="text" id="email-dd" name="email" maxlength="40" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="telephone-dd">Телефон <span class="require">*</span></label>
                        <input type="text" id="telephone-dd" name="phone" maxlength="22" required class="form-control">
                      </div>
                      
                       <div class="form-group">
                        <label for="country-dd">Страна <span class="require">*</span></label>
                        <input type="text" id="country-dd" name="country" maxlength="30" required class="form-control">
                      </div>
                 
                   
                      <div class="form-group">
                        <label for="city-dd">Город <span class="require">*</span></label>
                        <input type="text" id="city-dd" name="city" maxlength="20" required class="form-control">
                      </div>
                     
                      
                    
                   <!-- <input type="number" name="am" placeholder="Amount" min="1"> -->
                  	<input id="button-confirm"  class="btn btn-primary pull-right"  type="submit"  name="btn1" readonly value="Заказать"><br/>
             
                   </form>
                    
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SHIPPING ADDRESS -->

             

              

              
            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

<?php include("bottom_title.php"); ?>
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
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
    <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

    <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/checkout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            Checkout.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>