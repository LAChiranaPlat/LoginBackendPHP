<?php 

	//INCLUDE: SI NO ENCUENTRA TE AVISA
	//REQUIRES: SI NO ENCUENTRA DETIENE EL SCRIPT

	spl_autoload_register(function ($nombre_clase) {
	    
	    if(str_starts_with($nombre_clase, 'Controller')){
	    	 require_once "controller/".$nombre_clase . '.php';
	   	}else{
	    	 require_once "model/".$nombre_clase . '.php';
	   	}
	});

	$views=new ControllerViews();
	$views->manager();

 ?>

 <a href="?q=system">Entrar al sistema</a>