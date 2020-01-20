 <?php include 'insertdata2.php';?>
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
</style></head>
<body>
    <form action="" method="POST" >
 <div class="pr">PROFILE <p>CREATING</p></div>
<p class="word">EMAIL ID</p>
 <input type="email" name="email">
 
 <p class="word">MOBILE NUMBER</p>
 <input type="" name="mblnum">
 <p>
<span class="word">GENDER &nbsp;</span>
Male<input style="position: relative;" type="radio" name="gender" value="male">
 Female<input  style="position: relative;" type="radio" name="gender" value="female"></p>

   <p class="word"> ADDRESS</p><textarea name="address" rows="4" cols="30"></textarea>
   <p class="word">DISTRICT</p><input type="text" name="dst">
<p class="word">VILLAGE</p><input type="text" name="vlg">
<p class="word">CITY</p><input type="text" name="city">
<p class="word">POST OFFICE</p><input type="NUMBER" name="po">
<p class="word">CLASS</p><input type="text" name="cls">
<p class="word">SUBJECTS</p><input type="text" name="sbj">
<p class="word">DAYS OF TEACHING PER WEEK</p><input type="text" name="wk">

<p class="word">SCHOOL NAME</p><input type="text" name="scl">
<p class="word">COLLEGE NAME</p><input type="text"  name="clg">
<p class="word">DESIRED GENDER OF TUTOR</p><input type="text"  name="dsg">
<br><br>
<input type="submit">&nbsp;<input type="reset">
</body>
</form>
</body>
</html>