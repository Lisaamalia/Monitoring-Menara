<?php 

require_once("config.php");

$id = $_GET['id'];

$sql_delete = "DELETE FROM users WHERE id_users = '$id'";
mysqli_query($koneksi, $sql_delete);

echo "<script>alert('Berhasil Hapus');window.location='viewuser.php';</script>";