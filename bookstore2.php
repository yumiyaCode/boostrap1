<?php 
    if(isset($_POST['simpan'])){
            $nama = $_POST['nama'];
            $alamat=$_POST['alamat'];
            $gender=$_POST['gender'];
            $tgl=$_POST['tgl'];
            $jum=$_POST['jum'];
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
             
  
<?php
if(isset($_POST['simpan'])){
    $jml_form=$_POST['jum'];
    for($a=1; $a<=$jml_form; $a++){
    
?>

        <form ACTION="hasil.php" METHOD="POST">   
          <div class="form-group">
           <label for="">Judul:</label>
            <input type="text" class="form-control" name="jdl[]">
             </div>

            <div class="form-group">
           <label for="">Kode Buku:</label>
            <input type="text" class="form-control" name="kd[]">
         </div>

          <div class="form-group">
           <label for="">Pengarang:</label>
            <input type="text" class="form-control" name="png[]">
             </div>

       <div class="form-group">
             <label for="">Jenis Buku:</label>
         <select class="form-control" id="sel1[]" name="set1[]">
        <option>Fiksi</option>
        <option>Novel</option>
        <option>Mangga</option>
        <option>Ensclopedia</option>
        <option>Majalah</option>
      </select>
      </div>

         <div class="form-group">
           <label for="">Harga Buku:</label>
        <input type="number" class="form-control" name="har[]">
    </div>

 <!-- Red -->
<div class="progress">
  <div class="progress-bar bg-dark" style="width:100%"></div>
</div>

    <?php } ?>
        <div class="form-group" style="padding:10px;">
         <input class="btn btn-primary" class="form-control" type="submit" value="sbm" name="sbm">
          <input class="btn btn-warning" class="form-control" type="reset" value="Reset" name="hapus">
            </form> 
           <?php } ?>

    <form ACTION="hasil.php" METHOD="POST">   
        <input type="hidden" class="form-control" name="nama" value="<?php echo $nama; ?>">
          <input type="hidden" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
            <input type="hidden" class="form-check-input" name="gender"  value="<?php echo $gender; ?>">
              <input type="hidden" class="form-control" name="tgl" value="<?php echo $tgl; ?>">   
               <input type="hidden" class="form-control" name="jum" value="<?php echo $jum; ?>">
           
                 
     

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