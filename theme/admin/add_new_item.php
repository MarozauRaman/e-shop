

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="admin.php">Товары</a></li>
            
            <li><a href="orders.php">Заказы</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          

              
              <!-- BEGIN SHIPPING ADDRESS -->
              
              <div id="shipping-address" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page"  class="accordion-toggle">
                      Новый товар
                    </a>
                  </h2>
                </div>
                <form action="add_item.php" method="post">
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <p><select size="13" name="type">
                        <option disabled>Выберите тип</option>
                        <option value="1">Крытый</option>
                        <option value="2">Полувагон</option>
                        <option value="3">Хоппер</option>
                        <option value="4">Платформа</option>
                        <option value="5">Фитинговая платформа</option>
                        <option value="6">Платформа для перевозки леса</option>
                        <option value="7">Вагон-цистерна</option>
                        <option value="8">Думпкар</option>
                        <option value="9">Купейный вагон</option>
                        <option value="10">Плацкартный вагон</option>
                        <option value="11">Спальный вагон</option>
                        <option value="12">Вагон-ресторан</option>
                      </select></p>
                      <div class="form-group">
                        <label for="title-dd">Название <span class="require">*</span></label>
                        <input type="text" id="title-dd" name="title" maxlength="15" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="picture-dd">Картинка<span class="require">*</span></label>
                        <input type="text" id="picture-dd" name="picture" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="year-dd">Год <span class="require">*</span></label>
                        <input type="text" id="year-dd" name="year" maxlength="12" required class="form-control">
                      </div>
                      
                       <div class="form-group">
                        <label for="probeg-dd">Пробег<span class="require">*</span></label>
                        <input type="text" id="probeg-dd" name="probeg" maxlength="10" required class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="amount-dd">Количество<span class="require">*</span></label>
                        <input type="text" id="amount-dd" name="amount" required maxlength="2" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="price-dd">Цена<span class="require">*</span></label>
                        <input type="text" id="price-dd" name="price" required maxlength="7" class="form-control">
                      </div>
                 
                   
                      
                    
                   <!-- <input type="number" name="am" placeholder="Amount" min="1"> -->
                  	<input id="button-confirm"  class="btn btn-primary pull-right"  type="submit"  name="btnadd" readonly value="Добавить"><br/>
             
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