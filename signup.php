
<?php session_start(); include 'connect1.php';?>
<?php
$name = $pass=$signupas= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
 if (!empty($_POST["name"])) {
$name=$_POST["name"];
$_SESSION["name"] = $name;
  }
   if (!empty($_POST["signupas"])) {
$signupas=$_POST["signupas"];
$_SESSION["signupas"] = $signupas;
  }
   if (!empty($_POST["pass"])) {
$pass=$_POST["pass"];
$_SESSION["pass"] = $pass;
  }
$sql = "INSERT INTO signup (name,pass,signupas)
VALUES ('$name', '$pass', '$signupas')";

if (mysqli_query($conn, $sql)) {
   header("Location:http://localhost/Project411/Profile3.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


}
?>