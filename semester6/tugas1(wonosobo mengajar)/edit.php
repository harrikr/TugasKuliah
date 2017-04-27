<?php
	require('library.php');
 
	if(isset($_GET['kode'])){
	$Lib = new Library();
	$book = $Lib->editBuku($_GET['kode']);
	$edit = $book->fetch(PDO::FETCH_OBJ);
		echo '
			<!DOCTYPE html>
			<html lang="en">
			<head>
			<meta charset="UTF-8">
			<title>Add Book</title>
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<script src="bootstrap/js/bootstrap.min.js"></script>
			</head>
			<body>
			<div class="container">
			<h2>Ubah Data Buku</h2>
			<form action="edit.php" method="POST" class="form-group">
			Kode Buku: <input type="text" name="kode" value="'.$edit->kodeBuku.'" class="form-control"><br>
			Judul Buku: <input type="text" name="judul" value="'.$edit->judulBuku.'" class="form-control"><br>
			Pengarang Buku: <input type="text" name="pengarang" value="'.$edit->pengarang.'" class="form-control"><br>
			Penerbit Buku: <input type="text" name="penerbit" value="'.$edit->penerbit.'" class="form-control"><br>
			<input type="submit" name="updateBuku" value="Update" class="btn btn-info">
			</form>
			</div>
			</body>
			</html>
			';
	}
 
	if(isset($_POST['updateBuku'])){
	$kode = $_POST['kode'];
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
 
	$Lib = new Library();
	$upd = $Lib->updateBuku($kode, $judul, $pengarang, $penerbit);

	if($upd == "Success"){
		header('Location: list.php');
	}
	}
 
?>