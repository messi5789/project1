<?php
session_start();
require('connect.php');
 $user=$_SESSION['username1'];
		$query="SElECT * FROM message";
		$result=mysql_query($query);
		$row=mysql_fetch_assoc($result);
		do{
		if($row['user']==$user){
			echo "<div class=\"blue\">";
		echo "<h7>Bạn:".$row['content']."</h7>";
		echo "</div>";
		}
		
		else{
			
			echo "<div class=\"pink\">";
		echo $row['user'].":".$row['content'];
		echo "</div>";
		}
		}while($row=mysql_fetch_assoc($result))
?>