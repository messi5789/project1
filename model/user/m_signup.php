<?php
   class m_signup extends database{
	    
		public function signup(){
		  if(isset($_POST['submit'])){
			  $this->action();
		  }
		}  
		
		
		 public function action()
		 {
			   $this->connect();
				$message= NULL;
   
  if(strlen($_POST["user"])>0){
	 $u=addslashes($_POST['user']);
	 $q="Select * from thanhvien where username like '$u'";
	
	 $rows=$this->num_rows($q);
	 
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
 
   if($u  && $e  && $e2 && $p && $p2)
  {
	 $query="INSERT INTO thanhvien(username,password, email) VALUES ('$u', '$p' ,'$e')";
	 $result=$this->do_query($query);
	 
	  if($result){
		  $_SESSION['username1']=$u;
		  $b="select  user_id ,username, password   from thanhvien where username='$u' ";
		  $row=$this->fetch_assoc($b);  
		  $_SESSION['id']=$row['user_id'];
		  
		  require('connect.php');
		 $c="update thanhvien set status =1 where username='$u'";
		 $d=mysql_query($c);
  echo "<i>bạn đã được đăng kí</i>";
  header("location:index.php");
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
   
   }
   
   }
    
 ?>  