<?php 
$koneksi = mysqli_connect("localhost","root","","login");

if(mysqli_connect_error()){
      echo"koneksi gagal" . mysqli_connect_error();}
?>