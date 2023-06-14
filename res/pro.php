<?php 
	

	extract($_POST);

	$encryp=password_hash("jireh", PASSWORD_DEFAULT);	
	
	if($nick=="huarseral" && password_verify($pass, $encryp))
	{
		
		session_start();//	crea sesiones / utiliza
		$_SESSION["user"]=$nick;
		$_SESSION["permiso"]=true;
		$_SESSION["active"]=true;
		$_SESSION["idSession"]="12345678";

		header("location:nosotros.php");
		die();
?>

<a href="nosotros.php">Nosotros</a>

<?php 

	}else{
		header("location:index.php?error=Accesos Incorrectos");
	}

	

 ?>

