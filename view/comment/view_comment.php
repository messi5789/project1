 <?php 
		echo"<div class=\"allcomment\">";	
 do { 
		$i=1;
		
		echo "<div class=\"comment $i\">";
		echo "<h1> người gửi:"." ".$rows['author']."</h1>"  ;
		echo "<h2>".$rows['content']."</h2>"  ;
		echo"<h1> " .$rows['admin']."</h1>"  ; 
		echo"<h2>".$rows['response']."</h2>"  ; 
		echo"</div>";
	  $i++;
	  
  } while($rows=$m_comment->show());
		echo"</div>";
 
 
 
 
 
 ?>