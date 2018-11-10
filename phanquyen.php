<?php
 
 

function settoken($username,$level){
	setusername('token',array(
		'username'=>$username,
		'level'=>$level
));
	 
}

function logout()
{
	deleteusername('token');
	
}
	


?>















 