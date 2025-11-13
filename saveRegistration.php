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
die("Connection failed: " . $conn->connect_error); }

//Get data from form
$studentName = $_POST['studentName'];
$studentID = $_POST['id'];
$program = $_POST['program'];
$semester = $_POST['sem'];
$phoneNo = $_POST['phoneNo'];
$email = $_POST['email'];
$clubInterested = $_POST['club'];

//create query
$sql = "INSERT INTO club_register (studentName, studentID, program, semester, phoneNo,
email, clubInterested) VALUES ('$studentName', '$studentID', '$program', '$semester', '$phoneNo',
'$email', '$clubInterested')";


	//execute query
if ($conn->query($sql) === TRUE) {
	header("location: ClubRegisterSuccess.html");
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
?>
