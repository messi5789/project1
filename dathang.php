<?php 
session_start(); 
require('model/database.php');
include('templates/header.php'); 
?>
 
 <?php 
 require('connect.php');
  $o=$_GET["id"];
  $u="Select * from mathang where id Like '$o' ";
  
  $result=mysql_query($u);
  $row=mysql_fetch_assoc($result);
 $tenhang=$row['tenhang'];
 $_SESSION['tenhang']=$tenhang;
$_SESSION['gia']=$row['gia'];
 ?>
 <div class="wrapper">
 <div class="sanpham">
  <img src="images/<?php echo $row['hinhanh'];?>" id="hinhmua" width="650px" height="490px">
  </div >
  <?php 
  if(isset($_SESSION['username1'])){
	if(isset($_POST['submit'])){
    $diachi=addslashes($_POST['diachi']);
    $sophone=addslashes($_POST['sophone']);	
	if(strlen($diachi)>0 && strlen($sophone)>0){
	$user=$_SESSION['username1'];  

	$capnhat="UPDATE thanhvien SET Diachi='$diachi' ,Sophone='$sophone'   WHERE username like '$user' ";
	$xuly=mysql_query($capnhat);
	
	  $tenhang=$row['tenhang'];
      $soluong=$_POST['soluong'];
     date_default_timezone_set('Asia/Ho_Chi_Minh'); 
	 $date=date("Y-m-d H:i:sa");
	  $themdanhsach1="INSERT INTO donhang(username,tenhang,soluong,ngaydat) VALUES('$user',N'$tenhang','$soluong','$date')"; 
	  $result1=mysql_query($themdanhsach1);
	  
	  if($result1 && $xuly){
		  echo"<script>alert(\"bạn đã đặt mua thành công\");</script>";
		  echo "<script> history.back()</script>";
		  exit();
			}
	   }
  else{
		echo"<script>alert(\"bạn phải nhập vào địa chỉ và số phone. \");</script>";
		echo "<script> history.back()</script>";
   }
	}
	
	else
	
	{
		require('connect.php');
	$user1=$_SESSION['username1'];
	$capnhat1="SELECT * FROM thanhvien WHERE username like '$user1'";
	$xuli1=mysql_query($capnhat1);
	$rrow=mysql_fetch_assoc($xuli1);
	  
	 
		
		
	}
	  
	echo"<div class=\"info\">";
	echo"<form id=\"form\" method=\"POST\" onsubmit=\"return check1();\" action=\"dathang.php?id=".$o."\">";
	echo"Số lượng";		
	echo"<select name=\"soluong\" id=\"soluong\" onchange=\"sum()\">/5";
	echo"<option value=1>1</option>";
	echo"<option value=2>2</option>";
	echo"<option value=3>3</option>";
	echo"<option value=4>4</option>";
	echo"<option value=5>5</option>";
	echo"</select>";
	    
	echo"<div class=\"diachi\">";
	echo"Địa chỉ";
    echo"<input type=\"text\" name=\"diachi\"  value=\"".$rrow['Diachi']."\" width=\"300\" height=\"60\">";
	echo"</div>";
	echo"<div class=\"phone\">";
	echo"Số phone";
    echo"<input type=\"text\" name=\"sophone\" value=\"".$rrow['Sophone']."\" width=\"300\" height=\"60\">";
	echo"</div>";
	echo"<div id=\"ketqua\">"; 
	echo"</div>";
	echo"<div class=\"nutmua\">";
	echo"<span><input type=\"submit\"  name=\"submit\" value=\"Đặt mua\"  > </span>";
	echo" <span><input type=\"button\"  name=\"submit1\" value=\"thêm vào giỏ hàng\" onclick=\"themgiohang() \" > </span> ";
	 
	
	 
	echo"</div>";
	echo"</form>";
	echo"</div>";
	
	
  }  
 
  else{
	  echo"<div class=\"note\"><h1>Bạn cần đăng nhập trước khi đặt hàng</h1></div>";
  }
  
  
  
  ?> 
</div>
<?php
 require_once('templates/footer.php');
 ?>
  
 </div> 
</body>
</html>		 
 
 
 
 
 
 
 
 
  
  		