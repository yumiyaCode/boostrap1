<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION);
    session_destroy();

    echo"<h1>Anda berhasil log out</h1>";
    echo "<h2>Klik <a href='sesion1.php'>di sini
    </a>login kembali</h2>";
    echo"<h2>anda sekarang tidak dapat masuk ke halaman </h2>
    <a href='sesion1.php'>sesion2.php</a> lagi(harus login lagi)";
}