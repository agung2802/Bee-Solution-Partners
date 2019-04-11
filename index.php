<?php 
	include 'Koneksi/koneksi.php';
	
	if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];
			$result = mysqli_query($con,"SELECT * FROM arisan WHERE nama like '%$cari%' OR alamat like '%$cari%'");
	}
	else{
		$result = mysqli_query($con,"SELECT * FROM arisan");
	}
		$haha = mysqli_query($con,"SELECT * FROM arisan ORDER BY RAND() ");
	include 'Views/v_home.php';

 ?>