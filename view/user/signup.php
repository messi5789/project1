<?php
echo"<div class=\"user1\">";
echo"<a href=\"index.php?do=signup\"><img src=\"images/dangki.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a>";
echo"<a href=\"index.php?do=signin\"><img src=\"images/dangnhap.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a>";
echo"</div>"
?>
 <form action="" method="POST">
 <div class="form">
  <div class="tieu">
   nhập vào thông tin của bạn 
  </div>
   
  <div class="info">
<span> Tên đăng nhập </span>     <input type="text" name="user"> 
<a><p>Mật khẩu 	     <input type="password" name="password1"   ></p></a> 
<a><p>Xác nhận mật khẩu <input type="password" name="password2"  ></p> </a>
<a><p>Email             <input type="email" name="email1"  ></p></a> 
<a><p>Xác nhận email    <input type="email" name="email2"  ></p></a> 
<input type="submit" name="submit" value="hoàn tất">
   </div>
 </div>

</form>