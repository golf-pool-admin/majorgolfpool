<?php
ob_start();
session_start();
	
  	//Checking Session Admin value
	if($_SESSION['SESS_ADMIN'] == 0) {
		header("location: access-denied.php");
		exit();
	}
  
?>