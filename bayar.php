<?php 
	include 'Koneksi/koneksi.php';

	$bayar = $_GET['id'];
$query = "UPDATE arisan SET status_bayar='sudah bayar' WHERE nama = '$bayar' ";

if($con->query($query)){
    header('location:index.php');
}

 ?>