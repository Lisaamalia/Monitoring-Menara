<?php

// koneksi database
include("config.php");

// cek apakah tombol edit sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form
$id_users = $_POST['id_users'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama_users = $_POST['nama_users'];
$jabatan = $_POST['jabatan'];
$jk = $_POST['jk'];

    // buat query update
    $sql = "UPDATE users SET email='$email', password='$password', nama_users='$nama_users', jabatan='$jabatan', jk='$jk' WHERE id_users='$id_users'";

    $query = mysqli_query($koneksi,$sql);

// apakah query update berhasil?
    if( $query ) {
			
        echo '
        <script>alert("Data Berhasil Diupdate! Silahkan Login Kembali");window.location="index.php"</script>;
        ';
		

    } else {
        // jika gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


}     

                    
  
                    
?>