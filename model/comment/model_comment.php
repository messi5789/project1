<?php 
	class m_comment extends database{
		public $rows;
		public function add_comment()
	{
		if(isset($_POST['submit'])){
	if(strlen($_POST['author']) >0&& strlen($_POST['comment']) >0)
  {
	  $author=$_POST['author'];
	  $comment=$_POST['comment'];
 $query="insert into tindang (author,content) values( '$author', '$comment')";
  $this->do_query($query);
 
  }
	}
	}
		public function show_comment(){
		if(isset($_GET['cpage'])){
			$start=($_GET['cpage']-1)*8;
		}
		else{
			$start=0;
		}
		$query="select * from tindang ORDER BY id DESC limit $start,8 ";
		$this->rows=$this->do_query($query);
		
}
		public function show(){
			return $this->fetch_assoc_allrows($this->rows);;
			
		}
		
}
	  
	?>  