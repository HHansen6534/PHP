<?php
echo $mysqli-> host_info . "<br>";

$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Joke id: " . $row["JokeID"]. " Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "--submitted by user " . $row['user_table_ID'] "<br>";
  }
} else {
  echo "0 results";
}

?>