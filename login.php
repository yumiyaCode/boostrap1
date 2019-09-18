<?php
session_start();
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //periksa login

    if($user == "abc" && $pass== "abc"){
        //membuat sesion
       $_SESSION['login']=$user;
       header("location:index.php");
       }
    } else{
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <title></title>
  </head>
  <body style="background-color:skyblue;">

<div class="container-fluid" style="padding:100px;">
 <div class="row">
  <div class="col-md-4 m-auto">
    <div class="card border-danger">
      <div class="card-body">
        <h4 class="card-title"><center>Login Here....</center></h4>

      <form ACTION="" METHOD="POST">   
       <div class="form-group">
         <label for="">Username:</label>
          <input type="text" class="form-control" name="user">
            </div>

      <div class="form-group">
        <label for="">Password:</label>
        <input type="password" class="form-control" name="pass">
      </div>

      <div class="form-group">
        <input class="btn btn-primary" class="form-control" type="submit" value="Submit" name="login">
      </div>

      </form>
      </div>
        </div>
          </div>

            <?php } ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
   </body>
</html>