<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      text-decoration: none;
    }
    nav ul{
      display: flex;
      background-color: black;
      color: white;
    }
    ul li a {
      padding: 5px 20px;
      display: inline-block;
      color: white;
      position: relative;
      &:hover{
        background-color: white;
        color: black;
              &::after{
        content: "";
        height: 10px;
        width: 10px;
        border-radius: 100%;
        background-color: red;
        position: absolute;
        left: 80%;
      }
      }

    }

  </style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Message</a></li>
      <li><a href="">Address</a></li>
      <li><a href="">Shop</a></li>
      <li><a href="">Contact</a></li>
    </ul>
  </nav>
</body>
</html>