<?php
$servername = "localhost";
$username = "sqluser";
$password = "password";
$dbname = "dbphptest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
/*$sql = "CREATE DATABASE dbPhpTest";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}*/

// sql to create table
/* $sql = "CREATE TABLE persontest (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table persontest created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    } */

// sql inser command
/*      $sql = "INSERT INTO persontest (firstname, lastname, email)
VALUES ('Mike', 'Dinamit', 'mike@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} */
 

 //$sql = "SELECT id, firstname, lastname, email FROM persontest WHERE firstname = 'Axel' ";
 
 //sql to UPDATE a record 
 /*$sql = "UPDATE persontest SET firstname='Alex' WHERE id=2";

 if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}*/

// sql to delete a record
$sql = "DELETE FROM persontest WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
// sql to select a record
 $sql = "SELECT id, firstname, lastname, email FROM persontest";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " <br>Email: " .
     $row["email"]. "<br>";
     $fullname = $row["firstname"]. " " . $row["lastname"]. " <br>";
  }
} else {
  echo "0 results";
}
echo "<font color= 'green' size= '10'>" . $fullname . "</font>";

$conn->close();
?>