<?php
    
    include('model/user/m_logout.php');
      	 class c_logout
		 { 
			  
			public function logout(){
				$m_logout=new m_logout();
				$m_logout->connect();
				$m_logout->logout();
				 
		 }
		 
		 
		 
		 
		 }	 
		  
	?>  