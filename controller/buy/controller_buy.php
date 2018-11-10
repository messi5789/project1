<?php
 include('model/product/m_product.php');
 $product=new m_product();
 $product->connect();
 if(($_GET['f'])){
	 $product->product_show();
	 
 }
 else if($_GET['ok'])
	 
	 {
		 
		$product->product_search(); 
		 
		 
		 
	 }
	 else
	 {
		 $product->product_show_default();
		 
	 }
	?>  