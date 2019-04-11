<!DOCTYPE html>
<html>
<head>
	<title>Ubah</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="assets/css/demo.css" rel="stylesheet" />
	<style type="text/css">
		td{
			padding: 10px;
			font-size: 24px;
		}
	</style>
</head>
<body bgcolor="lightgrey" style=" font-family: times new roman;">
	<center>
		<br>
		<p style="font-size: 45px;"><b>Ubah Data</b></p>
	<div style="background-color: skyblue; border-radius: 5px; height: 260px; width: 625px; margin-top: 5%;">
<form action="edit.php" method="POST">
	<center>
		<table>
			<?php while ($a=mysqli_fetch_array($hasil)) {

			 ?>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" style="width: 260px; font-size:24px; color: black" class="form-control" placeholder="<?php echo $a['nama'] ?>" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" placeholder="<?php echo $a['alamat'] ?>" required class="form-control" style="font-size: 24px;"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $a['id'] ?>" ></td>
				<td><button style="width: 100px; height: 30px; border-radius: 5px; float: right; background-color: lightgrey;">simpan</button></td>
			</tr>
		<?php } ?>
		</table>

	</center>
</form>
</div>
</center>
</body>
</html>