<?php
    include('model/page/model_page.php');
	class c_page{
		public $start;
		public $limit;
		public function show_page(){
    $page=new m_page;
	$page->connect();
	$page->currentpage=isset($_GET["page"])? $_GET["page"]: 1;
	$page->p_totalrecord();
	$page->limit=5;
	$page->total(); 
	if(isset($_GET['f'])){
	$page->link_first="index.php?f=".$_GET['f'];

	}else{	
	$page->link_first="index.php";
	}
	include('view/page/view_page.php');
		}
		
}
	  
	  
	  $page=new c_page();
	  $page->show_page();
	  
	?>  