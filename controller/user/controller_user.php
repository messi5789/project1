<?php
    
    if($_GET['do']=='signup'){
		include('controller/user/controller_signup.php');
		$user=new c_signup();
		if(isset($_SESSION['username1'])){		 
		$user->signup();
		}
		else{
			$user->form();
		
	}
	}
	else {
		include('controller/user/controller_signin.php');
		$user=new c_signin();
		if(isset($_SESSION['username1'])){		 
		$user->signin();
		}
		else{
			$user->form();
		}
	}
	   
	   
	if($_GET['do']=='logout'){ 
		include('controller/user/controller_logout.php');
		$user=new c_logout(); 
		$user->logout();
		 
		  }
	  
		  
	?>  