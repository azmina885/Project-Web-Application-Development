<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clublink";
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$studName = $_POST['studName'];
$email = $_POST['studEmail'];
$password = $_POST['newPassword'];

// Insert into database 
$sql = "INSERT INTO students (studName, email, password)
        VALUES ('$studName', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  header("Location: registerSuccess.html");
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
