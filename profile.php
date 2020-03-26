
<?php
	session_start();
	require('bootstrap/locale.php');
	require("config/database.php");
	require("includes/functions.php");
	include('filters/auth_filter.php');
	require("includes/constants.php");
	

	if(!empty($_GET['id'])){
		$user = find_user_by_id($_GET['id']);

		if(!$user){
			redirect('index.php');
		}else{

			$q = $bd->prepare('SELECT content, created_at FROM microposts WHERE user_id = :user_id ORDER BY created_at DESC ');
			$q->execute([
				'user_id' => $_GET['id']
			]);

			$microposts = $q->fetchAll(PDO::FETCH_OBJ);
		
		}

	}else{
		redirect('profile.php?id='.get_session('user_id'));
	}


	
 	require("views/profile.view.php");

