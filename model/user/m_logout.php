<?php
  
   class m_logout extends database{
	    
		public function logout(){  
			$e=$_SESSION['username1'];
			require('connect.php');
			$c="update thanhvien set status =0 where username='$e'";
			$d=mysql_query($c);	
			unset($_SESSION['username1']);				
			header("location:index.php");
			exit(); 
			mysql_close();	  
		}  
		   
	  
		   
   }
	 
	?>  