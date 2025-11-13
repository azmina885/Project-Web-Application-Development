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
$adminName = $_POST['adminName'];
$email = $_POST['admEmail'];
$password = $_POST['Password'];

// Insert into database (example table: users)
$sql = "INSERT INTO admin (adminName, adminEmail, password)
        VALUES ('$adminName', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  header("Location: AdminLogin.html");
 exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
