<?php 
$uniq=$_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];

?>
       <!-- BEGIN CART -->
        
        <div class="top-cart-block">
          <div class="top-cart-info">
            <?php
			  require("connect.php");
			  require ("cart_info.php");
			  ?>
          </div>
          <i class="fa fa-shopping-cart"></i>
                        
          <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">
                
                  <?php
					$result1=mysql_query("select distinct goods_id from shop_cart where uid='$uniq'");
				  
				 
					  
					while($i=mysql_fetch_array($result1,MYSQL_NUM)){
										
					?> 
                       <li>     
                    <?php
                  	$result=mysql($dbName,"select picture from instock join shop_cart on instock.idinstock=shop_cart.goods_id where goods_id='".$i[0]."' and uid='$uniq'");
					  $row=mysql_fetch_array($result,MYSQL_ASSOC);
						 echo "<img src='".$row['picture']."' width='37' height='34'>";
						
					  ?>
                                      
                  <span class="cart-content-count"> <?php
                  	$result2=mysql($dbName,"select sum(amount) as val_sum from shop_cart where goods_id='".$i[0]."' and uid='$uniq'");
					 	$row=mysql_fetch_assoc($result2);
						$sum=$row['val_sum'];
						echo "$sum";
					  ?></span>
                 
                  <strong ><?php
						mysql_set_charset('utf8');
					
                  	$result3=mysql($dbName,"select title from instock join shop_cart on instock.idinstock= shop_cart.goods_id where goods_id='".$i[0]."' and uid='$uniq'");
					  $num=mysql_num_rows($result3);
					  $j=0;
					  while($j<$num){
					  $res=mysql_result($result3,$j);
					  echo("$res");
					  $j++;
					  }
					  ?>
					  </strong>
                  <em><?php
				$result=mysql($dbName,"select sum(shop_cart.amount*instock.price) as val_sum from shop_cart join instock on shop_cart.goods_id=instock.idinstock where shop_cart.goods_id='".$i[0]."' and uid='$uniq'");
				$row=mysql_fetch_array($result,MYSQL_NUM);
				$sum=$row[0];	
				echo("$$sum");
				?>
                
                 </em>
                  
                  <form action="delete_from_cart.php"  method="post">
                   
                  	<input id="del"  class="del-goods"  type="submit"  name="btn1" readonly value="<?php echo("$i[0]"); ?>"><br/>
                  </form>
                
                </li>
				  <?php
										}
									?>
              
                                 </ul>
                  <?php 
				$sel=mysql($dbName,"select * from shop_cart where uid='$uniq'");
				$coun=mysql_num_rows($sel);
				if($coun>0){
					?>
              <div class="text-right">
                
                <a href="shop-checkout.php" class="btn btn-primary">Заказать</a>
              </div>
              <?php
				}
				  ?>
               </div>
            </div>
          </div>            
        </div>
        
        <!--END CART -->