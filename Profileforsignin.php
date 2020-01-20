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
.words{text-align: center;}
   body{
   background-color:#39A6DB;
   }
   form{border:2px dashed white;padding: 30px;width: 400px;margin:auto;line-height: 15px;font-family: o1;}
   .pr{text-align: center;font-family: o1;font-size: 50px;color: magenta;line-height: 55px;}
</style></head>
<body>
  <?php include 'signin.php';?>
    <form action="" method="POST" >
 <div class="pr">SIGN IN</div>
<p class="words"> <span class="word">SIGN IN AS &nbsp;</span>
TUTOR<input style="position: relative;" type="radio" name="signinas" value="tutor">
 GUARDIAN<input  style="position: relative;" type="radio" name="signinas" value="guardian"></p>
<p class="word"> NAME</p>
  <input type="text" name="name">
 <p class="word">PASSWORD</p><input type="password"  name="pass">
<p class="word">CONFIRM PASSWORD</p><input type="password"  name="cn password">
<br><br>
<input type="submit">&nbsp;<input type="reset">

</form>
</body>
</html>