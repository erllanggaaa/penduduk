<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Aplikasi Pendataan Warga">
    <meta name="author" content="Murti Ayu Wijayanti">
    <link rel="icon" href="../../../favicon.ico">

    <title>Aplikasi Sistem Informasi Kelurahan Jatijajar</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTable CSS -->
    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/dashboard.css" rel="stylesheet">

    <!-- Date Range Picker style -->
    <link href="../../assets/css/daterangepicker.css" rel="stylesheet">

    <!-- Lightbox style -->
    <link href="../../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Bootstrap Select style-->
    <link rel="stylesheet" href="../../assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="../../aset/fa/css/font-awesome.css">
    <link rel="stylesheet" href="../../aset/plugins/select2/select2.min.css">

    <link rel="stylesheet" href="../../aset/assets/picker.css">
    <script src="../../aset/assets/slim.js"></script>
    <script src="../../aset/assets/picker.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />

    
  </head>

  <body>

    <?php include('../_partials/navbar.php') ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('../_partials/sidebar.php') ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
