<?php
session_start();
require('connect.php');

$soluong=isset($_POST['soluong'])? $_POST['soluong']:FALSE;
$gia=isset($_SESSION['gia'])? $_SESSION['gia']:FALSE;
$tong=number_format($soluong*$gia); 
  echo $tong;
 








?>