<?php
$servername="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$dbName="clublink"; // Database name
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName, $port);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Define $myusername and $mypassword
$myusername=$_POST['studName'];
$mypassword=$_POST['Password'];
$sql = "SELECT studName, password FROM students WHERE studName='$myusername' and
password='$mypassword'";

$result = $conn->query($sql);
// Mysql_num_row is counting table row
if ($result->num_rows > 0)
{
//redirect to file "adminMenu.php"
header("location: loginSuccess.html");
}
else
{
echo "<p>Wrong Username or Password. Please try again.";
}
$conn->close();
?>
