<?php
  class m_buy extends database{
	  
	  public function set_info{
		  
		  if(strlen($soluong)>0&& strlen($diachi)>0&&strlen($sophone) >0){
	    $user=$_SESSION['username1'];   
	    date_default_timezone_set('Asia/Ho_Chi_Minh');
	    $date= '';
	    $date=date("Y-m-d H:i:sa");
	    $capnhat="UPDATE thanhvien SET Diachi='$diachi' ,Sophone='$sophone'   WHERE username like '$user' ";
	    $this->do_query($capnhat); 
   
		  
		  
	  }
	  
	  public function show_image(){
		$o=$_GET["id"];
		$query="Select * from mathang where id Like '$o' ";
		$row=$this->fetch_assoc($query);
		$_SESSION['gia']=$row['gia'];


	  }
	   
	   public function add_product(){
		 $tenhang=$row['tenhang'];	  
	  $themdanhsach1="INSERT INTO donhang(username,tenhang,soluong,ngaydat) VALUES('$user',N'$tenhang','$soluong','$date')"; 
	  $result1=mysql_query($themdanhsach1);
	  
	  if($result1 && $xuly){
		  echo"<script>alert(\"bạn đã đặt mua thành công\");</script>";
  }


	  }
	  
	   public function show_info(){
		 $user=$_SESSION['username1'];
	  $query="SELECT * FROM thanhvien WHERE username like '$user'";
		 $row=$this->fetch_assoc($query);
  }

 
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
  }
	?>  