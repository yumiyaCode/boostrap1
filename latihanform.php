<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>
        <body>
        <form ACTION="" METHOD="POST" NAME="input">
            <label>Nama saya</label>
            <input type="text" name="a" required><br>
            <label>Nilai 1</label>
            <input type="text" name="satu" required><br>
            <label>Nilai 2</label>
            <input type="text" name="dua" required><br><br>
            <input type="submit" name="simpan" value="simpan">
            <input type="reset" name="hapus" value="hapus">
</form>
<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['a'];
    $nilai1=$_POST['satu'];
    $nilai2=$_POST['dua'];
    $nilai3=($nilai1+$nilai2)/2;
    echo"<br>Nama saya : " .$nama;
    echo"<br>Nilai 1 : ".$nilai1;
    echo"<br>Nilai 2 : ".$nilai2;
    echo"<br>Rata Rata : ".$nilai3;


}
?>
        </body>

</html>
