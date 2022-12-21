<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "sekolah";
$connect = mysqli_connect($host,$user,$pass) or die ("Koneksi ke database gagal");
mysqli_select_db($connect,$name) or die ("Database tidak tersedia");
?>