<?php
    include('model/comment/model_comment.php');
	class c_comment{
		 function add_comment(){
			$m_comment=new m_comment(); 
			$m_comment->connect();
			$m_comment->add_comment();
			include('view/comment/view_form_comment.php');
		 }
		 
		 function show_comment(){
			$m_comment=new m_comment(); 
			$m_comment->connect();
			$m_comment->show_comment();
			$rows=$m_comment->show();
			include('view/comment/view_comment.php');
		 
		}
		
}
	  
	  $c_comment=new c_comment();
	  $c_comment->add_comment();
	  $c_comment->show_comment();
	  
	  
	  
	?>  