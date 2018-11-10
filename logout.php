<?php
ob_start();
  session_start();
ob_clean();
require("connect.php");
 unset($_SESSION['username1']); 
		 header("location:index.php");
	 exit();	  
 
 
	 mysql_close();	 
  ob_end_flush();
?>