<?php

// menghubungkan php dengan koneksi database
include 'config.php';

$nama_users = $_POST['nama_users']; 
$email = $_POST['email']; 
$jk = $_POST['jk']; 
$jabatan = $_POST['jabatan']; 
$password = $_POST['password']; 
$level = "pengguna"; 

$simpan = $_POST ['daftar'];

if ($simpan) {
        
    $sql = "INSERT INTO users(nama_users,email,jk, jabatan, password,level) VALUES ('$nama_users', '$email','$jk', '$jabatan', '$password', '$level')";

$query=mysqli_query($koneksi, $sql);

mysqli_close($koneksi); 
//jika berhasil membuat users baru maka akan diarahkan ke form login
echo "<script>alert('Berhasil Buat Akun!');window.location='index.php';</script>";
}

?>