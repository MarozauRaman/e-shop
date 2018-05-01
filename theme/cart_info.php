<?php 
$uniq=$_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];
?>
			 <a href="javascript:void(0);" class="top-cart-info-count">   <?php
				$result=mysql($dbName,"select sum(amount) as val_sum from shop_cart where uid='$uniq'");
				$row=mysql_fetch_assoc($result);
				$sum=$row['val_sum'];
				if($sum==0){
					echo "0";
				}
				echo "$sum";

				?></a>
            <a href="javascript:void(0);" class="top-cart-info-value"><?php
				$result=mysql($dbName,"select sum(shop_cart.amount*instock.price) as val_sum from shop_cart join instock on shop_cart.goods_id=instock.idinstock where uid='$uniq'");
				
				$row=mysql_fetch_assoc($result);
				$sum=$row['val_sum'];
				if($sum==0){
					echo "0";
				}
				echo("$$sum");
				?></a>