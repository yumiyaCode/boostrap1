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

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <!-- end nav -->

  <!-- form -->
<div class="container-fluid" style="padding:50px;">
 <div class="row">
  <div class="col-md-12">
   <h1><center>Assalam Book Store</center></h1>
    <div class="card border-primary">
        <h6 class="card-header">Pembelian buku</h6>
         <div class="card-body">   

        <form ACTION="bookstore2.php" METHOD="POST">   
          <div class="form-group">
           <label for="">Nama:</label>
            <input type="text" class="form-control" name="nama">
             </div>

            <div class="form-group">
           <label for="">Alamat:</label>
       <input type="text" class="form-control" name="alamat">
         </div>
         
           <div class="form-group">
            <label for="">Jenis kelamin:</label> 
            <div class="form-check">
             <label class="form-check-label" for="radio1"> 
              <input type="radio" class="form-check-input" name="gender" id="radio1" value="pria">Laki Laki
               </label>
               </div>

              <div class="form-check">
            <label class="form-check-label" for="radio2">
           <input type="radio" class="form-check-input" name="gender" id="radio2" value="wanita">Perempuan
          </label></div>
          
          <div class="form-group" style="margin-top:10px;">
           <label for="">Tanggal Pembelian:</label>
            <input type="date" class="form-control" name="tgl">
             </div>

              <div class="form-group">
           <label for="">Jumlah Buku:</label>
        <input type="number" class="form-control" name="jum">
    </div>

              <div class="form-group">
        <input class="btn btn-primary" class="form-control" type="submit" value="Submit" name="simpan">
        <input class="btn btn-warning" class="form-control" type="reset" value="Reset" name="hapus">
      </div>

      </form>

        
</div>
 </div>
  </div>
   </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
   </body>
</html>