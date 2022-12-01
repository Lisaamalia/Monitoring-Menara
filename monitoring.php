<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Menara</title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/img/menara2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- datatable style -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  <!-- jquery -->
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>

<body>
  <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/menara2.png" alt="">
        <span class="d-none d-lg-block">Menara</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profil.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['nama_users']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <?php echo $_SESSION['nama_users']; ?>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" onclick="return confirm('Anda Yakin Ingin Keluar?')"
                href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard_admin.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="monitoring.php">
          <i class="bi bi-layout-text-window-reverse"></i><span>Monitoring Menara</span>
          <!--<i class="bi bi-chevron-down ms-auto"></i>-->
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tambah_data_monitoring.php">
          <i class="bi bi-journal-text"></i><span>Input Data Monitoring</span>
          <!--<i class="bi bi-chevron-down ms-auto"></i>-->
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="viewuser.php">
          <i class="bi bi-person"></i>
          <span>Lihat Pengguna</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Monitoring Menara</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div>
    <!-- membuat tabel -->
    <!--<div class="table-container">--->
    <table id="table_id" border=1 class="display" width="1500px">
      <thead>
        <tr>
          <th>No</th>
          <th>Kecamatan</th>
          <th>Desa/Kelurahan</th>
          <th>Nama Jalan</th>
          <th>Alamat No.</th>
          <th>Nama Dukuh</th>
          <th>RT</th>
          <th>RW</th>
          <th>Nama Perusahaan Menara</th>
          <th>Titik Koordinat Longitude</th>
          <th>Titik Koordinat Latitude</th>
          <th>Radius Rebahan Menara</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
            //include file database untuk dapat menggunakan fungsi-fungsi di dalamnya
            include "config.php";

            //membuat variabell index penomoran
            $no = 1;
            
            $select         = "select * from monitoring";
            $select         = mysqli_query($koneksi, $select);

            //melakukan perualangan data dengan while
            while($data= mysqli_fetch_array($select)){
        ?>
        <tr>
          <!-- menampilkan data -->
          <td><?php echo $no++; ?></td>
          <td><?php echo $data['kec']; ?></td>
          <td><?php echo $data['deskel']; ?></td>
          <td><?php echo $data['nama_jalan']; ?></td>
          <td><?php echo $data['alamat_no']; ?></td>
          <td><?php echo $data['nama_dukuh']; ?></td>
          <td><?php echo $data['rt']; ?></td>
          <td><?php echo $data['rw']; ?></td>
          <td><?php echo $data['nama_perusahaan_menara']; ?></td>
          <td><?php echo $data['titik_koordinat_longitude']; ?></td>
          <td><?php echo $data['titik_koordinat_latitude']; ?></td>
          <td><?php echo $data['radius_rebahan_menara']; ?></td>
          <td>
            <a href="ubah_data_monitoring.php?id=<?php echo $data['id_menara']; ?>">
              <i class="fa fa-edit" style="font-size:25px; color: #006400;"></i></a>
            <a href="hapus.php?id=<?php echo $data['id_menara']; ?>"
              onclick="return confirm('Anda Yakin Menghapus Data Ini?')">
              <i class="material-icons" style="font-size:25px; color : #CC0000;">&#xe872;</i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <!--</div>-->
    <!-- jquery datatable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>

    <!-- fungsi datatable -->
    <script>
      $(document).ready(function () {
        $('#table_id').DataTable();
      });
    </script>
  </main>
  <footer id="footer" class="footer">
    <div class="copyright"> © Copyright <strong><span>Menara</span></strong>. All Rights Reserved</div>
    <div class="credits"> Monitoring Menara <a href="#">2022</a></div>
  </footer> <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP"></script>
  <script>
    if (window.self == window.top) {
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-P7JSYB1CSP');
    }
  </script> <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
    style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>
</body>

</html>