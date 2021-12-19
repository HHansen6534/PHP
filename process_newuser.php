<?php

include "db_connect.php";

$new_username = $_GET['username'];
$new_password1= $_GET['password1'];
$new_password2= $_GET['password2'];

echo "<h2> Trying to add new user " . $new_username . " pw = " . $new_password1 . " and " . $new_password2 . "</h2>";

if($new_password1 !=$new_password2){
	echo "The passwords do not match. Please try again.";
	
}

preg_match('/[0-9]+/',$new_password1, $matches);
if (sizeof($matches)==0) {
	echo "The password must have at least one number<br>";
	exit;
}
preg_match('/[!@#$%^&*()]+/', $new_password1, $matches);
if (sizeof($matches)==0){
	echo "The password must have at least one special character like !@#$%^&*()<br>";
	exit;
}

if(strlen($new_password1) <=8) {
	echo "The password must be atleast 8 characters long <br>";
}

$sql= "INSERT INTO user_table (ID, username, password) VALUES (null, '$new_username', '$new_password1')";
$result = $mysqli->query($sql) or die (mysqli_error($mysqli));

if($result) {
	echo "Registration success";
}
else {
	echo "Something went wrong, not registered"; 
}

$sql = "SELECT * FROM user_table where username = '$new_username'";

$result = $mysqli->query($sql) or die ($mysqli_error($myqli));

if ($result->num_rows > 0) {
	echo "The username " . $new_username . "is already registered. Can't register twice :(";
}

echo "<a href= 'index.php'> Return to main/a>";


?> 