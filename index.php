<?php 

session_start();

require('includes/functions.php');
//require('filters/auth_filter.php');
require('bootstrap/locale.php');



if(isset( $_SESSION['valide']) && $_SESSION['valide']==1){
	set_flash("Vous avez recu un email", 'success');
}

require("views/index.view.php");

