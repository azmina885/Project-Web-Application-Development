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
$myusername=$_POST['adminName'];
$mypassword=$_POST['password'];
$sql = "SELECT adminName, password FROM admin WHERE adminName='$myusername' and
password='$mypassword'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
if ($result->num_rows>0)
{

//redirect to file "adminMenu.php"
header("location:adminMenu.php");
}
else
{
echo "<p>Wrong Username or Password. Please try again.";
}

$conn->close();
?>
