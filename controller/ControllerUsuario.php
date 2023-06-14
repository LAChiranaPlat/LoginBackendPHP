<?php 

	class ControllerUsuario
	{

		function login()
		{
			$user=new Usuarios();
			$user->login();
		}

	}

 ?>