<html>
<head><style type="text/css">
    input,p,textarea{
        position:relative;}
        input,textarea{border-radius: 20px;padding: 5px;border:none;outline: none;}
        @font-face {
    font-family: 'o1';
    src: url('Fedra-SerifA.ttf');
}
.word::after{
	content: ":";
}
   body{
   background-color:#39A6DB;
   }
   form{border:2px dashed white;padding: 30px;width: 400px;margin:auto;line-height: 15px;font-family: o1;}
   .pr{text-align: center;font-family: o1;font-size: 50px;color: magenta;line-height: 15px;}
   img{width: 230px; height: 170px;}
   .b{margin-left:80px;}
</style></head>
<body>
  <?php include 'updatedata3.php';
  $nam=$_SESSION["name"];
$pas=$_SESSION["pass"];

  $sql =  "SELECT id FROM signup WHERE name='$nam' and pass=$pas";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($rows = mysqli_fetch_assoc($result)) {
  $id1=$rows["id"];
$sql1 =  "SELECT * FROM profiletutors WHERE id=$id1";
}}
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
  while($row = mysqli_fetch_assoc($result1)) {
  ?>
    <form action="" method="POST" enctype="multipart/form-data">
 <div class="pr">PROFILE <p>UPDATING</p></div>
<div class="b">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['imagetmp'] ).'"/>';?>
  </div>
  <p class="word">CHANGE IMAGE</p><input type="file" name="myimage">
  <p class="word">DATE OF BIRTH</p>
  <?php $br= $row['birthdate']; 
  $br=explode("/",$br);
  
?>
  <select name="day">
  <option value= '<?php echo $br[0] ; ?>'> <?php echo $br[0] ; ?></option>
  <option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>

</select>
<select name="month">
   <option value='<?php echo $br[1] ; ?>' > <?php echo $br[1] ; ?></option>
    <option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>
<select name="year">
  <option value='<?php echo $br[2] ; ?>' > <?php echo $br[2] ; ?></option>
 <option value='1971'>1971</option>
<option value='1972'>1972</option>
<option value='1973'>1973</option>
<option value='1974'>1974</option>
<option value='1975'>1975</option>
<option value='1976'>1976</option>
<option value='1977'>1977</option>
<option value='1978'>1978</option>
<option value='1979'>1979</option>
<option value='1980'>1980</option>
<option value='1981'>1981</option>
<option value='1982'>1982</option>
<option value='1983'>1983</option>
<option value='1984'>1984</option>
<option value='1985'>1985</option>
<option value='1986'>1986</option>
<option value='1987'>1987</option>
<option value='1988'>1988</option>
<option value='1989'>1989</option>
<option value='1990'>1990</option>
<option value='1991'>1991</option>
<option value='1992'>1992</option>
<option value='1993'>1993</option>
<option value='1994'>1994</option>
<option value='1995'>1995</option>
<option value='1996'>1996</option>
<option value='1997'>1997</option>
<option value='1998'>1998</option>
<option value='1999'>1999</option>
<option value='2000'>2000</option>
<option value='2001'>2001</option>
<option value='2002'>2002</option>
<option value='2003'>2003</option>
<option value='2004'>2004</option>
<option value='2005'>2005</option>
<option value='2006'>2006</option>
<option value='2007'>2007</option>
<option value='2008'>2008</option>
<option value='2009'>2009</option>
<option value='2010'>2010</option>
<option value='2011'>2011</option>
<option value='2012'>2012</option>
<option value='2013'>2013</option>
<option value='2014'>2014</option>
<option value='2015'>2015</option>
<option value='2016'>2016</option>
<option value='2017'>2017</option>
<option value='2018'>2018</option>
<option value='2019'>2019</option>

</select>

<p class="word">EMAIL ID</p>
 <input type="email" name="email" value="<?php echo $row['email'] ; ?>">
 
 <p class="word" >MOBILE NUMBER</p>
 <input type="" name="mblnum"value="<?php echo $row['mobilenum'] ; ?>">
 <p>
<span class="word">GENDER &nbsp;</span>
Male<input style="position: relative;" type="radio" name="gender" value="male"  <?php if($row['gender'] == 'male' || 'Male') { ?>checked <?php } ?> >
 Female<input  style="position: relative;" type="radio" name="gender" value="female" <?php if($row['gender'] == 'female' || 'Female') { ?>checked <?php }?> ></p>

   <p class="word"> ADDRESS</p><textarea name="address" rows="4" cols="30" "><?php echo $row['address'];  ?></textarea>

<p class="word">CITY</p><input type="text" name="city"value="<?php echo $row['city'];  ?>">

<p class="word">EDUCATIONAL QUALIFICATION</p><input type="text" name="eduql"value="<?php echo $row['eduqual'];?>">
<p class="word">SCHOOL NAME</p><input type="text" name="scl"value="<?php echo $row['sclnam'] ;  ?>">
<p class="word">COLLEGE NAME</p><input type="text"  name="clg"value="<?php echo $row['colnam'];   ?>">
<p class="word">UNIVERSITY</p><input type="text"  name="unv"value="<?php echo $row['univernam'] ;   ?>">
<p class="word">Teaching Days Per Week</p><input type="text"  name="tdpw"value="<?php  echo $row['tdpw'];  ?>">
<p class="word">Subject Teaches</p><input type="text"  name="st"value="<?php echo $row['st'];   ?>">
<p class="word">Area</p><input type="text"  name="area"value="<?php echo $row['area'];   ?>">
<p class="word">Class You Teaches</p><input type="text"  name="cyt"value="<?php echo $row['cyt'];   ?>">
<br><br>
<input type="submit">&nbsp;<input type="reset">
</form>
<?php
}
}
else
{
 echo "0 results";
}

mysqli_close($conn);
?>


</body>
</html>
