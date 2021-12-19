<?php 

//four variables to connect to the database
$localhost = "localhost";
$username = "root";
$user_pass = "root";
$database_in_use = "test";

//create a db connection interface
$mysqli = new mysqli("$localhost", "$username", "$user_pass", "$database_in_use");

?>