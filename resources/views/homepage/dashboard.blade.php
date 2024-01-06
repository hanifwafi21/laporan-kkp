
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My PLN | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
   <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../font/css/all.css">

  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <div class="navbar center">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </div>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="../../dist/img/pln.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">My PLN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="/dashboard" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="nav-icon fa-solid fa-list"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                    IT Goverment
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/perdirs" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Perdir</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itgoverment/iso.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ISO</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itgoverment/sop.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>SOP</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itgoverment/itmp.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ITMP</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itgoverment/itroadmap.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>IT Roadmap</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itgoverment/itmaturity.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>IT Maturity Level</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itgoverment/itrisk.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>IT Risk Management</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    IT Infrastructure
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/itinfrastructure/assetit.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Asset It</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itinfrastructure/networking.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Networking</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itinfrastructure/scada.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Scada</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itinfrastructure/backup.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Backup</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itinfrastructure/checklist.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Checklist</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-brands fa-stack-overflow"></i>
                  <p>
                    IT Software
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/itsoftware/ca.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>CA</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itsoftware/cr.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>CR</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itsoftware/lisensi.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lisensi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-radio"></i>
                  <p>
                    IT Multimedia
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/forms/visual.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Design Visual</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/forms/video.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Design Video</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/forms/awarness.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Awareness IT</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-receipt"></i>
                  <p>
                    IT Keuangan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/itkeuangan/kontrak.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kontrak</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itkeuangan/tagihan.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tagihan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itkeuangan/operasi.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Anggaran Operasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/itkeuangan/investasi.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Anggaran Investasi</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-person"></i>
                  <p>
                    IT SDM
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../../pages/itsdm/sdm.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>SDM</p>
                      </a>
                    </li>
                    <li class="nav-item">
                    <a href="../../pages/itsdm/training.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Training</p>
                    </a>
                  </li>
                </ul>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/logout" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Logout
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                      <li class="nav-item">
                        <a href="pages/examples/forgot-password.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Forgot Password</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/recover-password.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Recover Password</p>
                        </a>
                      </li>
                    </ul>
                  </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 625.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="conten-fluid">
            {{-- stat box --}}
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>150</h3>

                        <p>Normal</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>53</h3>

                        <p>Pemeliharaan</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                      <div class="inner">
                        <h3>44</h3>

                        <p>Gangguan</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    </div>
                  </div>
            </div>
        </div>
    </section>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
</body>
</html>
