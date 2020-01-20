
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
  if (!empty($_POST["tdpw"])) {
$tdpw=$_POST["tdpw"];
  }
  if (!empty($_POST["st"])) {
$st=$_POST["st"];
  }
  if (!empty($_POST["area"])) {
$area=$_POST["area"];
  }
  if (!empty($_POST["cyt"])) {
$cyt=$_POST["cyt"];
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
$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
/*$sql = "INSERT INTO  profiletutors(id,imagetmp,imagename,email,birthdate,mobilenum,gender,address,city,eduqual,sclnam,colnam,univernam,tdpw,st,area,cyt)
VALUES ('$id','$imagetmp','$imagename','$email', '$dbirth', '$mblnum','$gender', '$address', '$city', '$eduql','$scl', '$clg','$unv','$tdpw','$st', '$area','$cyt')";*/
if( $imagename=="")
{$sql ="UPDATE profiletutors set email='$email',mobilenum='$mblnum',gender='$gender',address='$address',city='$city',eduqual='$eduql',sclnam='$scl',colnam='$clg',univernam='$unv',tdpw='$tdpw',st='$st',area='$area',cyt='$cyt' WHERE id='$id'";}
else
{
  $sql ="UPDATE profiletutors set imagetmp='$imagetmp' ,imagename='$imagename' ,email='$email',mobilenum='$mblnum',gender='$gender',address='$address',city='$city',eduqual='$eduql',sclnam='$scl',colnam='$clg',univernam='$unv',tdpw='$tdpw',st='$st',area='$area',cyt='$cyt' WHERE id='$id'";
}

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: http://localhost/Project411/tutorform2.php');
}
?>