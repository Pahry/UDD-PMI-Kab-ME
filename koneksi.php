<?php 

$conn =mysqli_connect("localhost","root","","utdpmi");

$hasil = mysqli_query($conn, "SELECT * FROM golda");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<th>No</th>
		<th>Golongan Darah</th>
		<th>Stok</th>
		<th>Keterangan</th>
	</tr>
	<?php $no=1; foreach ($hasil as $hsl ) { ?>
	<tr>
		<td><?php echo $no;?></td>
		<td><?php echo $hsl['golda']; ?></td>
		<td><?php echo $hsl['stok']; ?></td>
		<td><?php echo $hsl['keterangan']; ?></td>
	</tr>
<?php  $no++; }; ?>
</table>
<a href="tambahdarah.php">Tambah Data Stok Darah</a>
</body>
</html>