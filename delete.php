<?php
session_start();
ob_start();
if($_GET['act']){
	require('connect.php');
		 $user1=$_GET['user'];
		 $tenhang1=$_GET['tenhang'];
		 $query6="Delete from donhang where username='$user1' and tenhang='$tenhang1'";
		 $result6= mysql_query($query6);
		 if($result6){
			 header('location:member.php?idm='.$_SESSION['id']);
		 		 
					 } 
					}
	ob_end_flush();
?>