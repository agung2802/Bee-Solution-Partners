<?php 
	include 'Koneksi/koneksi.php';

  if($_SERVER['REQUEST_METHOD']=="POST"){
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $id = $_POST['id'];

  $sql = "UPDATE arisan SET 
  nama = '$nama',
  alamat = '$alamat'
  WHERE id='$id'
  ";

    $result  = $con->query($sql)or die($con->error);
    if($result){
      header('location:index.php');
    }
    else{
      echo "gagal";
    }
  }
 ?>