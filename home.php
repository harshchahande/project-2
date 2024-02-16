<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body{
      background:rgb(66, 108, 180,0.5);;
      background-image:url(city.jpg);
      width: 100%;
      height:650px;
      background-size:100% 100%;
      background-repeat:no-repeat;
    }
    img {
 animation-name: img;
  animation-duration:10s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-direction: normal; 
}

@keyframes img {
  from {
    position: relative;
    left: -580px;
  }
  to {
    position: relative;
    rotate: -10deg;
    left:120%;
  }
}
h1{
  text-shadow: 2px 2px 5px #1F2355;
}
  </style>
  
  <body class="container">

  <h1 class=" text-center text-light mt-5 text-shadow">Welcome <?php echo $_SESSION['username'] ?></h1>

<p> <a class="btn btn-outline-light" href="logout.php">logout</a></p>
 
<img class="mt-5 pt-5" src="pngwing.com.png" alt="" width="30%" >


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>