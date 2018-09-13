<?php

require_once "vendor/autoload.php";

// VERIFICA SE HOUVE UMA REQUISIÇÃO DO TIPO GET
if(isset($_GET['p'])) {
	$argumento = trim($_GET['p']));
	
	switch ($argumento) {
		case 'adiciona':
			
			header("location: index.php");
			break;
		
		default:
			# code...
			break;
	}

}
