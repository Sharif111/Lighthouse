
<?php include 'connect1.php';?>
<?php
session_start();
$dbirth = $email= $mblnum = $gender = $address = "";
$vlg = $city = $po = $eduql = $scl= $clg= $unv = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["day"]) && !empty($_POST["month"]) && !empty($_POST["year"])) {
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$dbirth=$day."/".$month."/".$year;
  }
   if (!empty($_POST["email"])) {
$email=$_POST["email"];
  }
   if (!empty($_POST["mblnum"])) {
$mblnum=$_POST["mblnum"];
  }
   if (!empty($_POST["gender"])) {
$gender=$_POST["gender"];
  }
   if (!empty($_POST["address"])) {
$address=$_POST["address"];
  }
   if (!empty($_POST["vlg"])) {
$vlg=$_POST["vlg"];
  }
   if (!empty($_POST["city"])) {
$city=$_POST["city"];
  }
   if (!empty($_POST["po"])) {
$po=$_POST["po"];
  }
   if (!empty($_POST["eduql"])) {
$eduql=$_POST["eduql"];
  }
   if (!empty($_POST["scl"])) {
$scl=$_POST["scl"];
  }
   if (!empty($_POST["clg"])) {
$clg=$_POST["clg"];
  }
   if (!empty($_POST["unv"])) {
$unv=$_POST["unv"];
  }
$nam=$_SESSION["name"];
$pas=$_SESSION["pass"];
$sql = "SELECT id FROM signup WHERE name='$nam' and pass=$pas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id= $row["id"];
    }
} 

$sql = "INSERT INTO  profiletutor(id,email,birthdate,mobilenum,gender,address,village,city,po,eduqual,sclnam,colnam,univernam)
VALUES ('$id','$email', '$dbirth', '$mblnum','$gender', '$address', '$vlg','$city', '$po', '$eduql','$scl', '$clg','$unv')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully please move back";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


}
?>