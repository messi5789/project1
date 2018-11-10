<?php
session_start();
?>
<?php
ob_start();
?>
<?php
require("connect.php");
     
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <link rel="stylesheet" type="text/css" href="public/css/style1.css" />
 <link rel="stylesheet" type="text/css" href="public/css/reset.css" />
 <script src="public/js/jquery3.js"></script>
 <script src="public/js/java.js"></script>
  
<title>
website quan ao
</title>
<script language="javascript">

	/*function tinhtong(k){
		var c=document.getElementById(k.id);
		var soluong=c.value;
		var index=parseInt(k.id);
		 
		var thanhtien=document.getElementsByClassName('thanhtien');
		alert(thanhtien[index].innerHTML);
		 
	}*/
	
 
function laysrc(){
	 
	  
		var link=document.getElementsByClassName("khung");
		var link1=link[0].getElementsByTagName("a");
		 
		link1[0].href="dathang.php?id="+linkk.value ;
		  
		 
	 
}
		 function thongbao(k){
				 var how=document.getElementById('hinhto');
				
				 
					how.style.display="inline-block";
					how.src=k.src;
					nut.style.display="inline-block";
					linkk.value=k.id;
					 
					 
				}
				 
				 
				 
				 
	  function anhinh(){
		   var how=document.getElementById('hinhto');
		   how.style.display="none";
		   nut.style.display="none";
		  
		  
		  
	  }

	  
	function check(){
		var authorn=document.getElementById('author').value;
if(authorn.length<3||authorn.length===0 )		
{
  
  
	 var au=document.getElementById("author");
 $.ajax({
type:'POST',
url:'check1.php',
data:{
	 a:au.value,
},
datatype:'text',
success:function(result){
	$("#result1").html(result);
},
 error: function() {
        alert('Có lỗi trong quá trình xử lý');
    }
});
  
 return false;
}
	else{
return true;

	}	
 }


  function thayhinh(){
	
var a=document.getElementById("banner4") ;
  
 
	  var i=0;
	  var x=1000;
	  var y=2000;
	  var z=3000;
	  var h=4000;
	  while(i<299){
		  
   
	   setTimeout(function(){a.src= "http://localhost/webquanao/images/banner3.jpg"},x);
   
	setTimeout(function(){a.src="http://localhost/webquanao/images/banner2.jpg"},y);
  
	 setTimeout(function(){a.src= "http://localhost/webquanao/images/banner1.jpg"},z);
	 setTimeout(function(){a.src= "http://localhost/webquanao/images/banner4.jpg"},h);
	 i=i+1;
	 x+=4000;
	  y+=4000;
	  z+=4000;
	  h+=4000;
	  
	  
	  }
	  
	   
  }
  function thayhinh2(){
	
 var b=document.getElementById("hotgirl4") ;
  
 
	  var j=0;
	  var x1=2000;
	  var y1=4000;
	  var z1=6000;
	  var h1=8000;
	  while(j<299){
		  
   
	   setTimeout(function(){b.src= "http://localhost/webquanaoss/hotgirl3.jpg"},x1);
   
	setTimeout(function(){b.src="http://localhost/webquanao/hotgirl2.jpg"},y1);
  
	 setTimeout(function(){b.src= "http://localhost/webquanao/hotgirl1.jpg"},z1);
	 setTimeout(function(){b.src= "http://localhost/webquanao/hotgirl4.jpg"},h1);
	 j=j+1;
	 x1+=8000;
	  y1+=8000;
	  z1+=8000;
	  h1+=8000;
	  
	  }
  
    } 
	 
	$(document).on("keypress", "form", function(event) { 
	 
    return event.keyCode != 13;
	 
});

 
$(document).ready(function(){
 $('#text').keypress(function () {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
         
         sendmessage();
		 $('#text').focus();
    }
	});
	});
	function sendmessage(){
		
var mtext=document.getElementById('text').value;
$.ajax({
		url:'message.php',
		type:'post',
		 
		data:{
			mtext:mtext,
				
		},
		success:function(){
			 $('#text').val('');
			 $('#text').click();
						 
		}





	});	
	} 	
	
	 
	$(document).ready(function(){
    $('#text').click(function(){
         $('#text').focus();
});
}); 
	
	
	
	$(document).ready(function(){
    $('#button').click(function(){
         $('#text').focus();
});
}); 
	
	$(document).ready(function(){
    $('#text').focus(function(){
        setTimeout(function() {$('.contentt').scrollTop($('.contentt')[0].scrollHeight); }, 300);
}); 
}); 
	 
 
  
	 	   
 $.ajaxSetup({cache:false});
   
 setInterval(function() {$('.contentt').load('showmessage.php');}, 150);
 
 
</script>
 
</head>
<body onload="thayhinh()">  
	<div class="tieude">
	<p>
	Chào mừng bạn đến với website  
	</p>
	</div>
	<div class="wrapper"> 
	<div class="go-back">
	 <a href="index.php"><img src="images/trangchu.jpg" width="110" height="40"></a> 
	</div>

 <?php

  
 $user=$_SESSION['username1'];
 $truyvan="Select user_id from thanhvien where username like '$user'";
 $ketqua=mysql_query($truyvan);
 $roww=mysql_fetch_assoc($ketqua);
 if(isset($_SESSION['username1']))
 {
	 
	 echo"<div class=\"log\"><p1>xin chao  <a href= \"member.php?idm=".$_SESSION['id']."\">".$_SESSION['username1']."</a></p1></div>"  ;
	 echo"<div class=\"dangxuat\"><a href=\"logout.php\"><img src=\"images\dangxuat.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a></div>";
	 
  
 ?>
  
  <div class="chat"><a href="#" onclick="return false">Chat với <?Php if(($_SESSION['username1'])!="admin"){echo " chủ shop";}else{echo " khách hàng";}?></a></div>
 <?php
 }
else{	 
echo "<div class=\"user1\">" ;
echo"<a href=\"dangki.php\"><img src=\"dangki.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a>";
echo"<a href=\"dangnhap.php\"><img src=\"dangnhap.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a>";
echo"</div>";
 }
   
  
 ?>
 <?php
	require('connect.php');
	$query="select * from thanhvien where username='$user'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	
if($_GET['idm']==$_SESSION['id'])
{
	 
	 if(isset($_POST['submit']))
	 {
	$sophone=addslashes(($_POST['sophone']));
	$diachi=addslashes(($_POST['diachi']));
	
	$query3="update thanhvien set Sophone='$sophone' , Diachi='$diachi' where username like '$user'" ;
	$result3=mysql_query($query3); 
	
	$query="select * from thanhvien where username='$user'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
	 
	 }  
	 $query1="SELECT  mathang.tenhang, mathang.gia as g, donhang.tenhang as t,  SUM(donhang.soluong) as u  FROM donhang,mathang WHERE donhang.username LIKE '$user'and mathang.tenhang=donhang.tenhang GROUP BY donhang.tenhang";
	 $result1=mysql_query($query1);
	 $row1=mysql_fetch_assoc($result1);
	  $_SESSION['address']="member.php?idm=".$_GET['idm'];
	  
	 echo"<div class=\"information\">";
	echo"<form method=\"post\" action=\"member.php?idm=".$_GET['idm']."\">"; 
	echo"<div class=\"sophone\"> <span>số phone: <span><input type=\"text\" name=\"sophone\" value=\"".stripslashes($row['Sophone'])."\"></div>";
	echo"<div class=\"diachi\"><span>Địa chỉ <span> <input type=\"text\" name=\"diachi\" value=\"".stripslashes($row['Diachi'])."\"></div>";
	echo" <input type=\"submit\" name=\"submit\" value=\"cập nhật\">";
	echo" </form>";
	echo" </div>";
	
	echo"<div class=\"your-cart\">";
	echo " <h3>	ĐƠN HÀNG CỦA BẠN</h3> ";
	do{
	 
	$thanhtien1=$row1['u']*$row1['g']; 
	
	$thanhtien2=number_format($thanhtien1); 
	   
	echo"Bạn đã đặt mua ".$row1['u']." ".$row1['t']." với tổng số tiền"." ".$thanhtien2." VND</br>";
	
	
	
}while($row1=mysql_fetch_assoc($result1));
	 
	 
	 require('connect.php');
	  $i=0;
	  
	 $query2="SELECT  id,taikhoan, tenhang, dongia,SUM(soluong)as sl,SUM(thanhtien)as tt FROM themgiohang where taikhoan like '$user' group by  tenhang  ";
	 $result2=mysql_query($query2);
	 $row2=mysql_fetch_assoc($result2);
	 $numrows2=mysql_num_rows($result2);
	 ?> 
	 <?php
	 
	 echo"<div class=\"table2\">";
	 echo " <h3>GIỎ HÀNG CỦA BẠN</h3> "; 
	 
	 if($numrows2==0){
		 echo "<p>bạn chưa có hàng nào trong giỏ</p>";
		  echo"</div>";
	 }
	 else
	 { 
	 echo"<table   cellspacing=\"8\" cellpadding=\"8\" >";
	 echo"<tr>";
	 echo"<td>";
	 echo" ";
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo"tên hàng";
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo"đơn giá";
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo"số lượng";
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo"thành tiền";
	 echo"</td>";
	 echo"</tr>";
	 
	 echo"<form method=\"POST\" action=\"datmua.php\">";
	 $j=0;
	 $h=0;
	 $_SESSION['dongia']=array();
	  $_SESSION['tenhang']=array();
	 do{ 
		
	  $_SESSION['dongia'][$j] =$row2['dongia'];
	   $_SESSION['tenhang'][$h] =$row2['tenhang'];  
	 echo"<tr>";
	 echo"<td>";
	 echo "<input type=\"checkbox\" name=\"chonmua[]\" value=\"".$row2['tenhang']."\">";
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo $row2['tenhang'];
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo $row2['dongia'];
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo "<input type=\"text\" id=\"".$i."\"name=\"soluong[]\" size=\"2\" value=\"".$row2['sl']."\" onkeyup=\"tinhtong(this)\">";
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo"<span class=\"thanhtien\">".number_format($row2['tt']).' '.'VND'."</span>";
	 echo"</td>";
	 echo"<td width=\"120\">";
	 echo "<a href=\"xoagiohang.php?tenhang=".$row2['tenhang']."\">xóa</a>";
	 echo"</td>";
	 echo"</tr>"; 
	  $j++;
	  $i++;
	  $h++; 
	 }while($row2=mysql_fetch_assoc($result2));  
	 echo"</table>";
	 echo $_SESSION['tenhang'][3];
	  echo"<input type=\"submit\" name=\"submit\" value=\"đặt hàng\">";
	 echo" </form>";
	  echo"</div>";  
	 } 
	  echo"</div>"; 
  } 
  else
  {
	$idm=$_GET['idm'] ;
	$query="select * from thanhvien where user_id='$idm'";
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);  
	echo"<div class=\"information\">";
	echo"thông tin tài khoản ".$row['username'].":";
	echo"<div class=\"sophone\">số phone:".$row['Sophone']."</div>";
	echo"<div class=\"diachi\">Địa chỉ:".$row['Diachi']."</div>";
	echo" </div>"; 
	 
  }
  
 ?>  
 
 
  <div class="chat-content">
  <div class="chat1"><a href="#" onclick="return false">Chat với <?Php if(($_SESSION['token']['level'])==0){echo " chủ shop";}else{echo " khách hàng";}?></a></div>
  <div class="contentt">
  </div>
  <form>
  <div class="chat-text"><input type="text"  id="text" size="50"></div>
  <input type="button" name="button" value="Gửi" id="button" onclick="sendmessage()">
  <div class="close-pic"><img src="images/close.png" width="30" height="30"></div>
  </form> 
  </div> 
  
  </div>
  
     
   
  
   <?php
 require_once('templates/footer.php');
 ?>
    
	 
	  </body>
	 </html>
 



 
 
 
 
