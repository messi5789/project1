 <?PHP
 
 echo "<div class=\"allpic \">";
 
  do
  { 
		echo "<div class=\"pic \">"; 
		echo "<h7>".$rows['tenhang']."</h7> </br>"  ;
		echo "<img src=\"images/".$rows['hinhanh']."\" id=\"".$rows['id']."\" width=\"155\" height=\"115\" onclick=\"thongbao(this)\"></br>"  ;
		echo "<h8>".number_format($rows['gia'])."VND </h8></br>";
		echo"</div>";
		 
  }while($rows=$product->show_default());
  
  echo"</div>";
  
   
  
   
   
   
 ?>