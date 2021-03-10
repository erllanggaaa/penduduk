<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_pengurus = htmlspecialchars($_GET['id_pengurus']);

// delete database
$query = "DELETE FROM pengurus WHERE id_pengurus = $id_pengurus";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../pengurus'</script>";
} else {
  echo "<script>window.alert('Data Pengurus RT & RW gagal dihapus!'); window.location.href='../pengurus'</script>";
}
