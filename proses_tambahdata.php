<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_menara = $_POST['id_menara'];
$kec = $_POST['kec'];
$deskel = $_POST['deskel'];
$nama_jalan = $_POST['nama_jalan'];
$alamat_no = $_POST['alamat_no'];
$nama_dukuh = $_POST['nama_dukuh'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$nama_perusahaan_menara = $_POST['nama_perusahaan_menara'];
$titik_koordinat_longitude = $_POST['titik_koordinat_longitude'];
$titik_koordinat_latitude = $_POST['titik_koordinat_latitude'];
$radius_rebahan_menara = $_POST['radius_rebahan_menara'];
 
// menginput data ke database

 $query = "INSERT INTO monitoring SET 
	id_menara = '$id_menara',
	kec = '$kec',
	deskel = '$deskel',
	nama_jalan = '$nama_jalan',
	alamat_no = '$alamat_no',
	nama_dukuh = '$nama_dukuh',
	rt = '$rt',
	rw = '$rw',
	nama_perusahaan_menara = '$nama_perusahaan_menara',
	titik_koordinat_longitude = '$titik_koordinat_longitude',
	titik_koordinat_latitude = '$titik_koordinat_latitude',
	radius_rebahan_menara = '$radius_rebahan_menara'";
 mysqli_query($koneksi, $query)
	or die("SQL Error " . mysqli_error());
	echo "<script>alert('Data Berhasil Ditambahkan');window.location='monitoring.php';</script>";
?>