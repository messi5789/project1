<?php
  include('model/user/m_signup.php');
      	 class c_signup
		 { 
			 
			 public function form(){
				 $m_signup=new m_signup();
				 $m_signup->signup();
				 include('view/user/signup.php');
		 }
				 
			public function signup(){
				
				 
			 include('view/user/view_signup.php');
			  
			 
		 }
		 
		 
		 
		 
		 }	 
  
  
  
  ?>