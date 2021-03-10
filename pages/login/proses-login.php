<?php
session_start();
include('../../config/koneksi.php');

// ambil data
$username_warga = htmlspecialchars($_POST['username_warga']);
$password_warga = md5(htmlspecialchars($_POST['password_warga']));

// periksa username dan password
$query = "SELECT * FROM warga WHERE username_warga = '$username_warga' and password_warga = '$password_warga'";
$hasil = mysqli_query($db, $query);
$data_warga = mysqli_fetch_assoc($hasil);

// cek
if ($data_warga != null) {
  // jika warga dan password cocok
  $_SESSION['warga'] = $data_warga;
  header('Location: ../dasbor');
} else {
  // jika warga dan password tidak cocok
  echo "<script>window.alert('Username atau password salah'); window.location.href='../login'</script>";
}