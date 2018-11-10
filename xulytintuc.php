<?php
	require('connect.php');
	$start=$_POST['sotrang'];
	$mang=array();
	$query="select * from tintuc limit $start,5";
	$result=mysql_query($query); 
	while($row=mysql_fetch_assoc($result)) { 
	$mang[]=array('id'=>$row['id'],
	'tieude'=>$row['tieude']);
	 
	}
	echo json_encode($mang);
	die;
?>