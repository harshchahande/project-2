<?php
$login=0;
$invalid=0;

if(isset($_REQUEST['submit'])){
require('db.php');  
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    // query sting
    $q="SELECT * FROM users WHERE username='$username' AND password='$password'";

    $res=$conn->query($q);

    if($res->num_rows>0){
      $login=1;
        session_start();
        $_SESSION['username']=$username;
   header('location:home.php');
    }
    else{
$invalid=1;

    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

<style>
  
  .btn {
    background:rgb(59, 152, 223);
  }
  body{
    background-image:url(b.jpg);
    background-size:100% 100%;
    background-repeat:no-repeat;
    height: auto;
    width: 100%;
    font-family:'poppins',sans-serif;
  }
.container{
  width: 600px;
  background:rgb(0.12, 0.14, 0.33,0.4);
  color:white;
  padding:50px;
margin:auto;
margin-top:120px;
margin-bottom:200px;
box-shadow: 5px 10px black;
animation-name: login;
  animation-duration:10s;
  animation-timing-function: ease-out;
  animation-iteration-count:1;
  animation-direction: normal;
} 
@keyframes login {
  from {
    position: relative;
    left: 1300px;
  }
  to {
    position: relative;

    left:1%;
  }
}
button{
  background:rgb(0.12, 0.14, 0.33,0.4);
}
button:hover{
  background:#353899;

}
</style>

  <body>
  <?php
  if($invalid){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>error </strong>invalid details
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<?php
if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> your are successfully login in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

 
<div class="container   rounded-3  ">
<h2 class="text-center">LOGIN PAGE</h2>
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text"  class="form-control" placeholder="Enter your username" name="username" >

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="show"  placeholder="Enter your password" name="password" >
  </div>
  <div class="mb-2 text-end">
  <input type="checkbox" onclick="fun();"    name="" >
    <label for="exampleInputPassword1" class="form-label">Show Password</label>
  </div>
  <button type="submit" name="submit" value="submit"  class="py-2  rounded-3 text-light mt-3 w-100">login</button>
</form>
</div>
<script>
    let show=document.getElementById('show');
function fun(){
  if(show.type=='password'){
    show.type='text';
  }else{
    show.type='password';
  }
}
</script>
  </body>
</html>