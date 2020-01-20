
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    *{margin:0;padding: 0;box-sizing: border-box;}
    @font-face {
    font-family: 'foa';
    src: url('Nunito-Light.ttf');
}
.a{width: 800px;height: 380px;border:1px dotted black;font-family:foa;background:white;position: relative; margin: auto;line-height: 25px; padding: 25px; display: grid; grid-template-columns: 35% auto;align-items: center;}
    .c{display:grid;grid-template-columns: 49% auto;}
    pre{font-family:foa; }
    body{background:#F8FAFC;}
    .top{background:#383533;width: 100%;height: 140px;}
    input{width: 150px; height:50px;border:1px solid #65AEE8;background: inherit; font-size: 25px; color:white;padding-top:5px;padding-left: 10px; }
    .top1{position: relative; top:21%; margin-left:5%; }
    button{width: 130px; height:47px;outline:1px solid white;background: inherit;color:white;padding-top:5px;padding-left: 10px;font-size: 25px;margin-left: 5px;}
    .dpw{width: 165px;}.eq{width: 280px;}
    p{color: black;font-size: 20px;}
    img{//border-radius: 50%; width: 230px; height: 270px;}
    .search{color:white;font-size: 20px;font-weight: bold;text-align: center;}
  </style>
</head>
<body>
  <div class="top">
    
    <div class="top1">
      <p class="search">SEARCH TUTOR AS YOUR CHOICE</p>
<br>
    <form action="showtutors2.php" method="POST">
    
    
      <input type="text" placeholder="Area" name="area">
    
      <input type="text" placeholder="Class" name="class">
    
      <input type="text" placeholder="Subject" name="subject">
    
      <input class="dpw" type="text" placeholder="Days per week" name="dpw">
       
      <input type="text" placeholder="Gender" name="gender">
     
      <input class="eq" type="text" placeholder="Educational qualification" name="edq">
     
      
      <button type="submit">Submit</button>
    </form></div> </div>

<?php
$area=$subject=$gender=$edq='[a-z]';
$class=$dpw='[0123456789]';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
   if (!empty($_POST["area"])) {
$area=$_POST["area"];
  }
   if (!empty($_POST["class"])) {
$class=$_POST["class"];
  }
   if (!empty($_POST["subject"])) {
$subject=$_POST["subject"];
  }
   if (!empty($_POST["dpw"])) {
$dpw=$_POST["dpw"];
  }
  if (!empty($_POST["gender"])) {
$gender=$_POST["gender"];
  }
   if (!empty($_POST["edq"])) {
$edq=$_POST["edq"];
  }
  }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorprovider";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM profiletutor where area REGEXP '$area' and cyt REGEXP '$class'and st REGEXP '$subject' and tdpw REGEXP '$dpw' and gender REGEXP '$gender' and eduqual REGEXP '$edq' ";
$result = mysqli_query($conn, $sql);

// define how many results you want per page
$results_per_page = 5;

// find out the number of results stored in database

$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
$coma=',';
// retrieve selected results from database and display them on page
$sql="SELECT * FROM profiletutors where area REGEXP '$area' and cyt REGEXP '$class' and st REGEXP '$subject' and tdpw REGEXP '$dpw' and gender REGEXP '$gender' and eduqual REGEXP '$edq'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {  

       $iid=$row['id'];
      $sql="SELECT * FROM signup where id=$iid";
      $result1 = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result1) > 0)
     {
   
      ?>




<div class="a">
  <div class="b">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['imagetmp'] ).'"/>';?>
  </div>
  <div class="c">
  <div class="b1">
<p>Name:</p>                                            
<p>Gender:</p>                                          
<p>Educational Qualification:</p>                 
<p>Email:</p>    
<p>Mobile Number</p>                                       
<p>Teaching Days Per Week:</p>               
<p>Area Of Teaching:</p>                            
<p>Subjects To Teaces:</p>                        
<p>Class To Teaches:</p>
</div>
<div class="b2">
<p><b><?php while($rows = mysqli_fetch_assoc($result1))
        { echo $rows["name"]; } } else {
    echo "0 results";
}?></b></p>
<p><?php echo $row["gender"]  ?></p>
<p><?php echo $row["eduqual"]  ?></p>
<p><?php echo $row["email"]  ?></p>
<p><?php echo $row["mobilenum"]  ?></p>
<p><?php echo $row["tdpw"]  ?></p>
<p><?php echo $row["area"]  ?></p>
<p><?php echo $row["st"]  ?></p>
<p><?php echo $row["cyt"]  ?></p>

</div>
</div>
</div>
    <?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
 <div class="pagi">
    
  <?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="showposting.php?page=' . $page . '">' . $page . '</a> ';
}
  ?></div>
</body>
</html>