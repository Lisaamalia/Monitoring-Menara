<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login

$email = $_POST['email'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi,"select * from users where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah email dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";

		$_SESSION["id_users"] = $data["id_users"];
        $_SESSION["nama_users"] = $data["nama_users"];
        $_SESSION["jabatan"] = $data["jabatan"];
        $_SESSION["jk"] = $data["jk"];
        $_SESSION["password"] = $data["password"];
		// alihkan ke dashboard dashboard admin
		header("location:dashboard_admin.php");
 
	// cek jika user login sebagai pengguna
	}else if($data['level']=="pengguna"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "pengguna";
		
		$_SESSION["id_users"] = $data["id_users"];
        $_SESSION["nama_users"] = $data["nama_users"];
        $_SESSION["jabatan"] = $data["jabatan"];
        $_SESSION["jk"] = $data["jk"];
        $_SESSION["password"] = $data["password"];
		// alihkan ke dashboard dashboard pengguna
		header("location:dashboard_pengguna.php");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke dashboard login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>