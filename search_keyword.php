<head>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  
  
  <style>
  * {
	  font-family:Arial, Helvetica, sans-serrif;
	  
  }
  
  </style>

</head>
<?php

include "db_connect.php";
$keywordfromform= "%" . $_GET["keyword"] . "%.";


echo "<h1> Show all jokes with the word $keywordfromform <br></h1>";

//$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table WHERE Joke_question LIKE '%" .$keywordfromform  . "%'";

$stmt= $mysqli->prepare("SELECT JokeID, Joke_question, Joke_answer FROM jokes_table WHERE Joke_question LIKE ?");
$stmt->bind_param("s", $keywordfromform);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($Joke_ID, $Joke_question, $Joke_answer, $userid, $username);


echo "SQL statement = " . $sql . "<br>";





if ($stmt->num_rows > 0) {
  // output data of each row
  
  
 
  
  echo "<div id="accordion">";
  
 
  
  while($stmt->fetch()) {
    
	echo "<h3>" . $Joke_question . "</h3>";
	
	echo "<div><p>" . $Joke_answer . " submitted by user " . $username . "</p></div>";
	
	
  }
} else {
  echo "0 results";
}


?>

</div>