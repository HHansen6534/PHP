<?php
require_once 'Autoloader.php';

class CheckAccountDataService {

function getBalance() {
	//get a connection to database
$db = new Database();
$conn = $db->getConnection();

// run query
$sql= "SELECT BALANCE FROM CHECKING";
$result = $conn->query($sql);

if ($result->num_rows==0) {
	$conn->close();
	return -1;
}
else {
	$row = $result->fetch_assoc(); 
	$balance = $row['BALANCE'];
	$conn->close();
	return $balance;
}
}
function updateBalance($balance) {
	$db = new Database();
$conn = $db->getCOnnection();

// run query
$sql= "UPDATE CHECKING SET BALANCE=$balance";
$result = $conn->query($sql);

if ($result) {
	$conn->close();
return 1;
}
else {
	$conn->close();
	return 0;
}

}