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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="/">BGsT.ID</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Latihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan2.php">latihan2</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">log out</a>
      </li>
      <li class="nav-item">
       <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Daftar Sekolah
        </button>
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

<!-- form -->

<div class="container">
 
 

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><center>PPDB SMK ASSALAAM</center></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form ACTION="" METHOD="POST">   
          <div class="form-group">
           <label for="">Nama:</label>
            <input type="text" class="form-control" name="nama">
             </div>

            <div class="form-group">
           <label for="">Alamat:</label>
          <textarea class="form-control" name="alamat"></textarea>
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
        
         

          <div class="form-group">
           <label for="">Asal sekolah:</label>
            <input type="text" class="form-control" name="asal">
             </div>
            
            <div class="form-group">
           <label for="">Bahasa indo:</label>
          <input type="number" class="form-control" name="bhs">
         </div>
        

         <div class="form-group">
           <label for="">IPA:</label>
          <input type="number" class="form-control" name="ipa">
         </div>
         

         <div class="form-group">
           <label for="">Matematika:</label>
          <input type="number" class="form-control" name="mtk">
         </div>
         

         <div class="form-group">
           <label for="">B inggris:</label>
          <input type="number" class="form-control" name="ea">
         </div>
         

         
      <div class="form-group">
        <input class="btn btn-primary" class="form-control" type="submit" value="Submit" name="simpan">
        <input class="btn btn-warning" class="form-control" type="reset" value="Reset" name="hapus">
      </div>

      </form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!--end form-->
 
            
      <!-- table -->
         <?php

        if(isset($_POST['simpan'])){
            $nama = $_POST['nama'];
            $ipa=$_POST['ipa'];
            $mtk=$_POST['mtk'];
            $bhs=$_POST['bhs'];
            $ea=$_POST['ea'];
            $alamat=$_POST['alamat'];
            $asl=$_POST['asal'];
            $kelamin=$_POST['gender'];
            $rata=($ipa+$mtk+$ea+$bhs)/4;

      ?>
           <div class="table-responsive">
           <table class="table">
             <tr>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Jenis Kelamin</th>
               <th>Asal Sekolah</th>
               <th>Bahasa.Indo</th>
               <th>MTK</th>
               <th>Ipa</th>
               <th>Bhs.Inggris</th>
               <th>Rata-Rata</th>
               <th>Keterangan</th>
             </tr>
              <tr>
               <td><label for=""><?php echo"$nama"; ?></label>
              </td>
               <td><label for=""><?php echo"$alamat"; ?></label>
              </td>
               <td><label for=""><?php echo"$kelamin"; ?></label>
              </td>
               <td><label for=""><?php echo"$asl"; ?></label>
              </td>
               <td><label for=""><?php echo"$bhs"; ?></label>
              </td>
               <td><label for=""><?php echo"$mtk"; ?></label>
              </td>
               <td><label for=""><?php echo"$ipa"; ?></label>
              </td>
               <td><label for=""><?php echo"$ea"; ?></label>
              </td>
            
              <td><label for=""><?php echo"$rata"; ?></label>
              </td>
              <td><label for="">
            <?php
               if($rata > 65){ ?>
                    <span class="badge badge-success">Lulus</span>

               <?php }else{ ?>

                   <span class="badge badge-danger">Tdk Lulus</span>
               <?php } ?>

                </label>
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