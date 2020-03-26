<?php 
session_start();

include('filters/guest_filter.php');
 require "includes/functions.php";
 require "config/database.php";


 if(!empty($_GET['p']) && is_already_in_use('pseudo',$_GET['p'],'users') && !empty($_GET['token'])){

 	$pseudo = $_GET['p'];
 	$token = $_GET['token'];


 	$q = $bd->prepare('SELECT email, password From users WHERE pseudo = ?');
 	$q->execute([$pseudo]);

 	$data = $q->fetch(PDO::FETCH_OBJ);
 	
 

 	$token_verif = sha1($pseudo.$data->email.$data->password);
 	

 	echo $token_verif.'<br/>';
 	echo sha1($pseudo.$data->email.$data->password);


 	if($token == $token_verif){
	 	$q = $bd->prepare("UPDATE users SET active='1' WHERE pseudo = ?");
	 	$q->execute([$pseudo]);

	 	set_flash('Votre compte a été bel et bien activé!');
 		redirect('login.php');
 	}else{
 		set_flash('Jeton de sécurité invalide','danger'); 
 		redirect("index.php");
 	}


 }else{
 	//redirect('index.php');
 }