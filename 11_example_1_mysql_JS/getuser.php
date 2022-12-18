<?php
$q=$_GET["q"];

$servername = "localhost";
$username = "sqluser";
$password = "password";
$dbname = "ajax_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, firstname, lastname, age, hometown, job FROM user WHERE id = '".$q."'";
 
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
if (!empty($result) && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
 echo "<tr>";
 echo "<td>" . $row['firstname'] . "</td>";
 echo "<td>" . $row['lastname'] . "</td>";
 echo "<td>" . $row['age'] . "</td>";
 echo "<td>" . $row['hometown'] . "</td>";
 echo "<td>" . $row['job'] . "</td>";
 echo "</tr>";
    }
} else {
    echo "0 results";
  }
echo "</table>";

$conn->close();
?>