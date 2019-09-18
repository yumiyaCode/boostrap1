<?php
session_start();

if(isset($_SESSION['login'])){
    //menampilkan
echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah
login</h2>";
echo "<h2>Klik <a href='sekonosunsion3.php'>di sini
</a> untuk LOGOUT</h2>";
}else{
    //sesion belum ada
    die("anda belum login!! anda belum terdaftar silahkan login
    <a href='sesion1.php'>di sini</a>");
}
?>