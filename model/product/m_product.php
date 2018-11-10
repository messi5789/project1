<?php
 
   class m_product extends database{ 
   
    public $pdefault;
	public $search;
	public $show;
	
	 public function product_show(){
		 if(isset($_GET['page'])){
	$start=($_GET['page']-1)*5;
  }else{
	  $start=0;
	  
  }
		  
		  if(($_GET['f'])==1){
	$query="Select * from mathang WHERE danhmuc LIKE   'áo thun' order by id desc limit $start,5";
	$this->show=$this->do_query($query);
	
	  }
	  else if(($_GET['f'])==2){
	$query="Select * from mathang WHERE danhmuc LIKE   'váy đầm' order by id desc limit $start,5";
	$this->show=$this->do_query($query);
	 
	  }
	  else if(($_GET['f'])==3){
		  
	 
	$query="Select * from mathang WHERE danhmuc LIKE   'đồ bộ' order by id desc limit $start,5";
	$this->show=$this->do_query($query);
	
	  }
	  else{	  
	 
	$query="Select * from mathang WHERE danhmuc LIKE   'áo kiểu' order by id desc limit $start,5";
	$this->show=$this->do_query($query);
	
	  
	  }
	  }
	  public function show(){
		  
		  return $this->fetch_assoc_allrows($this->show);
		  
		  
	  }
	  
	  
  
  
  public function product_show_default(){ 
   
  if(isset($_GET['page'])){
	$start=($_GET['page']-1)*5;
  }else{
	  $start=0;
	  
  }
	 
    $query="select id,tenhang,hinhanh,gia from mathang order by id desc limit $start,5 ";
  	$this->pdefault=$this->do_query($query);
	  
  }
	
	
	public function show_default(){ 
	return $this->fetch_assoc_allrows($this->pdefault);
	   
  }
	 	
	  public function product_search(){
		  if(isset($_GET['page'])){
	$start=($_GET['page']-1)*5;
  }else{
	  $start=0;
	  
  }
	$u= trim(($_GET['timhang'])); 
	$query="Select * from mathang WHERE tenhang LIKE '%$u%' order by id desc limit $start,5";
	$this->search=$this->do_query($query); 
   
	  }
	  public function search(){ 
	return $this->fetch_assoc_allrows($this->search);
	   
  }
	
	  
   }
	 
	?>  