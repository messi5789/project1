<?php
session_start();
?>
<?php
ob_start();
?>
 <?php
    include('model/database.php'); 
	include('templates/header.php');
?>
 <div class="wrapper"> 
<?php	
	require('connect.php');
    if(isset($_GET['id'])){  
	  $ab=$_GET['id'];
	  
	  $ac=$ab+1;
	  
	  $truyvan1="select * from tintuc where id='$ab'";
	  
	  $ketqua1=mysql_query($truyvan1);
	  $get_row=mysql_fetch_assoc($ketqua1);
	  
	  
	  
	  $truyvan2="select * from tintuc where id='$ac'";
		$ketqua2=mysql_query($truyvan2);
		$get_row2=mysql_fetch_assoc($ketqua2);
		
?>	 
	
	 <marquee><?php echo $get_row2['tieude'];?></marquee>
	 
		<div class="news "> 
		<div class="show-news">  
	  
<?php	  
	  
	  echo  "<h1>".stripslashes($get_row['tieude'])."</h1>";  
	  echo "đăng bởi<span style=\"color:blue;\">"." ".stripslashes($get_row['nguoidang'])."</span> vào lúc <span style=\"color: red;\">".$get_row['ngaydang']."</span>";
	   
	  echo "<p>".stripslashes($get_row['noidung'])."</p>";
	  if($get_row['hinhanh1']!=NULL){
	  echo "<img src=\"images/images_news/".$get_row['hinhanh1']."\" id=\"".$get_row['id']."\" width=\"545\" height=\"385\"  ></br>" ;
	  }
	  echo "<p>".$get_row['noidung2']."</p>";
	   if($get_row['hinhanh2']!=NULL){
	  echo "<img src=\"images/images_news/".$get_row['hinhanh2']."\" id=\"".$get_row['id']."\" width=\"545\" height=\"385\"  ></br>" ;
	   }
	  echo "<p>".$get_row['noidung3']."</p>";
	   if($get_row['hinhanh3']!=NULL){  
	  echo "<img src=\"images/images_news/".$get_row['hinhanh3']."\" id=\"".$get_row['id']."\" width=\"545\" height=\"385\"  ></br>" ;
	   }
?>	  
	  </div> 
<?php 
	$query_y="select * from tintuc where id not like $ab Limit 0,10";
	$result1=mysql_query($query_y);
	$rows1=mysql_fetch_assoc($result1); 
	?>
<div class="sub-news"> 
  <h3>Các bài viết cùng chuyên mục</h3> 
<?php
do { 
	echo  "<div class=\"title1\"><a href=\"tintuc.php?id=".$rows1['id']."\">".stripslashes($rows1['tieude'])."</a></div>";

}while($rows1=mysql_fetch_assoc($result1));  
	echo "</div>"; 
echo "<div class=\"clear\">"; 
echo "</div>";
$query2="select * from tintuc where id not like $ab Limit 0,6";
$result2=mysql_query($query2);

echo "<div class=\"tinlienquan\">";
while($rows2=mysql_fetch_assoc($result2)) {
echo"<div class=\"baiviet\">";
echo"<img src=\"images/images_news/".$rows2['hinhanh1']."\" width=\"110\" height=\"80\">";
echo"<p>";
echo " <a href=\"tintuc.php?id=".$rows2['id']."\">".stripslashes($rows2['tieude'])."</a> ";
echo"</p>";
echo "<div class=\"clear\">"; 
echo "</div>";
echo "</div>"; 
}
echo "</div>";




  }   
  
  else{  
  
	  $query6="select * from tintuc limit 0,5";
	  $resullt=mysql_query($query6);
	  ; 
	    echo " <div class=\"news-title1\"> ";
	 while($rowws=mysql_fetch_assoc($resullt)){
		echo"<div class=\"title1\">";
		echo"<a href=\"tintuc.php?id=".$rowws['id']."\">".stripslashes($rowws['tieude'])."</a>";
		 
		echo"</div>";
		 
		 
	 } 
	  
	  echo " </div>"; 
	  ?>
	  <input type="button" value="xem thêm" id="xem" onclick="xemthem()">
<?php	
  
  } 
?>	  
	
	  <div class="clear"></div>
	  </div>
	</div>
 	
<?php

include('templates/footer.php');
?>	  
   
 
 </body> 
 </html>
 