<?php

// Get the move value from the POST request
$move = $_POST['move'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moves";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert a new row into the "moves" table
$sql = "INSERT INTO robot (move,x,y) VALUES ('right','5','5')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>