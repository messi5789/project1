 <?PHP
echo"<div class=\"info\">";
echo"<form id=\"form\" method=\"POST\" onsubmit=\"return check();\" action=\"dathang.php?id=".$o."\">";
echo"Số lượng";	
echo"<input type=\"text\" name=\"soluong\" id=\"soluong\" onkeyup=\"sum()\" >";
	    
echo"<div class=\"diachi\">";
echo"Địa chỉ";
echo"<input type=\"text\" name=\"diachi\"  value=\"".$rrow['Diachi']."\" width=\"300\" height=\"60\">";
echo"</div>";
echo"<div class=\"phone\">";
echo"Số phone";
echo"<input type=\"text\" name=\"sophone\" value=\"".$rrow['Sophone']."\" width=\"300\" height=\"60\">";
echo"</div>";
	
echo"<div class=\"nutmua\">";
echo"<span><input type=\"submit\"  name=\"submit\" value=\"ok\"  > </span>";
echo"</div>";
echo"</form>";
echo"<div id=\"ketqua\">"; 
echo"</div>";
 
   
 ?>