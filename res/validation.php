<?php 

	session_start();

	
		if($_SESSION["permiso"]!=true){
			header("location:index.php");
			die();
		}

		if($_SESSION["idSession"]!="12345678"){
			//clonacion de sessiones
			header("location:alerta.php");
			die();
		}


 ?>