<?php
// initialisation moteur d'internationnalisation ou de tarduction

$authorized_languages = ['fr','en'];
if(!empty($_GET['lang']) && in_array($_GET['lang'], $authorized_languages)){
	$_SESSION['locale'] = $_GET['lang'];
}else{
	if(empty($_SESSION['lang'])){
		$_SESSION['locale'] = $authorized_languages[0];
	}
	
}

require 'locales/menu.php';
require 'locales/long_text.php';