<?php
    include('model/tintuc/model_tintuc.php');
	class c_tintuc{
		public function show_tintuc(){
		
		$tintuc=new m_tintuc();
		$tintuc->connect();
		$tintuc->query_tintuc();
		$rows_t=$tintuc->show_tintuc();
		include('view/tintuc/view_tintuc.php');
	 
		}
}
	 $c_tintuc=new c_tintuc();
	 $c_tintuc->show_tintuc();
	   
	  
	?>  