<input type="hidden" name="linkk" id="linkk">
<div class="wrapper">
 <div class="banner auto">
  
 <img src="images/banner1.jpg" id="banner1" height="400px" width="600px">
 <img src="images/banner2.jpg" id="banner2" height="400px" width="600px">
 <img src="images/banner3.jpg" id="banner3" height="400px" width="600px">
 <img src="images/banner4.jpg" id="banner4" height="400px" width="600px">
   
</div> 
 
<div class="tim auto">
<form class="form" method="GET" action="index.php">
<span><h1> Bạn muốn tìm gì</h1></span>
 <input type="text" value=" "  name="timhang">
 <input type="submit" value="tìm " name="ok" id="search">
 <div class="clear"></div>
 </form>
 </div> 
 <div class="content1 auto">
<div class="mucluc"> 
<ul class="mucluc1"> 
<li><a href=" ">Các mặt hàng hiện có</a>   
	<ul class="loaihang" > 
		<li><a href="index.php?f=1"id="aothun">áo thun</a></li>
		<li><a href="index.php?f=2"id="vaydam">váy đầm</a></li>
		<li><a href="index.php?f=3"id="dobo">đồ bộ</a></li>
		<li><a href="index.php?f=4"id="aokieu">áo kiểu</a></li>
	</ul>
</li>
<li><a href="tintuc.php">tin tức,khuyến mãi</a></li> 
<li ><a href="#" id="danhgia">ý kiến đánh giá sản phẩm</a></li> 
<li class="lienhe"><a href="# ">Liên hệ</a>  
<ul class="chitiet"> 
<li><a href="https://www.facebook.com">facebook</a></li>
<li><a href="#"  id="sophone">số điện thoại</a></li>
 </ul>
</li>
 </ul>
 </div>
 <div class="anhdong">
 <img src="images/hotgirl1.jpg" id="hotgirl1" width="195" height="360">
 <img src="images/hotgirl2.jpg" id="hotgirl2" width="195" height="360">
 <img src="images/hotgirl3.jpg" id="hotgirl3" width="195" height="360">
 <img src="images/hotgirl4.jpg" id="hotgirl4" width="195" height="360">
 </div>
 
 </div>
<?php
include('controller/product/controller_product.php');
	include('controller/page/controller_page.php');
	$c_product=new c_product();
	 if(($_GET['f'])){
	 $c_product->show();
	 
 }
 else if($_GET['ok'])
	 
	 {
		 
		$c_product->search(); 
		 
		 
		 
	 }
	 else
	 {
		 $c_product->p_default();
		 
	 }
	   
	  
	?>  
	<div class="clear"></div> 
<div class="decorate auto">
<img src="images/tuixach.jpg" width="220"  id="h1"    height="180" alt="khong the hien thi hinh anh">
<img src="images/dh2.jpg" width="220"   id="h2"   height="180" alt="khong the hien thi hinh anh">
<img src="images/dongho.jpg" width="220" id="h3"     height="180" alt="khong the hien thi hinh anh">
<img src="images/hotgirl.jpg" width="220"  id="h4"    height="180" alt="khong the hien thi hinh anh">
<img src="images/hotgirl.jpg" width="220"  id="h5"    height="180" alt="khong the hien thi hinh anh"> 
</div>
<?php
include('controller/tintuc/controller_tintuc.php');
include('controller/comment/controller_comment.php');
include('controller/page1/controller_page.php');
?> 
<div class="khung" > 
<div class="margin-pic">
	 <img src=" " id="hinhto"  width="680" height="480" >
	<a href=""><img src="images/nutmua.jpg" id="nut" width="100"height="70" onclick="laysrc()"> </a>
	 <img src="images/exit.jpg" id="exit" width="45"height="45" onclick="anhinh()"> 
	 </div>
	 </div>
	 </div>