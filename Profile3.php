<html>
<head><style type="text/css">
   
        @font-face {
    font-family: 'o1';
    src: url('Fedra-SerifA.ttf');
}
p{color: white; font-size: 60px;text-align: center; opacity: 0.93;margin-top: 90px;}
a{text-decoration:none;margin-top:40px;}
a:hover{color: blue;}
.fr{height: 100px;width:200px; font-size: 25px;background-color:orange;text-align: center;margin:auto;line-height: 45px;}
   body{
   background-color:#08D7A3;
   }
   form{border:2px dashed white;padding: 30px;width: 400px;margin:auto;line-height: 15px;font-family: o1;}
   .pr{text-align: center;font-family: o1;font-size: 50px;color: magenta;line-height: 55px;}
</style></head>
<body>
  <p>SIGN UP SUCCESSFULL</p>
  <div class="fr"><a href="http://localhost/Project411/<?php session_start(); echo $_SESSION["signupas"];?>form.php">CREATE YOUR PROFILE</a></div>
</body>
</html>