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

if (isset($_POST['button'])) {
    $button = $_POST['button'];

    if ($button == "set" && isset($_POST['Pass'])) {
        setcookie("Password", $_POST['Pass'], time() + 500000, "/");
        echo "Password cookie set.";
    }

    if ($button == "show") {
        if (isset($_COOKIE['Password'])) {
            echo "Stored password: " . $_COOKIE["Password"];
        } else {
            echo "No password cookie set.";
        }
    }

    if ($button == "del") {
        setcookie("Password", "", time() - 3600, "/");
        echo "Password cookie deleted.";
    }
}


  include_once("./new.php");
  include_once("./new.php");
  include_once("./new.php");
  include_once("./new.php");

  ?>
</body>
</html>