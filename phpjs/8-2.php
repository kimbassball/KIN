<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인2</title>
  </head>
  <body>
    <h1>php</h1>
    <?php
      $password =  $_GET["password"];
    if($password == "1111"){
      echo "어서오세요.";
    }
    else{
     echo "저리가세요.";
    }
    ?>
  </body>
</html>
