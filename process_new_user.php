<?php

include "db_connect.php";

$new_username=$_GET['username'];
$new_password1=$_GET['password1'];
$new_password2=$_GET['password2'];

echo"<h2>Trying to add a new user ". $new_username . " pw = " . $new_password1 . " and " . $new_password2 . "</h2>";

if($new_password1 != $new_password2) {
	echo "The password do not atch. Please try again";
	exit;
}

$sql = "SELECT	* FROM user_table where username = '$new_username'";

$result = $mysqli->query($sql) or die (mysqli_error($mysqli));

if($result->num_rows > 0) {
	//someone already exists
	echo "The username " . $newusername . " is already in the database. Can't Register twice:( ";
	exit;
}

$sql = "INSERT INTO user_table (ID, username, password) VALUES (null,'$new_username', '$new_password1')";
$result= $mysqli->query($sql) or die (mysqli_error($mysqli));

if($result) {
	echo "Registration success";
	
}
else {
	echo "Something went wrong, not registered";
}




?>