<?php
    
     class m_page1 extends database{
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
		public $change;
		public function p_totalrecord(){
			$query="select count(id) as t  from tindang";
			$a=$this->fetch_assoc($query);
			$this->totalrecord=$a['t'];
		}
		
		public function total()
		 {
		$this->totalpage=ceil($this->totalrecord/$this->limit); 
		 }
	 protected  function _link($pagenumber)
	{
		if(isset($_GET["page"])){
	
 
		$this->link_first="index.php?page=".$_GET["page"];
 
	}
else
	{
		$this->link_first="index.php?page=1"; 
	
	}
		
		if ( $pagenumber<=1 && $this->link_first)
		{
			
			echo"<a href=\"".$this->link_first."\"><span>".$pagenumber."</span></a>";
			 
		}
		else
		{
			 
			 
			$this->link_full=$this->link_first."&cpage=".$pagenumber;
			echo"<a href=\" ".$this->link_full."\"><span>".$pagenumber."</span></a>"; 
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