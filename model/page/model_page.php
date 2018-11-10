<?php
    
     class m_page extends database{
		public $pagenumber;
		public $prev;
		public $next;
		public $start;
		public $currentpage ;
		public $link_full;
	    public $link_first;
		public $totalrecord;
		public $limit;
		public $totalpage;
		 
		public function p_totalrecord(){
			$query="select count(id) as t  from mathang ";
			$a=$this->fetch_assoc($query); 
			$this->totalrecord=$a['t'];
		}
		
		public function total()
		 {
		$this->totalpage=ceil($this->totalrecord/$this->limit);
		  
		 
		 }
	 protected  function _link($pagenumber)
	{
		 
		if ( $pagenumber<=1 && $this->link_first)
		{
			
			echo"<a href=\"".$this->link_first."\" class=\"number\"><span>".$pagenumber."</span></a>";
			 
		}
		else
		{
			if(isset($_GET['f'])){
		$this->link_full="index.php?f=".$_GET['f']."&page=".$pagenumber;
		}
		else{
	  $this->link_full="index.php?page=".$pagenumber;
		}
			  
			
			echo"<a href=\" ".$this->link_full."\" class=\"number\"><span>".$pagenumber."</span></a>"; 
		}
	}
			
		
 public function html(){
  
	  
 
for($i=1;$i<=$this->totalpage;$i++)
{
	   $this->_link($i);
  
}
  
} 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	 }
	  
	?>  