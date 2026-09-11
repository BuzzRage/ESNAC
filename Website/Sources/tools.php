<?php

include_once("./Controller/constantes.php");
	
if(isset($_GET['section'])){
	switch($_GET['section']){
		case 'conv':
			include_once($views["conv"]);
			break;
		case 'crypto':
			include_once($controllers["tools"]);
			break;
		case 'sdl':
			include_once($views["sdl"]);
			break;
		case 'wikay':
			include_once($views["wikay"]);
			break;
		default:
			header('Location: '.$ht_links["home"]);
			break;
	}
}
else
		header('Location: '.$ht_links["home"]);
		
?>