<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>SIP &mdash; <?php echo $title ?></title>

  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/demo.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('nama') ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo site_url('auth/logout') ?>" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SIP</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="<?php echo base_url() ?>dist/img/avatar/avatar-1.jpeg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo $this->session->userdata('nama') ?></div>
              <div class="user-role">
              <?php echo $this->session->userdata('level') ?>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
              <a href="<?php echo site_url('page') ?>"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Data</li>
            <li>
              <a href="<?php echo site_url('page/jenis') ?>"><i class="ion ion-android-car"></i><span>Jenis Kendaraan</span></a>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Parkir</span></a>
              <ul class="menu-dropdown">
                <li><a href="<?php echo site_url('page/sedang_parkir') ?>"><i class="ion ion-checkmark-round"></i> Sedang Parkir</a></li>
                <li><a href="<?php echo site_url('page/sudah_keluar') ?>"><i class="ion ion-close-round"></i>Sudah Keluar</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo site_url('page/Petugas') ?>"><i class="ion ion-person"></i><span>Petugas</span></a>
            </li>
            <li>
              <a href="<?php echo site_url('auth/logout') ?>"><i class="ion ion-log-out"></i><span>Logout</span></a>
            </li>
          </ul>
        </aside>
      </div>