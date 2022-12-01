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
  <style>
    .table-container {
      overflow: auto;
    }
  </style>]
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

    <!--<div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>-->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <!--<li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a>-->
        <!-- End Notification Icon -->

        <!--<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul>-->
        <!-- End Notification Dropdown Items -->

        <!--</li>-->
        <!-- End Notification Nav -->

        <!--<li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a>-->
        <!-- End Messages Icon -->

        <!--<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul>-->
        <!-- End Messages Dropdown Items -->

        <!--</li>-->
        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['nama_users']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <?php echo $_SESSION['nama_users']; ?>
              <!--<span>Web Designer</span>-->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!--<li>
          <a class="dropdown-item d-flex align-items-center" href="profile.php">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>-->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <!--<li>
          <hr class="dropdown-divider">
        </li>-->

            <!--<li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>-->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" onclick="return confirm('Anda Yakin Ingin Keluar?')" href="logout.php">
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
        <!--<ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-general.php" class="active">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="tables-data.php">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>-->
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tambah_data_monitoring.php">
          <i class="bi bi-journal-text"></i><span>Input Data Monitoring</span>
          <!--<i class="bi bi-chevron-down ms-auto"></i>-->
        </a>
        <!--<ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="components-alerts.php">
          <i class="bi bi-circle"></i><span>Alerts</span>
        </a>
      </li>
      <li>
        <a href="components-accordion.php">
          <i class="bi bi-circle"></i><span>Accordion</span>
        </a>
      </li>
      <li>
        <a href="components-badges.php">
          <i class="bi bi-circle"></i><span>Badges</span>
        </a>
      </li>
      <li>
        <a href="components-breadcrumbs.php">
          <i class="bi bi-circle"></i><span>Breadcrumbs</span>
        </a>
      </li>
      <li>
        <a href="components-buttons.php">
          <i class="bi bi-circle"></i><span>Buttons</span>
        </a>
      </li>
      <li>
        <a href="components-cards.php">
          <i class="bi bi-circle"></i><span>Cards</span>
        </a>
      </li>
      <li>
        <a href="components-carousel.php">
          <i class="bi bi-circle"></i><span>Carousel</span>
        </a>
      </li>
      <li>
        <a href="components-list-group.php">
          <i class="bi bi-circle"></i><span>List group</span>
        </a>
      </li>
      <li>
        <a href="components-modal.php">
          <i class="bi bi-circle"></i><span>Modal</span>
        </a>
      </li>
      <li>
        <a href="components-tabs.php">
          <i class="bi bi-circle"></i><span>Tabs</span>
        </a>
      </li>
      <li>
        <a href="components-pagination.php">
          <i class="bi bi-circle"></i><span>Pagination</span>
        </a>
      </li>
      <li>
        <a href="components-progress.php">
          <i class="bi bi-circle"></i><span>Progress</span>
        </a>
      </li>
      <li>
        <a href="components-spinners.php">
          <i class="bi bi-circle"></i><span>Spinners</span>
        </a>
      </li>
      <li>
        <a href="components-tooltips.php">
          <i class="bi bi-circle"></i><span>Tooltips</span>
        </a>
      </li>
    </ul>-->
      </li><!-- End Components Nav -->

      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="ubah_data_monitoring.php">
          <i class="bi bi-journal-text"></i><span>Ubah Data</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>-->
      <!--<ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="forms-elements.php">
          <i class="bi bi-circle"></i><span>Form Elements</span>
        </a>
      </li>
      <li>
        <a href="forms-layouts.php">
          <i class="bi bi-circle"></i><span>Form Layouts</span>
        </a>
      </li>
      <li>
        <a href="forms-editors.php">
          <i class="bi bi-circle"></i><span>Form Editors</span>
        </a>
      </li>
      <li>
        <a href="forms-validation.php">
          <i class="bi bi-circle"></i><span>Form Validation</span>
        </a>
      </li>
    </ul>
  </li>-->
      <!-- End Forms Nav -->

      <!--<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.php">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
      <li>
        <a href="charts-apexcharts.php">
          <i class="bi bi-circle"></i><span>ApexCharts</span>
        </a>
      </li>
      <li>
        <a href="charts-echarts.php">
          <i class="bi bi-circle"></i><span>ECharts</span>
        </a>
      </li>
    </ul>
  </li>-->
      <!-- End Charts Nav -->

      <!--<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.php">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-remix.php">
          <i class="bi bi-circle"></i><span>Remix Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-boxicons.php">
          <i class="bi bi-circle"></i><span>Boxicons</span>
        </a>
      </li>
    </ul>
  </li>-->
      <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!--<li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.php">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li>-->
      <!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <!--<li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.php">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li>-->
      <!-- End Register Page Nav -->

      <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li>-->
      <!-- End Login Page Nav -->

      <!--<li class="nav-item">
    <a class="nav-link collapsed" href="pages-error-404.php">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li>-->
      <!-- End Error 404 Page Nav -->

      <!--<li class="nav-item">
    <a class="nav-link collapsed" href="pages-blank.php">
      <i class="bi bi-file-earmark"></i>
      <span>Blank</span>
    </a>
  </li>-->
      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <?php
	include 'config.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from monitoring where id_menara='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Input Data Monitoring</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active"><a href="monitoring.php">Lihat Data</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Data</h5>

              <!-- General Form Elements -->
              <form method="post" action="proses_editdata.php">
              <input type="hidden" name="id_menara" value="<?php echo $d['id_menara']; ?>">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kecamatan</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="kec" id="kec" value="<?php echo $d['kec']; ?>">
                      <!--<option selected>--- Silahkan Pilih Kecamatan ---</option>-->
                      <option value="Bagelen">Bagelen</option>
                      <option value="Banyuurip">Banyuurip</option>
                      <option value="Bayan">Bayan</option>
                      <option value="Bener">Bener</option>
                      <option value="Bruno">Bruno</option>
                      <option value="Butuh">Butuh</option>
                      <option value="Gebang">Gebang</option>
                      <option value="Grabag">Grabag</option>
                      <option value="Kaligesing">Kaligesing</option>
                      <option value="Kemiri">Kemiri</option>
                      <option value="Kutoarjo">Kutoarjo</option>
                      <option value="Loano">Loano</option>
                      <option value="Ngombol">Ngombol</option>
                      <option value="Pituruh">Pituruh</option>
                      <option value="Purwodadi">Purwodadi</option>
                      <option value="Purworejo">Purworejo</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="deskel" id="deskel" value="<?php echo $d['deskel']; ?>">
                      <!--<option selected>--- Silahkan Pilih Desa/Kelurahan ---</option>-->
                      <option value="Andong">Andong</option>
                      <option value="Bagelen">Bagelen</option>
                      <option value="Bakurejo">Bakurejo</option>
                      <option value="Baledono">Baledono</option>
                      <option value="Bandung">Bandung</option>
                      <option value="Bandung Kidul">Bandung Kidul</option>
                      <option value="Banyuasin Separe">Banyuasin Separe</option>
                      <option value="Banyuurip">Banyuurip</option>
                      <option value="Bapangsari">Bapangsari</option>
                      <option value="Bayem">Bayem</option>
                      <option value="Bedono Karangduwur">Bedono Karangduwur</option>
                      <option value="Besole">Besole</option>
                      <option value="Borokulon">Borokulon</option>
                      <option value="Botodaleman">Botodaleman</option>
                      <option value="Bragolan">Bragolan</option>
                      <option value="Jatingarang">Jatingarang</option>
                      <option value="Bringin">Bringin</option>
                      <option value="Brondongrejo">Brondongrejo</option>
                      <option value="Brunorejo">Brunorejo</option>
                      <option value="Butuh">Butuh</option>
                      <option value="Cangkrep Kidul">Cangkrep Kidul</option>
                      <option value="Cangkrep Lor">Cangkrep Lor</option>
                      <option value="Cepedak">Cepedak</option>
                      <option value="Cokroyasan">Cokroyasan</option>
                      <option value="Condongsari">Condongsari</option>
                      <option value="Dadirejo">Dadirejo</option>
                      <option value="Dewi">Dewi</option>
                      <option value="Dilem">Dilem</option>
                      <option value="Dolpang">Dolpang</option>
                      <option value="Donorejo">Donorejo</option>
                      <option value="Doplang">Doplang</option>
                      <option value="Durensari">Durensari</option>
                      <option value="Ganggeng">Ganggeng</option>
                      <option value="Gebang">Gebang</option>
                      <option value="Gedong">Gedong</option>
                      <option value="Geparang">Geparang</option>
                      <option value="Giri Mulyo">Giri Mulyo</option>
                      <option value="Grabag">Grabag</option>
                      <option value="Grantung">Grantung</option>
                      <option value="Jatikontal">Jatikontal</option>
                      <option value="Jatingaran">Jatingaran</option>
                      <option value="Jelok">Jelok</option>
                      <option value="Jenarkidul">Jenarkidul</option>
                      <option value="Jogoboyo">Jogoboyo</option>
                      <option value="Jogoresan">Jogoresan</option>
                      <option value="Jombang">Jombang</option>
                      <option value="Kaligintung">Kaligintung</option>
                      <option value="Kaliharjo">Kaliharjo</option>
                      <option value="Kalijambe">Kalijambe</option>
                      <option value="Kalikotes">Kalikotes</option>
                      <option value="Kalimeneng">Kalimeneng</option>
                      <option value="Kalinongko">Kalinongko</option>
                      <option value="Kaliwader">Kaliwader</option>
                      <option value="Kaliwungu">Kaliwungu</option>
                      <option value="Karang Luas">Karang Luas</option>
                      <option value="Katerban">Katerban</option>
                      <option value="Kebon Gunung">Kebon Gunung</option>
                      <option value="Kedung Pomahan Wetan">Kedung Pomahan Wetan</option>
                      <option value="Kedungkamal">Kedungkamal</option>
                      <option value="Kedungpucang">Kedungpucang</option>
                      <option value="Kembangkuning">Kembangkuning</option>
                      <option value="Kemiri Kidul">Kemiri Kidul</option>
                      <option value="Kemrnanggen">Kemrnanggen</option>
                      <option value="Kerep">Kerep</option>
                      <option value="Kesawen">Kesawen</option>
                      <option value="Keseneng">Keseneng</option>
                      <option value="Ketawangrejo">Ketawangrejo</option>
                      <option value="Ketosari">Ketosari</option>
                      <option value="Kledungkradenan">Kledungkradenan</option>
                      <option value="Kliwonan">Kliwonan</option>
                      <option value="Krandegan">Krandegan</option>
                      <option value="Kumpulsari">Kumpulsari</option>
                      <option value="Kutoarjo">Kutoarjo</option>
                      <option value="Lugosobo">Lugosobo</option>
                      <option value="Malangrejo">Malangrejo</option>
                      <option value="Maron">Maron</option>
                      <option value="Nampurejo">Nampurejo</option>
                      <option value="Nglaris">Nglaris</option>
                      <option value="Pacor">Pacor</option>
                      <option value="Pandanrejo">Pandanrejo</option>
                      <option value="Pangenjurutengan">Pangenjurutengan</option>
                      <option value="Pangenrejo">Pangenrejo</option>
                      <option value="Pasaranom">Pasaranom</option>
                      <option value="Patutrejo">Patutrejo</option>
                      <option value="Pejagran">Pejagran</option>
                      <option value="Pekacangan">Pekacangan</option>
                      <option value="Pekutan">Pekutan</option>
                      <option value="Pituruh">Pituruh</option>
                      <option value="Plipiran">Plipiran</option>
                      <option value="Popongan">Popongan</option>
                      <option value="Purwodadi">Purwodadi</option>
                      <option value="Purworejo">Purworejo</option>
                      <option value="Redin">Redin</option>
                      <option value="Seren">Seren</option>
                      <option value="Sidarum">Sidarum</option>
                      <option value="Sidomulyo">Sidomulyo</option>
                      <option value="Sindurejan">Sindurejan</option>
                      <option value="Soko">Soko</option>
                      <option value="Somongari">Somongari</option>
                      <option value="Sruwoh Dukuh">Sruwoh Dukuh</option>
                      <option value="Sruwohrejo">Sruwohrejo</option>
                      <option value="Sucen">Sucen</option>
                      <option value="Sudimoro">Sudimoro</option>
                      <option value="Suko Gelap">Suko Gelap</option>
                      <option value="Sumberagung">Sumberagung</option>
                      <option value="Sumbersari">Sumbersari</option>
                      <option value="Suren">Suren</option>
                      <option value="Tambakrejo">Tambakrejo</option>
                      <option value="Tanjunganom">Tanjunganom</option>
                      <option value="Tapen">Tapen</option>
                      <option value="Tegalmalang">Tegalmalang</option>
                      <option value="Tegalsari">Tegalsari</option>
                      <option value="Tepus Kulon">Tepus Kulon</option>
                      <option value="Tlepo">Tlepo</option>
                      <option value="Tlepok Kulon">Tlepok Kulon</option>
                      <option value="Trirejo">Trirejo</option>
                      <option value="Tursino">Tursino</option>
                      <option value="Ukirsari">Ukirsari</option>
                      <option value="Wangunrejo">Wangunrejo</option>
                      <option value="Wareng">Wareng</option>
                      <option value="Watukuro">Watukuro</option>
                      <option value="Wingkomulyo">Wingkomulyo</option>
                      <option value="Winong">Winong</option>
                      <option value="Winong Lor">Winong Lor</option>
                      <option value="Wironatran">Wironatran</option>
                      <option value="Wonosri">Wonosri</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Alamat Nama Jalan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_jalan" value="<?php echo $d['nama_jalan']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Alamat No.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_no" value="<?php echo $d['alamat_no']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Alamat Nama Dukuh</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_dukuh" value="<?php echo $d['nama_dukuh']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">RT.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="rt" value="<?php echo $d['rt']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">RW.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="rw" value="<?php echo $d['rw']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Perusahaan Menara</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="nama_perusahaan_menara"
                      id="nama_perusahaan_menara" >
                      <!--<option selected>--- Silahkan Pilih Nama Perusahaan Menara ---</option>-->
                      <option value="CMI (PT. Centratama Menara Indonesia)">CMI (PT. Centratama Menara Indonesia)</option>
                      <option value="EMS (PT. Era Mandiri Sejahtera)">EMS (PT. Era Mandiri Sejahtera)</option>
                      <option value="IBS (PT. Inti Bangun Sejahtera)">IBS (PT. Inti Bangun Sejahtera)</option>
                      <option value="INDOSAT (PT. Indosat Ooredpp Hutchinson)">INDOSAT (PT. Indosat Ooredpp Hutchinson)</option>
                      <option value="KIN (PT. Komet Infra Nusantara)">KIN (PT. Komet Infra Nusantara)</option>
                      <option value="Lainnya">Lainnya</option>
                      <option value="MITRATEL (PT. Daya Mitra Telekomunikasi)">MITRATEL (PT. Daya Mitra Telekomunikasi)</option>
                      <option value="MITRATEL (PT. Ex. Telkomsel)">MITRATEL (PT. Ex. Telkomsel)</option>
                      <option value="MITRATEL (PT. Ex. Telkomsel)">MITRATEL (PT. Ex. Telkomsel)</option>
                      <option value="STP (PT. Solusi Tunas Pratama)">STP (PT. Solusi Tunas Pratama)</option>
                      <option value="TBG (PT. Tower Bersama Group)">TBG (PT. Tower Bersama Group)</option>
                      <option value="telkomsTELKOMSEL (PT. Telkomsel)el">TELKOMSEL (PT. Telkomsel)</option>
                      <option value="TRIVIEW (PT. Triview Geospatial Mandiri)">TRIVIEW (PT. Triview Geospatial Mandiri)</option>
                      <option value="XL (PT. XL Axiata Tbk)">XL (PT. XL Axiata Tbk)</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Titik Koordinat Longitude</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="titik_koordinat_longitude" value="<?php echo $d['titik_koordinat_longitude']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Titik Koordinat Latitude</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="titik_koordinat_latitude" value="<?php echo $d['titik_koordinat_latitude']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Radius Rebahan Menara</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="radius_rebahan_menara" value="<?php echo $d['radius_rebahan_menara']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        <?php 
	}
	?>
        <!--<div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Advanced Form Elements</h5>-->

        <!-- Advanced Form Elements -->
        <!--<form>
                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Switches</label>
                  <div class="col-sm-10">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                      <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                      <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Ranges</label>
                  <div class="col-sm-10">
                    <div>
                      <label for="customRange1" class="form-label">Example range</label>
                      <input type="range" class="form-range" id="customRange1">
                    </div>
                    <div>
                      <label for="disabledRange" class="form-label">Disabled range</label>
                      <input type="range" class="form-range" id="disabledRange" disabled>
                    </div>
                    <div>
                      <label for="customRange2" class="form-label">Min and max with steps</label>
                      <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange2">
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Floating labels</label>
                  <div class="col-sm-10">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">Comments</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <label for="floatingSelect">Works with selects</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Input groups</label>
                  <div class="col-sm-10">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                      <span class="input-group-text">With textarea</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>

              </form>-->
        <!-- End General Form Elements -->

      </div>
      </div>

      </div>
      </div>
    </section>

  </main><!-- End #main -->
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