<?php 
	
	//SESIONES 	-> Seguridad

	/*

		get, post

		$_GET, $_POST, $_REQUEST

	*/

	session_start();//	crea sesiones / utiliza

	$_SESSION["user"]="Huarseral";
	
	/*
	$_SESSION["permiso"]=true;
	$_SESSION["idSession"]="12345678";
	*/

	echo "Huarseral";

 ?>

<a href="nosotros.php">Nosotros</a>
