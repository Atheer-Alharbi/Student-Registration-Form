<!DOCTYPE html>
<html>
<body>

<?php
$servername = "sql301.infinityfree.com";
$username = "if0_42448481";
$password = "Atheeralharbi12";
$dbname = "if0_42448481_taskdb";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all records from the user table
$sql = "SELECT id, name, age FROM user";
$result = $conn->query($sql);

// Display the retrieved records
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] .
             " | Name: " . $row["name"] .
             " | Age: " . $row["age"] . "<br>";
    }
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>