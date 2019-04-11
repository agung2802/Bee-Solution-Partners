<?php 
	include 'Koneksi/koneksi.php';

	$menang = $_GET['id'];
$query = "UPDATE arisan SET status_menang='sudah menang' WHERE nama = '$menang' ";

if($con->query($query)){
    header('location:index.php');
}

 ?>