<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="style1.css" />
 <script src="jquery3.js"></script>
 <script src="java.js"></script>
<title>
up hinh
</title>
<body>
<?php
require('connect.php');
if(isset ($_POST['submit']))
{
	
	$a="insert into mathang (tenhang,hinhanh,gia) values('$tieude','$tenhinh','$giatien')";
	
	$rs=mysql_query($a);
	if($rs){
		echo" ban up hinh thanh cong";
	}
	else{
		echo"co loi,hay thu lai";
	}
	
	
	
}
 


echo "<form method=\"post\" action=\"uphinh.php\">";
echo "moi ban nhap tieu de:<input type=\"text\"  name=\"tieude\">";
echo "mời bạn nhập tên file kèm định dạng: <input type=\"text\"  name=\"tenhinh\">";
echo " mời bạn nhập  gia: <input type=\"text\"  name=\"giatien\">";

echo "<input type=\"submit\" name=\"submit\" value=\"ok\">";

echo "</form>";



 echo "</body>";
 
 
 ?>
 </html>
 