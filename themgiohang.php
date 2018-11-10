<?php
session_start(); 
$soluong=isset($_POST['soluong1'])? $_POST['soluong1']:FALSE;
$gia=isset($_SESSION['gia'])? $_SESSION['gia']:FALSE;
$user=isset($_SESSION['username1'])? $_SESSION['username1']:FALSE;
$tenhang=isset($_SESSION['tenhang'])? $_SESSION['tenhang']:FALSE; 
echo $thanhtien= $gia*$soluong;
 
 require('connect.php');
 $query="insert into themgiohang (taikhoan,tenhang,dongia,soluong,thanhtien) values('$user','$tenhang','$gia','$soluong','$thanhtien')";
 $result=mysql_query($query);  
?>