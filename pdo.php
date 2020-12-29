<?php

try {
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=happy_learn', 
   'root', '');
} 
catch (Exception $e) {
	exit("Error:".$e -> getMessage());
	
}


?>