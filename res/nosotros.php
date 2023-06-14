<?php 
	
	include "validation.php";
	
 ?>

 <h1>Bienvenido <?= $_SESSION["user"]; ?> al Sistema</h1>
 <hr />
 <a href="close.php">Cerrar sesión</a>