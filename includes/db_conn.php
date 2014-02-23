<?php 

//Set the database access information as constants
DEFINE ('DB_USER', 'webuser');
DEFINE ('DB_PASSWORD', 'guesspwd');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'quizdb');

//Make the connection
// $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
// 		OR die('Could not connect to MySql: '. mysqli_connect_error() );

@ $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again";
	exit();
}

?>
