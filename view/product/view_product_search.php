 <?PHP
  echo "<div class=\"allpic \">";
 do {
		$i=1;
	 
		
		echo "<div class=\"pic \">";
		
		echo "<h5>".$rows["tenhang"]."</h5> </br>"  ;
		echo "<img src=\"images/".$rows["hinhanh"]."\" id=\"".$rows["id"]."\"width=\"155\" height=\"115\" onclick=\"thongbao(this)\"></br>"  ;
		echo "<h6>".number_format($rows['gia']). "VND</h6></br>"  ;
		 
	    echo"</div>";
	  $i++;
		
	 
	}while($rows=$product->search());
   echo"</div>";
 ?>