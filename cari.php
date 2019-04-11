<?php 
	include 'Koneksi/koneksi.php';

	$cari = $_POST['cari'];
$result = "SELECT * FROM arisan WHERE nama='$cari' OR alamat='$cari'";

if($con->query($result)){
    header('location:index.php');
}

 ?>