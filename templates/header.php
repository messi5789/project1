<?php
session_start();
?>
<?php
ob_start();
 
?>
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="google-site-verification" content="FG0aX0zFX7yTolp_LqvzfOnL9-SvrngiFV8bO8mJDjc" />
<meta name="verify-v1" content="cDgKo1unwB4xAyCl8NSNFlL2/PKo1K1Tm9PCwWm14dI="/>
<meta name="y_key" content="79fb8cbdb66d1468"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="generator" content="vBulletin 3.8.0"/>
<meta name="keywords" content=" quần áo,sell,bán hàng" />
<link rel="stylesheet" type="text/css" href="public/css/style1.css" />
<link rel="stylesheet" type="text/css" href="public/css/reset.css" />
<script src="public/js/jquery3.js"></script>
<script src="public/js/java.js"></script>
<title>
website quan ao
</title>
<script language="javascript">
 
  
function laysrc(){
	 	var link=document.getElementsByClassName("khung");
		var link1=link[0].getElementsByTagName("a");
		link1[0].href="dathang.php?id="+linkk.value ;
		  
		 
	 
}
		 function thongbao(k){
				 var how=document.getElementById('hinhto');
					var khung=document.getElementsByClassName('khung');
					khung[0].style.display="inline-block";
				 
					how.style.display="inline-block";
					how.src=k.src;
					nut.style.display="inline-block";
					exit.style.display="inline-block";
					linkk.value=k.id;
					 
					 
				}
				 
				 
				 
				 
	  function anhinh(){
		   var khung=document.getElementsByClassName('khung');
		   khung[0].style.display="none";
	  }
	  
	  function check1(){
		var soluong1=document.getElementById('soluong').value;
		if(soluong1<=5){
			return true;
		}
		
		else{
			return false;
		}
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
datatype:'html',
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
		  
   
	   setTimeout(function(){b.src= "images/hotgirl3.jpg"},x1);
   
	setTimeout(function(){b.src="images/hotgirl2.jpg"},y1);
  
	 setTimeout(function(){b.src= "images/hotgirl1.jpg"},z1);
	 setTimeout(function(){b.src= "images/hotgirl4.jpg"},h1);
	 j=j+1;
	 x1+=8000;
	  y1+=8000;
	  z1+=8000;
	  h1+=8000;
	  
	  }
  
    } 
	function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
} 
	
	 

	var sget=GetURLParameter('page');
	var cget=GetURLParameter('cpage');
	 
	 
	
	
	function changecolor(){ 
		var allpage=document.getElementsByClassName("pg");
		var pagenumber=allpage[0].getElementsByTagName("span");
		for(var i=0;i<=20;i++){
			if(pagenumber[i].innerHTML===sget){
				var p=pagenumber[i];
				break;
				
			} 
			else if(sget==null) {
				 var p=pagenumber[0];
				break;
			}
		}
			
			p.style.color="red";
		
	}
	function changecolor1(){ 
		var allpage=document.getElementsByClassName("pg");
		var pagenumber=allpage[1].getElementsByTagName("span");
		for(var i=0;i<=20;i++){
			if(pagenumber[i].innerHTML===cget){
				var p=pagenumber[i];
				break;
				
			} 
			else if(cget==null) {
				 var p=pagenumber[0];
				break;
			}
		}
			
			p.style.color="red";
		
	}
  </script>
 
</head>


<body onload="thayhinh(),thayhinh2() ,changecolor(),changecolor1()"  > 
<div class="main-banner">
</div> 
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
 
 if( isset($_SESSION['username1'])or isset($_GET['do'])){
 
  include('controller/user/controller_user.php' );

 }
  else{


echo "<div class=\"user1\">" ;
echo"<a href=\"index.php?do=signup\"><img src=\"images/dangki.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a>";
echo"<a href=\"index.php?do=signin\"><img src=\"images/dangnhap.jpg\" alt=\"khong the hien thi\" width=\"90\" height=\"38\"></a>";
echo"</div>";

  }  

 ?>
 </div>
 