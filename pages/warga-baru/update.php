<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

$get_id_warga = $_GET['id_warga'];

// update database

$query = "UPDATE warga SET tampil = 'Y', updated_at = CURRENT_TIMESTAMP WHERE id_warga = '$get_id_warga'";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Konfirm Data Warga Berhasil'); window.location.href='../warga-baru'</script>";
} else {
  echo "<script>window.alert('Konfirm Data Warga Gagal!'); window.location.href='../warga-baru'</script>";
}
