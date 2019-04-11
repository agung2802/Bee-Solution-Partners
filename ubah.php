<?php 
	include 'Koneksi/koneksi.php';

	$nama = $_GET['id'];
	$hasil = mysqli_query($con,"SELECT * FROM arisan WHERE id='$nama'");

	include 'Views/v_ubah.php'
 ?>