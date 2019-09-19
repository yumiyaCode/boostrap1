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

<?php
if(isset($_POST['sbm'])){
 
            $nama = $_POST['nama'];
            $alamat=$_POST['alamat'];
            $gender=$_POST['gender'];
            $tgl=$_POST['tgl'];
            $jum=$_POST['jum'];
 $judul=$_POST['jdl'];
 $kode=$_POST['kd'];
 $penga=$_POST['png'];
 $genre=$_POST['set1'];
 $harga=$_POST['har'];
 
?>
<div class="container-fluid" style="padding:50px;">
 <div class="row">
  <div class="col-md-12">
   <h1><center>Assalam Book Store</center></h1>
    <div class="card border-primary">
        <h6 class="card-header">Pembayaran Buku</h6>
         <div class="card-body">   
<?php
  for ($i=0; $i < count($judul); $i++) {?>
    <div class="table-responsive">
           <table class="table">
               <tr>
                   <th> Nama</th>
                   <th> Alamat</th>
                   <th> Jenis Kelamin</th>
                   <th> Jumlah</th>
                   <th> Tanggal Pembelian</th>
            </tr>
            <tr>
                <td><?php echo $nama;?></td>
                <td><?php echo $alamat;?></td>
                <td><?php echo $gender;?></td>
                <td><?php echo $jum;?></td>
                <td><?php echo $tgl;?></td>
            </tr>
   </table>
      </div>
   <?php } ?>
  <?php } ?>

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
