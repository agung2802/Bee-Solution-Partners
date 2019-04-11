<?php 
	include 'Koneksi/koneksi.php';

		$hapus = $_GET['id'];
$query = "DELETE FROM arisan WHERE nama = '$hapus' ";

if($con->query($query)){
    header('location:index.php');
}
 ?>