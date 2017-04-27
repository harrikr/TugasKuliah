<?php
		class Library{
			public function __construct(){
			$this->db = new PDO('mysql:host=localhost;dbname=wonosobomembaca','root','');
		}
		//berfungsi membuat konstruktor aplikasi dan menginisialisasi variabel yang equal dengan objek untuk membuat koneksi database dengan teknik PDO.

		public function tambahBuku($kode, $judul, $pengarang, $penerbit){
		$sql = "INSERT INTO dbuku (kodeBuku, judulBuku, pengarang, penerbit) VALUES('$kode', '$judul', '$pengarang', '$penerbit')";
		$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
				}	

			else{
				return "Success";
				}
			}
		//method yang berfungsi untuk menambah buku baru ke database			

		public function editBuku($kode){
		$sql = "SELECT * FROM dbuku WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
		return $query;
		}
		//method yang berfungsi untuk mengedit data

		public function updateBuku($kode, $judul, $pengarang, $penerbit){
		$sql = "UPDATE dbuku SET judulBuku='$judul', pengarang='$pengarang', penerbit='$penerbit' WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
				}
			else{
			return "Success";
		}
		}
		//method untuk mengupdate data yang ada di database

		public function tampildbuku(){
		$sql = "SELECT * FROM dbuku";
		$query = $this->db->query($sql);
		return $query;
		}
		//method untuk menampilkan data yang ada di database

		public function hapusBuku($kode){
		$sql = "DELETE FROM dbuku WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
		}
		//method untuk menghapus data yang ada di database
}
?>