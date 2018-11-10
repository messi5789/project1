$(document).ready(function() {
	$('.pic img').hover( function(){
		$(this).toggleClass("zoom");
	});
});
$(document).ready(function() {
	$('.exit').click( function(){
		$('.khung').addClass("hide");
	});
});
   
  $(document).ready(function() {
	  $('.close-pic').click(function(){
		  $('.chat-content').removeClass("show")
	  });
	   });
	   
  $(document).ready(function() {
	  $('.chat').click(function(){
		  $('.chat-content').toggleClass("show")
	  });
	   });		 
$(document).ready(function() {
	var i=0;
	var j=0;
	 
	while(i<1999){
	
	i+=1; 
	
	 
		$("#h1").animate({left:'-=240px'},3000);
        $("#h2").animate({left:'-=240px'},3000);
        $("#h3").animate({left:'-=240px'},3000);
        $("#h4").animate({left:'-=240px'},3000);
		$("#h5").animate({left:'-=240px'},3000);
		
	 
	 			
		
	 
		if(i==1 ||i==a){
			$("#h1").animate({left:'960px'},0);
			var a=5;
			a+=i;
			 
}
 if(i==2||i==b){
			$("#h2").animate({left:'720px'},0);
			var b=5;
			b+=i;
			 
}
if(i==3||i==c){
			$("#h3").animate({left:'480px'},0);
			var c=5;
			c+=i;
			 
}
if(i==4||i==d){
			$("#h4").animate({left:'240px'},0);
			var d=5; 
			d+=i;
			 
}
if(i==5||i==e){
			$("#h5").animate({left:'0px'},0);
			var e=5;
			e+=i;
			
			
		 
}
	 

	}
	 
	
	
	
});		
 	
			function Redirect() {
               window.location="index.php";
            }
			
 $(document).ready(function() {
		 
			  $('#danhgia').click(function(){
	$('body').animate({
        scrollTop: $(".nhanxet").offset().top
}, 500); 
 });
		 
 });
 
 $(document).ready(function() {
	 $('#sophone').click(function(){
	$('body').animate({
        scrollTop: $(".footer").offset().top
}, 500); 

 	 });
  
 
 });
 
 
 
 
  function sum(){
		var soluong1=document.getElementById('soluong').value;
		if(soluong1>5){
			alert('số lượng đặt không thể quá 5');
			 return false;
 
			  
             
		}else{
			
			
		$.ajax({
			url:'tinhtong.php',
			type:'POST',
			dataType:'text',
			data:{
				
			soluong:soluong1 
			},
			success: function(result){
				
				$('#ketqua').html('thành tiền:'+result+' '+'VND');
				
			 }
			
		});
		return true;
		}
	}
	
   
function themgiohang(){
		var soluong=document.getElementById('soluong').value;
		var thanhtien=document.getElementById('ketqua').innerHTML;
		$.ajax({
			url:'themgiohang.php',
			type:'POST',
			datatype:'text',
			data:{
			thanhtien:thanhtien,	
			soluong1:soluong,
			},
			success: function(result){ 
				alert('hàng đã được thêm vào giỏ của bạn' );
			
			}
			
		});
	}
 function tinhtong(k){
	 
		var c=document.getElementById(k.id);
		var index=parseInt(k.id);
		var soluong=c.value;
		var thanhtien=document.getElementsByClassName('thanhtien');
		  
		$.ajax({
			
			url:'sum.php',
			type:'POST',
			datatype:'text',
			data:{
			index:index,	
			soluong:soluong  
			},
			success: function(rs){
				 thanhtien[index].innerHTML=rs;
				   
				   
				 
			} 
			 
			
		});
	} 
	var i=0;
	
  function xemthem(){
	  
	 i=i+5;
	  
	  $.ajax({
		  
		  url:'xulytintuc.php',
		  type:'POST',
		  datatype:'json',
		  data:{
			sotrang:i  
			  
			  
		  },
		  
		  success:function(data){
			  data=JSON.parse(data);
			  var html=""; 
			  $.each(data,function(key,value){
			
			  html+='<div class="title1">';
			  html+='<a href="tintuc.php?id='+value['id']+'">'+value['tieude']+'</a>  ';
			  html+='</div>';
			  
		  });
		  
		$('.news-title1').append(html);
		  
		  
	  } 
	  
  });
	  
	  
	  
  }