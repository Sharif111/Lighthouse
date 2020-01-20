
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
.a0{margin:auto;}
    .a{width: 600px;height: 300px;border:1px dotted black;padding-left: 20px;font-family:foa;background:white;position: relative; margin-top: 20px;margin-left:auto; margin-right:auto;line-height: 25px; padding-top: 25px;}
    .b{background-color: blue; width: 100px;height: 100px; border-radius: 50px;}
    pre{font-family:foa; }
    body{background:#F8FAFC;}
    .top{background:#383533;width: 100%;height: 140px;}
    input{width: 150px; height:50px;border:1px solid #65AEE8;background: inherit; font-size: 25px; color:white;padding-top:5px;padding-left: 10px; }
    .slr{width: 280px; height:50px;border:1px solid #65AEE8;background: inherit; font-size: 25px; color:white;display: inline-block;
      padding-top: 5px;}
    
    .top1{position: relative; top:21%; margin-left:5%; }
    button{width: 130px; height:50px;outline:1px solid white;background: inherit;color:white;padding: 10px;font-size: 25px;margin-left: 5px;}
    .dpw{width: 165px;}.eq{width: 140px;margin-left: -4px;border-left: 1px solid #383533; outline: none;}
    p{color: white;font-weight: bold; font-size: 20px;text-align: center;}
    select{width: 135px;height: 50px;display: inline-block;padding-top: 13px;margin-right: 0;border-left:1px solid #65AEE8;background-color: inherit;color:inherit;outline: none;color: white;border-top:1px solid #65AEE8;border-bottom :1px solid #65AEE8;border-right: 1px  solid #383533;}
    form{height:auto;}
   
option{color:black;}
    .pagi{margin: auto;}
a{width: 100%;
  padding: 6px 10px;

  margin-right: 3px;
  background: orange;
  font-size: 17px;
  border: none;
  cursor: pointer;
text-decoration: none;font-weight: bold;}
  </style>
</head>
<body>
  <div class="top">
    
    <div class="top1">
      <p>SEARCH TUTION AS YOUR CHOICE</p>
<br>
    <form action="showposting2.php" method="POST">
    
    
      <input type="text" placeholder="Area" name="area">
    
      <input type="text" placeholder="Class" name="class">
    
      <input type="text" placeholder="Subject" name="subject">
    
      <input class="dpw" type="text" placeholder="Days per week" name="dpw">
       
      <input type="text" placeholder="Gender" name="gender">
    
      <select name="salaryy">
  <option value=">">GREATER THAN</option>
  <option value="<">LESS THAN</option>
  <option value="=">EQUAL TO</option>
  </select>
      <input class="eq" type="text" placeholder="Salary" name="slr">
     

      <button type="submit">Submit</button>
    </form></div> </div>
<?php
$stdnam=$subject=$gender=$edq=$area='[a-z]';
$class=$dpw='[0123456789]';
$salary='>';
$slr=-1;

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
   if (!empty($_POST["slr"])) {
$slr=$_POST["slr"];
  }
  if (!empty($_POST["salaryy"])) {
$salary=$_POST["salaryy"];
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


$sql = "SELECT * FROM profileguardian where address REGEXP '$area' and class REGEXP '$class'and subject REGEXP '$subject' and week REGEXP '$dpw' and gender REGEXP '$gender' and salary $salary $slr ";
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
$sql="SELECT * FROM profileguardian where address REGEXP '$area' and class REGEXP '$class'and subject REGEXP '$subject' and week REGEXP '$dpw' and gender REGEXP '$gender' and salary $salary $slr";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {  
   
      ?>
<div class="a0">
<div class="a">
<pre>Student Name:               <b><?php echo $row["stdnam"]  ?></b></pre>
<pre>Student Gender:             <?php echo $row["gender"]  ?></pre>
<pre>Class:                              <?php echo $row["class"]  ?></pre>
<pre>Subject:                          <?php echo $row["subject"]  ?></pre>
<pre>Salary:                            <?php echo $row["salary"]  ?></pre>
<pre>Days Per Week:              <?php echo $row["week"]  ?></pre>
<pre>Address:                         <?php echo $row["address"]  ?></pre>
<pre>Contact Number:            <?php echo $row["mobilenum"]  ?></pre>
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