<?php
session_start();
ob_start();
echo"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>";
include('luugiohang.php');
require('connect.php');

 foreach($giohang as $value){
	 
	$tenhang=$value['tenhang'];
	$dongia=$value['dongia'];
	$soluong=$value['soluong'];
	$thanhtien=$value['thanhtien'];
	$query="insert into donhang(username,tenhang,soluong) values('$user','$tenhang','$soluong')";
	$result=mysql_query($query);
	$query2="delete from themgiohang where taikhoan like '$user' and tenhang like '$tenhang'";
	$result2=mysql_query($query2);
	
 }
if($result){ 
	echo "Bạn đã đặt mua thành công";
	echo "<script>history.back()</script>";
	exit();
	
	 
}
 
?>