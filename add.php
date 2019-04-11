<?php 
include 'Koneksi/koneksi.php';
  if($_SERVER['REQUEST_METHOD']=="POST"){
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];


  $sql = "INSERT INTO arisan(nama, alamat) VALUES (
  '$nama',
  '$alamat'
  )";

    $result  = $con->query($sql)or die($con->error);
    if($result){
      header('location:index.php');
    }
    else{
      echo "gagal";
    }
  }

 ?>