<?php
session_start(); 
require('connect.php');
 
$user=isset($_SESSION['username1'])? $_SESSION['username1']:FALSE;
 
$index= ($_POST['index']) ;//mang gia
 
$soluong=isset($_POST['soluong'])? ($_POST['soluong']):FALSE; //mang so luong-su kien onchange
 $dongia=$_SESSION['dongia'];
 $gia=$dongia[$index]; 
	 
$thanhtien= number_format($dongia[$index]*$soluong).' '.'VND';

  
  $tenhang=$_SESSION['tenhang']; 
  $ten=$tenhang[$index];
	$query6="select id,taikhoan,tenhang,dongia,Sum(soluong) as sl,sum(thanhtien) as tt from themgiohang where taikhoan like '$user' and tenhang like '$ten' group by tenhang";
	$result6=mysql_query($query6);
	$row6=mysql_fetch_assoc($result6); 
	 
		$soluong1=$soluong-$row6['sl'];
		$thanhtien1= $gia*$soluong1;
	 
$query="insert into themgiohang (taikhoan,tenhang,dongia,soluong,thanhtien) values('$user','$ten','$gia','$soluong1','$thanhtien1')";
$result=mysql_query($query);
 
 echo $thanhtien;
  
 
 
  
?>