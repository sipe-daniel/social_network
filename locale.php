<?php

$authorized_languages = ['fr','en'];
if(!empty($_GET['lang']) && in_array($_GET['lang'], $authorized_languages)){
	die("c'est bon");
}else{
	die("c'est pas bon");
}