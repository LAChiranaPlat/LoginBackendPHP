<?php 
		
	session_start();

	if(isset($_SESSION["active"]) && $_SESSION["active"]==true){
		header("location:nosotros.php");
		die();
	}

 ?>