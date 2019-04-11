<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="assets/css/demo.css" rel="stylesheet" />
	<style type="text/css">
		table{
			border: 2px solid darkgrey;
			border-collapse: collapse;
		}
		tr{
			border: 2px solid darkgrey;
		}
		th{
			border: 2px solid darkgrey;
			padding: 15px;
			background-color: darkblue;
			color:white;
		}
		td{
			border: 2px solid darkgrey;
			padding: 15px;
			background-color: skyblue;
		}
	</style>
</head>
<body><center>
<div style=" border-radius: 5px;">
	<h1>Data Anggota Arisan</h1>
	<div style="float: right; margin-right:315px;">
		<form action="index.php" method="get">
	<input type="text" name="cari"><button type="submit" style="width: 100px; height: 25px; border-radius: 5px; background-color: lightgrey;">Cari</button>
</form>
	</div>
	<br><br>
	<table style="border : 1px solid #ddd; border-collapse: collapse;">
		<tr style="border: 1px solid #ddd;">
			<th>No</th>
			<th>Nama Anggota</th>
			<th>Alamat</th>
			<th>Status Bayar</th>
			<th>Status Menang</th>
			<th class="text-center">ACTION</th>
		</tr>
		<tr>
			<?php $no=1; while($ret=mysqli_fetch_array($result)) {
				
			 ?>
			<td><?php echo $no; ?></td>
			<td><?php echo $ret['nama'] ?></td>
			<td><?php echo $ret['alamat'] ?></td>
			<td><?php echo $ret['status_bayar'] ?></td>
			<td><?php echo $ret['status_menang'] ?></td>
			<td>
				<a href="ubah.php?id=<?php echo $ret['id'] ?>"><button style="color: black;  ">Ubah</button></a>
				<a href="hapus.php?id=<?php echo $ret['nama'] ?>"><button style="color: black;">Hapus</button></a>
				<a href="bayar.php?id=<?php echo $ret['nama'] ?>"><button style="color: black;">Bayar</button></a>

			</td>
		
		</tr>
		<?php $no++;
			}  ?>
	</table>

<br>
<br>

	<a href="tambah.php"><button class="btn btn-info">Tambah</button></a>
	<!-- Button trigger modal -->
<button class="btn btn-info" data-toggle="modal" data-target="#myModal">
  Kocok Arisan
</button>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Pemenang Arisan</h4>
      </div>
      <div class="modal-body">
        <?php $hasil=mysqli_fetch_array($haha);
        	echo $hasil['nama'];
         ?>
      </div>
      <div class="modal-footer">
        <a href="menang.php?id=<?php echo $hasil['nama'] ?>"><button class="btn btn-info btn-simple">Simpan</button></a>
      </div>
    </div>
  </div>
</div>
</div>
</center>
</body>

<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>