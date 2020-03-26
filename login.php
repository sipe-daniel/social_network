
<?php
	session_start();
	require('bootstrap/locale.php');
	include('filters/guest_filter.php');
	require("config/database.php");
	require('includes/functions.php');
	require("includes/constants.php");


	if(isset($_POST['login'])){ 

		if(!not_empty(['indentifiant','password'])){
			extract($_POST);

			$q=$bd->prepare("SELECT id,pseudo,email,password as hashed_password FROM users 
							WHERE (pseudo = :identifiant OR email = :identifiant)
							 AND active ='1'");
			$q->execute([
				'identifiant' => $identifiant
			]);

			$user = $q->fetch(PDO::FETCH_OBJ);


			if($user && password_verify($password, $user->hashed_password)){

				$_SESSION['user_id'] = $user->id;
				$_SESSION['pseudo'] = $user->pseudo;
				$_SESSION['email'] = $user->email;
				redirect_intent_or('profile.php?id='.$user->id);
			}else{
				set_flash('Combinaison Identifiant/Password incorrecte !','danger');
				save_input_data();
			}

		}
	}else{
		clear_input_data();
	}

 require("views/login.view.php");