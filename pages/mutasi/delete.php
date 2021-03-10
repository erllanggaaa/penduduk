<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_mutasi = htmlspecialchars($_GET['id_mutasi']);

// delete database
$query = "DELETE FROM mutasi WHERE id_mutasi = $id_mutasi";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../mutasi'</script>";
} else {
  echo "<script>window.alert('Mutasi Warga Gagal Dihapus!'); window.location.href='../mutasi'</script>";
}
