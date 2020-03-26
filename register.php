
<?php
	session_start();
	require('bootstrap/locale.php');
	include('filters/guest_filter.php');
	require("config/database.php");
	require('includes/functions.php');
	require("includes/constants.php");




	if(isset($_POST['register'])){ 

		if(not_empty(['name','pseudo','email','password','password_confirm'])){

			$errors = [];

			extract($_POST);
			if(mb_strlen($name) < 3){
				$errors[] = "nom trop court (3 caracteres minimum)";
			}

			if(mb_strlen($pseudo) < 3){
				$errors[] = "Pseudo trop court (3 caracteres minimum)";
			}

			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors[] = "Adresse email invalide !"; 
			}

			if(mb_strlen($password) < 3){
				$errors[] = "Mot de passe trop court (6 caracteres minimum)";
			}else{
				if($password != $password_confirm){
					$errors[] = "les deux mots de passe ne concordent pas! ";
				}
			}

			if(is_already_in_use('pseudo',$pseudo,'users')){
				$errors[] = "Pseudo déjà utilisé!";
			}

			if(is_already_in_use('email',$email,'users')){
				$errors[] = "Adresse E-mail déjà utilisé!";
			}

			if(count($errors)==0){
			
				// envoi qid() mail d activation 
				$to = $email;

				$subject = WEBSITE_NAME." - ACTIVATION DE COMPTE";
				// achage du mot de pass pour qu'il concorde avec celui stocker en base de donné
				$password = password_hash($password,PASSWORD_BCRYPT);
				

				$token = sha1($pseudo.$email.$password);

				ob_start();
				require('templates/emails/activation.tmpl.php');

				$content = ob_get_clean();


				$headers = 'MIME-Version : 1.0' ."\r\n";
				$headers = 'Content-type : text/html; charset=iso-8859-1' ."\r\n";
				

				// destinataire = $to, sujet = $subject, contenu = $content, et $headers pour le formatage
				// du texte qui sera envoyé
				//mail($to, $subject, $content, $headers);

				set_flash("Mail d'activation envoye!",'success') ;

				$req = 'INSERT INTO users (name, pseudo, email, password) VALUES (?, ?, ?, ?)';
				$res = $bd->prepare($req);
				$res->execute([e($name), e($pseudo),e($email), $password]);

				header('Location: activation.php?p='.$pseudo.'&token='.$token.'');
				

			}else{
				save_input_data();
			}
			
		}else{ 
			$errors[] = "veuillez remplir tous les champs ! ";
			save_input_data();
		}



	}else{
		clear_input_data();// s'il vient d'arriver sur la page il n'y a aucune raison 
		//que les champs soit prerempli
	}



?>

<?php require('views/register.view.php'); ?>