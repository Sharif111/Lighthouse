
<?php include 'connect1.php';?>
<?php
session_start();
$email= $mblnum = $gender = $address = $dst="";
$vlg = $city = $po = $eduql = $scl= $clg= $dsg = $sbj=$wk="";
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
  if (!empty($_POST["dst"])) {
$dst=$_POST["dst"];
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
  if (!empty($_POST["cls"])) {
$cls=$_POST["cls"];
  }
  if (!empty($_POST["sbj"])) {
$sbj=$_POST["sbj"];
  }
   if (!empty($_POST["wk"])) {
$wk=$_POST["wk"];
  }
  
   if (!empty($_POST["scl"])) {
$scl=$_POST["scl"];
  }
   if (!empty($_POST["clg"])) {
$clg=$_POST["clg"];
  }
   if (!empty($_POST["dsg"])) {
$dsg=$_POST["dsg"];
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

$sql = "INSERT INTO profileguardian (email , mobilenum  , gender,  address ,  district , village ,  city , po , class ,  subject ,  week  ,sclnam , colnam , desiredgenderoftutor )
VALUES ('$email',  '$mblnum','$gender', '$address', '$dst','$vlg','$city', '$po', '$cls','$sbj', '$wk','$scl','$clg','$dsg')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully please move back";
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


}
?>