<?php 
	session_start();
	require('bootstrap/locale.php');
	//permet que le pro
	require("config/database.php");
	require("includes/functions.php");
	include('filters/auth_filter.php');
	require("includes/constants.php");


	if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')){
		$user = find_user_by_id($_GET['id']);

		if(!$user){
			redirect('index.php');
		}

	}else{
		redirect('profile.php?id='.get_session('user_id'));
	}


	if(isset($_POST['update'])){ 
		$errors = [];
		if(not_empty(['name','city','country','sexe','bio'])){
			extract($_POST);

			$q=$bd->prepare('UPDATE users 
							SET name = :name, city = :city, country = :country,
							sexe = :sexe, twitter = :twitter, github = :github,
							available_for_hiring = :available_for_hiring, bio = :bio
							WHERE id = :id');
			$q->execute([
				'name' => $name,
				'city' => $city,
				'country' => $country,
				'sexe' => $sexe,
				'twitter' => $twitter,
				'github' => $github,
				'available_for_hiring' => !empty($available_for_hiring)? '1': '0',
				'bio' => $bio,
				'id' => get_session('user_id'),	
			]); 
			$_SESSION['available_for_hiring'] = false;
			$_SESSION['bio'] = $bio;


			set_flash("Félicitation votre profil a été mis a jour !");
			redirect('profile.php?id='.get_session('user_id'));
			
			}else{
				save_input_data();
				$errors[] = "Veuillez remplir tous les champs marqué d'une (*)";
			}
	}else{
		clear_input_data();
	}



 	require("views/edit_user.view.php");

