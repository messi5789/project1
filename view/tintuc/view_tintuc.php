<?php
 
echo "<div class=\"alltintuc\">";
 ?>
 <div class="news-title">
 <h1>TIN TỨC,KHUYẾN MÃI</h1>
 </div>
 <?php
  do
  { 
		echo "<div class=\"tintuc\">"; 
		echo "<h3>".$rows_t['tieude']."</h3> </br>"  ;
		echo "<p>".$rows_t['mota']."</p></br>";
		echo "<a href=\"tintuc.php?id=".$rows_t['id']."\">xem tiếp</a>";
		echo"</div>";
  }while($rows_t=$tintuc->show_tintuc());
  echo "<div class=\"clear\"></div>";
  echo"</div>";
 
 
?>


