<?php 
if(!isset($_SESSION))session_start();
foreach($_SESSION as $k=>$v){
	$_SESSION[user_id]=NULL;
}
session_destroy();
header("Location: login.php");
?>