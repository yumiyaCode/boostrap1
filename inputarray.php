<html>
<head>
<title>Purche</title>
</head>
<body>
<center>
    <p>Form Array</p>
</center>
<fieldset>
    <legend>Form Array</legend>
    <form action="" method="GET">
        <label for="">Masukan Jumlah</label>
        <input type="number" name="jumlah" required>
        <br>
        <input type="submit" name="submit" value="Simpan">
        <hr>
</form>
<?php
if(isset($_POST['submit'])){
    $jml_form=$_GET['jumlah'];
    for($a=1; $a<=$jml_form; $a++){
    
?>
<form action="formarray.php" method="post">
    <label for="">Nama</label>
     <input type="text" name="nama[]" required>
     <label for="">Kelas</label>
     <input type="text" name="kelas[]" required>
     <br>
     <br>
     <!-- Red -->
<div class="progress">
  <div class="progress-bar bg-danger" style="width:50%"></div>
</div>
     

    <?php } ?>
    <input type="submit" name="sbm" value="Simpan">
    <input type="reset" value="Reset">

<?php } ?>

</fieldset>

</body>
</html>