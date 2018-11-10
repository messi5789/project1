<?php

 
 function setusername($username,$value){
	 if(isset($username)){
		 $_SESSION[$username]=$value;
 }}

function getusername(){
	return (isset($_SESSION[$username]))?$_SESSION[$username]:false;
}
 
 function deleteusername($username){
	 if(isset($_SESSION[$username])){
		 unset($_SESSION[$username]);
 }
 }
 









?>