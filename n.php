<?php
$servername = "sql301.infinityfree.com";
$username = "if0_42448481";
$password = "Atheeralharbi12";
$dbname = "if0_42448481_taskdb";
$name = $_GET['name'];
$age = $_GET ['age'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (id, name, age)
VALUES ('', '$name', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>