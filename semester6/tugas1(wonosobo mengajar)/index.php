<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Tambah Donasi Buku</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Tambah Donasi Buku</h2>
<form action="index.php" method="POST" class="form-group row">
Kode Buku: <input type="text" name="kode" class="form-control"><br>
Judul Buku: <input type="text" name="judul" class="form-control"><br>
Pengarang Buku: <input type="text" name="pengarang" class="form-control"><br>
Penerbit Buku: <input type="text" name="penerbit" class="form-control"><br>
<input type="submit" name="tambahBuku" value="Simpan" class="btn btn-success">   <input type="reset" value="Reset" class="btn btn-warning">
</form>
</div>
</body>
</html>
	<?php
	require('Library.php');
	if(isset($_POST['tambahBuku'])){
	$kode = $_POST['kode'];
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	 
	$Lib = new Library();
	$add = $Lib->tambahBuku($kode, $judul, $pengarang, $penerbit);
	if($add == "Success"){
	header('Location: list.php');
	}
	}
	//menambahkan data ke database
	 
	?>