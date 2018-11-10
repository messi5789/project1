<?php
 include('model/product/m_product.php'); 
 class c_product{
	public function show(){
		$product=new m_product();
		$product->connect();
		$product->product_show();
		$rows=$product->show();
		include('view/product/view_product_show.php'); 
	 
		
	}
	 
	 
	public function search(){
		$product=new m_product();
		$product->connect();
		$product->product_search();
		$rows=$product->search();
		include('view/product/view_product_search.php') ;
	 
		
	}
	
	
	public function p_default(){
		$product=new m_product();
		$product->connect();
		$product->product_show_default();
		$rows=$product->show_default();
		include('view/product/view_product_default.php');
		
	}
	 
	 
	 
	 
	 
 }
 


	?>  