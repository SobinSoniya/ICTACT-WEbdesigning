<html>
<head>
<title>welcome to PHP Programming </title>
</head>
<body>
<Center>
<h1>Student Registration Details</h1>
<table border="1"> 
<tr>
<td><b>Roll No</b></td>
<td><b>Name</b></td>
<td><b>E-Mail</b></td>
<td><b>Address</b></td>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["rollno"]. "</td><td>" . $row["stud_name"]. "</td><td>" . $row["stud_email"]. "</td><td>" . $row["stud_address"] ."</td>";
    echo "</tr>"; 
}
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
</table></center>
</body>
</html>