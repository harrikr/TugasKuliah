<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Daftar Buku</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h2>Daftar Buku yang Tersedia</h2>
<table class="table">
<tr>
<td>Kode Buku</td>
<td>Judul Buku</td>
<td>Pengarang Buku</td>
<td>Penerbit Buku</td>
<td></td>
<td></td>
</tr>
		<?php
		require("library.php");
		$Lib = new Library();
		$tampil = $Lib->tampildbuku();
		while($data = $tampil->fetch(PDO::FETCH_OBJ)){
		echo "
		<tr>
		<td>$data->kodeBuku</td>
		<td>$data->judulBuku</td>
		<td>$data->pengarang</td>
		<td>$data->penerbit</td>
		<td><a class='btn btn-danger' href='list.php?delete=$data->kodeBuku'>Delete</a></td>
		<td><a class='btn btn-info' href='edit.php?kode=$data->kodeBuku'>Edit</td>
		</tr>";
		};
		?>

</table>
<a href="index.php" class="btn btn-success">Tambah Buku Baru</a>
</div>
</body>
</html>
 
<?php
if(isset($_GET['delete'])){
$del = $Lib->hapusBuku($_GET['delete']);
 
}
?>