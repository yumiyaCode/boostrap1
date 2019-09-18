<?php

session_start();
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //periksa login

    if($user == "BB" && $pass== "123"){
        //membuat sesion
        $_SESSION['login']=$user;
        //hal pemeriksaan sesion
        echo"<h1>anda berhasil login</h1>";
        echo"<h2>klik 
        <a href='sesion2.php'>di sini</a>
        untuk menuju halaman pemeriksaan";
       }
    } else{
    ?>
    <html>
         <head>
             <title>Login here</title>
    </head>
    <body>
    <form action="" method="post">
<h2>Login Here...</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="login" value="Log In">
</form>
    </body>
</html>
    <?php } ?>