
<?php 
	
	include "validationLogin.php";

	$message= $_GET["error"] ?? "";

	echo "<div style='background:#ff0000;color:white'>$message</div>";

 ?>


<form action="pro.php" method="post">
	<input type="text" name="nick" placeholder="Nombre de Usuario" required="true" />
	<br />
	<input type="password" name="pass" placeholder="Clave de Usuario" required="true" />

	<button type="submit">Login</button>
</form>