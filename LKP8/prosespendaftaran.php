<?php
include("config.php");

if(isset($_POST['daftar'])){

	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$sekolah = $_POST['sekolah_asal'];

	
  $query = pg_query("INSERT INTO calonsiswa (nama, alamat, jenis_kelamin, sekolah_asal) VALUEs ('$nama', '$alamat', '$jk', '$sekolah')");

	
	if( $query==TRUE ) {
		
		header('Location: index.php?status=sukses');
	} else {
		
		header('Location: index.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
