<?php 

	class ControllerViews
	{
		function manager()
		{

			if(isset($_GET["q"]))
			{
				
				if($_GET["q"]=="pro")
				{

					$usuarios=new ControllerUsuario();
					$usuarios->login();

				}else if($_GET["q"]=="system")
				{

					include "view/system.php";

				}else if($_GET["q"]=="close"){

				}else if($_GET["q"]=="error"){

					echo "<h1>404 Pagina No encontrada</h1>";
				
				}

			}else{
				
				include "view/form.php";

			}
		
		}

	}

 ?>