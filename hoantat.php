  <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="style1.css" />
 <link rel="stylesheet" href="css/reset.css">
 <script src="jquery3.js"></script>
 <script src="java.js"></script>
</head>
<body>
<div class="tieude"> 
 <p>
Chào mừng bạn đến với website 
 
</p>
</div>
 <div class="user">
<a href="dangki.php"><img src="dangki.jpg" alt="khong the hien thi" width="90" height="38"></a>
<a href="dangnhap.php"><img src="dangnhap.jpg" alt="khong the hien thi" width="90" height="38"></a>
</div>
 <?php
  
  require_once("connect.php");
		 
  $message= NULL;
   
  if(strlen($_POST["user"])>0){
	 $u=addslashes($_POST['user']);
	 $query1="Select * from thanhvien where username like '$u'";
	 $result1=mysql_query($query1);
	 $rows=mysql_num_rows($result1);
	 if($rows==1){
		 $user=FALSE;
		  $message.='<i>tên đăng nhập đã có người sử dụng</i><br>' ;
 }
  }
 else{
	 $user=FALSE;
	 $message='<i>bạn chưa nhập tên</i> <br>';
 }
  
 
 if(strlen($_POST["email1"])>0)
 {
	 $e=addslashes($_POST['email1']);
 }
 
 else{
	 $email1=FALSE;
	 $message.='<i>bạn chưa nhập email</i><br>' ;
 }
  
 
 
 if(($_POST["email1"])==($_POST["email2"]))
 {
	 $e2=addslashes($_POST['email2']);
 }
 
 
 else{
	$email2=FALSE;
	$message.= "<i>email không khớp</i><br>" ;
 }
 
 
 
 if(strlen($_POST["password1"])>0)
	 
 {
	 $p=addslashes($_POST['password1']);
 }
 
 else{
	 $password1=FALSE;
	 $message.='<i>bạn chưa nhập mật khẩu</i><br>' ;
 }
 
 
 if(($_POST["password1"])==($_POST["password2"]))
	 
 {
	 $p2=addslashes($_POST['password2']);
 }
 
 else
 {
	$password2=FALSE;
	$message.= "<i>mật khẩu không khớp</i><br>" ;
 
 }
 
   if($user && $email1 && $email2 && $password1  && $password2)
  {
	   require_once("connect.php");
	     
	   $query="INSERT INTO thanhvien(username,password, email) VALUES ('$u', '$p' ,'$e')";
		   
	  $result=mysql_query($query);
	  if($result){
  echo "<i>bạn đã được đăng kí</i>";
 exit();
 
 }
 else{
	 echo"có lỗi, hãy thử lại";
  }
  }
 else{
	 if(isset($message))
 
 {
  
 
  
 
  echo  $message;
 
 
 }
 
 }
 
 
 
 
 
   
 
 
 ?>


<form action="hoantat.php" method="post">
 
 <div class="form">
  <div class="tieu">
   nhập vào thông tin của bạn 
  </div>
   
  <div class="info">
<span> Tên đăng nhập </span>     <input type="text" name="user" value=""  > 
<a><p>Mật khẩu 	     <input type="password" name="password1" value=""  ></p></a> 
<a><p>Xác nhận mật khẩu <input type="password" name="password2" value=""></p> </a>
<a><p>Email             <input type="email" name="email1" value=""></p></a> 
<a><p>Xác nhận email    <input type="email" name="email2" value=""></p></a> 
<input type="submit" value="hoàn tất">
   </div>
 </div>

</form>
</body>
</html>