<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorprovider";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
  

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS profiletutor (
  id INT,
   email VARCHAR(55),
   birthdate VARCHAR(18),
   mobilenum VARCHAR(25),
   gender VARCHAR(8),
   address VARCHAR(255),
   village VARCHAR(255),
   city VARCHAR(15),
   po VARCHAR(15),
   eduqual VARCHAR(255),
   sclnam VARCHAR(255),
   colnam VARCHAR(255) ,
   univernam VARCHAR(255),
   PRIMARY KEY (id)
)  ENGINE=INNODB;";

if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE IF NOT EXISTS profileguardian (
  id INT ,
  email VARCHAR(55),
  mobilenum VARCHAR(25),
  gender VARCHAR(8),
    address VARCHAR(255),
    district VARCHAR(255),
    village VARCHAR(255),
  city VARCHAR(15),
  po VARCHAR(15),
  class VARCHAR(55),
    subject VARCHAR(55),
    week VARCHAR(55),
    sclnam VARCHAR(55),
  colnam VARCHAR(55),
  desiredgenderoftutor VARCHAR(15),
  PRIMARY KEY (id)
)  ENGINE=INNODB;";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE IF NOT EXISTS signup(
  id INT AUTO_INCREMENT,
   name VARCHAR(55),
 pass VARCHAR(25),
signupas VARCHAR(8),
    
PRIMARY KEY (id)
)  ENGINE=INNODB;";

if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>