 <?PHP
echo"<div class=\"title\">";
echo"<div class=\"log\"><p1>xin chào<a>"." ".$_SESSION['username1']."</a></p1></div>"  ;
echo"<div class=\"function\">";
echo"<div class=\"member\"><a href= \"member.php?idm=".$_SESSION['id']."\">GIỎ HÀNG </a></div>";
echo"<div class=\"dangxuat\"><a href=\"index.php?do=logout\"><img src=\"images/dangxuat.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a></div>";
echo"</div>";
echo"<div class=\"clear\"></div>";
echo"</div>";

 ?>
 