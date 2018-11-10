<?php
session_start();
require('connect.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$datetype = '';
$datetype = date("Y-m-d H:i:sa");
$mtext = isset($_POST['mtext'])? $_POST['mtext'] : false;
$user=$_SESSION['username1'];
if(strlen($mtext)>0){
	$query="INSERT INTO message (content,user,datesent)values ('$mtext','$user','$datetype')";
	$result=mysql_query($query);
}
 



?>