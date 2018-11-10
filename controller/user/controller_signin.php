<?php
include('model/user/m_signin.php');
      	 class c_signin
		 { 
			 
			 public function form(){
				 $m_signin=new m_signin();
				 $m_signin->signin();
				 include('view/user/signin.php');
		 }
				 
			public function signin(){
				
				 
			 include('view/user/view_signin.php');
			  
			 
		 }
		 
		 
		 
		 
		 }	 
		 
		 
	 
	  
	?>  