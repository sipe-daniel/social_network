<?php

require '../config/database.php';

require '../vendor/autoload.php';

$faker = Faker\Factory::create();


for($i = 1; $i <= 150 ; $i++){
	$q = $bd->prepare('INSERT INTO users(name, pseudo, email, password, active,
						created_at, city, country, sexe, available_for_hiring, bio)
						VALUES(:name, :pseudo, :email, :password, :active, :created_at
						, :city, :country, :sexe, :available_for_hiring, :bio)'); 

	$q->execute([
		'name' 					=> $faker->unique()->name,
		'pseudo' 				=> $faker->unique()->userName,
		'email' 				=> $faker->unique()->email,
		'password' 				=> password_hash('123456',PASSWORD_BCRYPT),
		'active' 			 	=> 1,
		'created_at' 			=> $faker->date().' '.$faker->time(),
		'city' 					=> $faker->city,
		'country' 				=> $faker->country,
		'sexe' 					=> $faker->randomElement(['H', 'F']), 
		'available_for_hiring'	=> $faker->randomElement([0 , 1]),
		'bio'					=> $faker->paragraph() 
 	]);
}
echo 'Users added !!!';
