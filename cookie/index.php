<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form{
      width: fit-content;
      margin: 100px auto;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <input type="password" name="Pass">
    <button name="button" value="set" >Set Password</button>
    <button name="button" value="show"  >Show password</button>
    <button name="button" value="del" > Del password</button>
  </form>
  <?php

  if(isset($_REQUEST['button'])){
    if($_POST['button']=="set"){
      setcookie("Password",$_POST['Pass'],time()+(5),true);
    }
    if($_POST['button']=="show"){
      echo $_COOKIE["Password"];
    }
    if($_POST['button']=="del"){
      setcookie("Password",null,-1);

    }
  }
  include_once("./new.php");
  include_once("./new.php");
  include_once("./new.php");
  include_once("./new.php");

  ?>
</body>
</html>