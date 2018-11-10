<?php 
session_start();
$user=$_SESSION['username1']; 
$soluong=array();
$soluong=$_POST['soluong'];
require('connect.php');
if(isset($_POST['submit'])){
	$mua=array();
	$query5="select id,taikhoan,tenhang,dongia,Sum(soluong) as sl,sum(thanhtien) as tt from themgiohang where taikhoan like '$user' group by tenhang";
	$result5=mysql_query($query5);
	$row5=mysql_fetch_assoc($result5);
	do{
	$mua[]=array(
	"tenhang"=>$row5['tenhang'],
	"dongia"=>$row5['dongia'], 
	"soluong"=>$row5['sl'] , 
	"thanhtien"=>$row5['tt'] 
	);
	}while($row5=mysql_fetch_assoc($result5));
	$giohang=array(); 
	if($_POST['chonmua'])
	{
foreach($_POST['chonmua'] as $key=>$val){
$query6="select id,taikhoan,tenhang,dongia,Sum(soluong) as sl,sum(thanhtien) as tt from themgiohang where taikhoan like '$user' and tenhang like '$val' group by tenhang";
$result6=mysql_query($query6);
$row6=mysql_fetch_assoc($result6); 
do{
$giohang[]=array(
	"tenhang"=>$row6['tenhang'],
	"dongia"=>$row6['dongia'], 
	 
	"thanhtien"=>$row6['tt'] 
	);

}while($row6=mysql_fetch_assoc($result6));

}
	}
	else{
		
	echo "<script>alert('bạn cần chọn hàng cần đặt')</script>";	
	echo "<script> history.back()</script>";
	exit();
	
		
	}
$sl=array();
$sl=$_POST['soluong'];
 foreach($mua as $key=>$value)
 {
	 for ($i=0;$i<15;$i++){
		 
		 if($value['tenhang']==$giohang[$i]['tenhang']){
			 
			 $giohang[$i]['soluong']=$sl[$key];
			  
		 }
		 
		 
	 }
	 
	 
 }
 
  
 
 
 
}


?>