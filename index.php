<?php 
session_start();
if(isset($_SESSION['login'])){
    //menampilkan

}else{
    //sesion belum ada
    die("anda belum login!! anda belum terdaftar silahkan login
    <a href='login.php'>di sini</a>");
}
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
  <body>

    <!-- header -->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="/">BGsT.ID</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="latihan1.php">Latihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan2.php">latihan2</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">log out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn bg-warning btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<!-- end header -->
<!-- content -->
<div class="container-fluid" style="padding:10px;">
<div class="jumbotron">
  <h1 class="display-4">Hello, Bangsat!</h1>
  <p class="lead"><p>Ini merupakan tempat dimana <b>Bangsat</b> dapat berkumpul dan bersuka ria.</p>
  <hr class="my-4">
  <p>So just enjoy your life dude.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
</div>

<div class="container">
  <center><h1><b>Anggota kita yang terkenal</b></h1></center>
<div class="card-deck">
  <div class="row">
  <div class="card" style="width:200px">
  <img class="card-img-top" src="/assets/img/YANDERE-aac64bb7-eddb-49c3-b324-b60f9741ac47_ANIME_ILLUST.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Patrick</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  <div class="card" style="width:200px">
  <img class="card-img-top" src="/assets/img/IMG-gdexo0us.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
 <div class="card" style="width:200px">
  <img class="card-img-top" src="/assets/img/YANDERE-aac64bb7-eddb-49c3-b324-b60f9741ac47_ANIME_ILLUST.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
 <div class="card" style="width:200px">
  <img class="card-img-top" src="/assets/img/IMG-gdexo0us.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
<div class="card" style="width:200px">
  <img class="card-img-top" src="/assets/img/YANDERE-aac64bb7-eddb-49c3-b324-b60f9741ac47_ANIME_ILLUST.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
</div>
</div>

<!-- form -->
<div class="container-fluid" style="padding:50px;">
 <div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><center>pendaftaran anggota</center></h4>

      <form ACTION="" METHOD="POST">   
       <div class="form-group">
         <label for="">Name:</label>
          <input type="text" class="form-control" name="nama">
            </div>

      <div class="form-group">
        <label for="">Pangkat:</label>
        <input type="text" class="form-control" name="pangkat">
      </div>

      <div class="form-group">
        <input class="btn btn-primary" class="form-control" type="submit" value="Submit" name="simpan">
        <input class="btn btn-warning" class="form-control" type="reset" value="Reset" name="hapus">
      </div>

      </form>
      </div>
        </div>
          </div>
 
            
      <!-- table -->
      
       <div class="col-md-4 ">
         <div class="card" style="backgroud-color:blue;">
         <?php

        if(isset($_POST['simpan'])){
            $nama = $_POST['nama'];
            $pangkat=$_POST['pangkat'];
      ?>
           <div class="table-responsive">
           <table class="table">
             <tr>
               <th>Nama</th>
               <th>Pangkat</th>
             </tr>
              <tr>
               <td><label for=""><center><?php echo"$nama"; ?></center></label>
              </td>
               <td><label for=""><center><?php echo"$pangkat"; ?></center></label>
              </td>
             </tr>
           </table>
        </div>

<?php
}
?>
<!-- end table -->
       </div>
        </div>
          </div>
           </div>


      
            <!-- footer --->
<div class="card text-center">
  <div class="card-header-dark bg-danger text-white">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Saya ucap terima kasih</h5>
    <p class="card-text">untuk kalian Para bangsat.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

<!-- end footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
   </body>
</html>