<?php 
	class m_tintuc extends database{
		 public $show; 
		public function query_tintuc()
	{
		 
	 
    $query="select * from tintuc order by id desc limit 0,6";
	$this->show=$this->do_query($query);
	  
  }
	
	
	public function show_tintuc(){ 
	return $this->fetch_assoc_allrows($this->show);
	   
  }
		
}
	  
	?>  