<?php
session_start();
if(isset($_SESSION['login'])){
   echo"<a href='logout.php'>[logout]</a><br><br>";
}else{
    //sesion belum ada
    die("anda belum login!! anda belum terdaftar silahkan login
    <a href='sesion1.php'>di sini</a>");
}
if(isset($_POST['sbm'])){
    $x=$_POST['bil'];
    $y=$_POST['pangkat'];

   for ($a=0; $a < count($x); $a++) { //hitung ada berapa data di var x
       for ($z=1; $z <= $y[$a] ; $z++) { // kondisi apakah var y index 0 <= 1
           echo $x[$a];// var x index
           if ($z < $y[$a]) {// var z < var y index 0 jika iya z++1 lalu ke atas
             echo"x";
           }
      
       } 
  
   // jika var z sudah habis,dilanjut ke hasil lalu  for a di ulang ke atas dengan var a++
   $hasil= pow($x[$a], $y[$a]);
   echo" = ".$hasil ." ->";
   if ($hasil %2 == 1) {
       echo"bil ganjil";
       # code...
   }
   else{
         echo"bil genap"; 
   }
   echo"<hr>";
}
    }
