<?php
  
   class m_signin extends database{
	    
	  public function signin(){
		  if(isset($_POST['submit'])){
			  $this->action();
		  }
		}  
		  public function action(){
			   $this->connect();
			   $message=NULL;
	if(strlen($_POST['user'])>0)
		
{	
	$u=addslashes($_POST['user']);
	
}

else
{
	$message.="bạn chưa nhập tên đăg nhập<br>";
}
	if(strlen($_POST['password1'])>0)

{
	 $p=addslashes($_POST['password1']);
}
 else{	 
 $message.= "bạn chưa nhập mật khẩu<br>";
  }
  
  if($p && $u)
 {	
$b="select  user_id ,username, password   from thanhvien where username='$u' ";

$rows=$this->num_rows($b);

 if ($rows==0) {
        echo "tên đăng nhập  không tòn tại ";
        exit;  
 }
 else{
 $row=$this->fetch_assoc($b);   
if($p==$row['password']){	 
		 $_SESSION['username1']=stripslashes($row['username']);
		 $e=$_SESSION['username1'];
		 $_SESSION['id']=$row['user_id'];
		 require('connect.php');
		 $c="update thanhvien set status =1 where username='$e'";
		 $d=mysql_query($c);
		  
		 header("location:index.php");
	 exit();	  
}
else{
	echo'tên đăng nhập hoặc password chưa chính xác';
}   
 }
 } 
 else{
	 if (isset($message))
	 {
		 echo $message;
	 }
	 
 }	 
	 
   
	  }
		
	  
		   
   }
	 
	?>  