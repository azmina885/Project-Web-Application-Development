<html>
<head>
<title>Registration for Club</title>
<style>

    body {
      background-color: #e9c0c0;
      color: #000;
		font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
		font-size; 18px;
    }
		header {
      background-color: #fff;
      padding: 2px 80px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-radius: 50px;
      width: 90%;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
	  
	  header a {
		  font-family: "Garet", "Serif";
		  font-size: 18px;
		  color: #8a6046;
		  text-decoration: none;
	  }
	footer {
	  font-family: "alegreya sans sc", "sans-serif";
	  font-size: 14px;
	  color: #000;
      background-color: #f6e9e9;
      border-radius: 15px;
      padding: 30px 60px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
			
.record-table {
  width: 90%;
  border-collapse: collapse;
  margin: 30px auto;
  background-color: #fff5f5; /* soft light pink */
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.record-table th,
.record-table td {
  border: 1px solid #c58c8c;
  padding: 12px 15px;
  text-align: center;
  font-size: 16px;
  color: #4b2e2e;
}

.record-table th {
  background-color: #d49a9a; /* darker pink header */
  color: #fff;
  font-weight: 600;
  letter-spacing: 0.5px;
}

.record-table tr:nth-child(even) {
  background-color: #f7dede; /* alternate row color */
}

.record-table tr:hover {
  background-color: #f2caca; /* hover highlight */
  transition: background-color 0.3s ease;
}

/* Optional: “No record found” message */
font[color="red"] {
  display: block;
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  margin-top: 30px;
}

/* “Back to Main Menu” button styling */
a[href="adminMenu.php"] {
  display: block;
  text-align: center;
  margin: 30px auto;
  background-color: #8a6046;
  color: white;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 25px;
  width: fit-content;
  font-weight: bold;
  transition: 0.3s ease;
}

a[href="adminMenu.php"]:hover {
  background-color: #b47b5b;
}


	</style>
		
</head>
<body><header><table width="1287" border="0" cellspacing="3" cellpadding="5">
  <tbody>
    <tr align="center">
      <td width="185" height="77" rowspan="3">
      <h2><img src="Image/clubLink logo.png" width="179" height="67" alt=""/></h2>
    </td>
      <td width="112" rowspan="3">&nbsp;</td>
      <td width="174" rowspan="3"><a href="ClubLink.html">Home</a></td>
      <td width="174" rowspan="3"><a href="MainClubs.html">Clubs </a></td>
		<td width="174" rowspan="3"><a href="leadershipBodies.html">Leadership Bodies</a></td>
      <td width="160" rowspan="3"><a href="MainEvents.html">Events</a></td>
      <td width="169" rowspan="3"><a href="allAbout.html">About</a></td>
    </tr>
  </tbody>
</table>
</header>
<div>
<h3 align="center">Data From Club Registration</h3>
			
<p>
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
	
//create and execute query
$sql = "SELECT * FROM club_register";
$result = $conn->query($sql);
	
//check if records were returned
if ($result->num_rows >0) {
//create a table to display the record
echo '<table cellpadding=10 cellspacing=0 border=1 align="center" class="record-table">';
echo '<tr>
<td align="center"><b>Student Name</b></td>
<td align="center"><b>Student ID</b></td>
<td align="center"><b>Program</b></td>
<td align="center"><b>Semester</b></td>
<td align="center"><b>Phone No</b></td>
<td align="center"><b>Email</b></td>
<td align="center"><b>Club Interested</b></td></tr>';
	
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td align="center">'.$row["studentName"].'</td>';
echo '<td align="center">'.$row["studentID"].'</td>';
echo '<td align="center">'.$row["program"].'</td>';
echo '<td align="center">'.$row["semester"].'</td>';
echo '<td align="center">'.$row["phoneNo"].'</td>';
echo '<td align="center">'.$row["email"].'</td>';
echo '<td align="center">'.$row["clubInterested"].'</td>';
echo '</tr>';
}
}
else {
echo "0 results"; //if no record found in the database
}
//close connection
$conn->close();
echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</p>
		</body>
</html>
