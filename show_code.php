
<?php
	session_start();
	require('bootstrap/locale.php');
	//seul un visiteur pourra voir la page d'acceuil
	include('filters/auth_filter.php');
	require("config/database.php");
	require('includes/functions.php');
	require("includes/constants.php");

	if(!empty($_GET['id'])){
		$data = find_code_by_id($_GET['id']);
		
		if(!$data){
			redirect('share_code.php');
		}
	}else{
		redirect('share_code.php');
	}

		

 	require("views/show_code.view.php");