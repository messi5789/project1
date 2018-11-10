<?php
    include('model/page1/model_page.php');
	class c_page1{
		public $start;
		public $limit;
		public function show_page(){
    $page1=new m_page1;
	$page1->connect();
	$page1->currentpage=isset($_GET["cpage"])? $_GET["cpage"]: 1;
	$page1->p_totalrecord();
	$page1->limit=8;
	$page1->total();
	if(isset($_GET["page"])){
	
 
		$page1->link_first="index.php?page=".$_GET["page"];
 
	}
else
	{
		$page1->link_first="index.php?page=1"; 
	
	}	
	include('view/page1/view_page.php');
		}
		
}
	  
	  
	  $page1=new c_page1();
	  $page1->show_page();
	  
	?>  