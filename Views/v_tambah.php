<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
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
		<p style="font-size: 45px;"><b>Tambah Anggota</b></p>
	<div style="background-color: skyblue; border-radius: 5px; height: 260px; width: 625px; margin-top: 5%;">
<form action="add.php" method="POST">
	<center>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" style="width: 260px;" class="form-control" required=""></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" class="form-control" style="font-size: 24px;" required=""></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button type="submit" style="width: 100px; float:right; height: 30px; border-radius: 5px; background-color: lightgrey;">simpan</button></td>
			</tr>
		</table>
	</center>
</form>
</div>
</div>
</body>
</html>