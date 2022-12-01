<?php 

require_once("config.php");

$id = $_GET['id'];

$sql_delete = "DELETE FROM monitoring WHERE id_menara = '$id'";
mysqli_query($koneksi, $sql_delete);

echo "<script>alert('Berhasil Hapus');window.location='monitoring.php';</script>";