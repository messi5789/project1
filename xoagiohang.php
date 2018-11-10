<?php
session_start();
ob_start();
if($_GET['tenhang']){
	require('connect.php');
		 $user=$_SESSION['username1'];
		 $tenhang=$_GET['tenhang'];
		 $query="Delete from themgiohang where taikhoan='$user' and tenhang='$tenhang'";
		 $result= mysql_query($query);
		 if($result){
			 header('location:member.php?idm='.$_SESSION['id']);
		 		 
					 } 
					}
	ob_end_flush();
?>