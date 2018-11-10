<?php
   class database{
	  protected $localhost='sql113.freevnn.com';
	  protected $username='freev_22507043';
	  protected $password='25844ban';
	  protected $db='freev_22507043_quanlithanhvien'; 
	  
	  protected $conn=NULL ;
	  
	  
	  public function connect(){
		  $this->conn=mysqli_connect($this->localhost,$this->username,$this->password,$this->db);
		  mysqli_set_charset($this->conn,'utf8' );
	  }
	  
	  public function do_query($query){
		  
		$a=mysqli_query($this->conn,$query);
		return $a;
	 		  
	  }
	  public function fetch_assoc($query){
		   $result=mysqli_query($this->conn,$query);
		   $row=mysqli_fetch_assoc($result);
		 return  $row;
	  }
	  
	  
	 public function fetch_assoc_allrows($result){
		 $b= mysqli_fetch_assoc($result);
		  return $b;
		   
	  }		
		 
		
		public function	num_rows($query){
		$results=mysqli_query($this->conn,$query);
		$rows=mysqli_num_rows($results);
		  return $rows;
 		}		
   }
	 
	?>  