<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$rt_rw = htmlspecialchars($_POST['rt_rw']);
$nama_ketua_rw = htmlspecialchars($_POST['nama_ketua_rw']);
$nama_wakil_rw = htmlspecialchars($_POST['nama_wakil_rw']);
$nama_sekretaris_rw = htmlspecialchars($_POST['nama_sekretaris_rw']);
$nama_wakil_sekretaris_rw = htmlspecialchars($_POST['nama_wakil_sekretaris_rw']);
$nama_bendahara_rw = htmlspecialchars($_POST['nama_bendahara_rw']);
$nama_ketua_rt = htmlspecialchars($_POST['nama_ketua_rt']);
$nama_wakil_rt = htmlspecialchars($_POST['nama_wakil_rt']);
$nama_sekretaris_rt = htmlspecialchars($_POST['nama_sekretaris_rt']);
$nama_wakil_sekretaris_rt = htmlspecialchars($_POST['nama_wakil_sekretaris_rt']);
$nama_bendahara_rt = htmlspecialchars($_POST['nama_bendahara_rt']);

$id_pengurus = htmlspecialchars($_POST['id_pengurus']);

$id_user = $_SESSION['warga']['id_warga'];

// update database

$query = "UPDATE pengurus SET rt_rw = '$rt_rw', nama_ketua_rw = '$nama_ketua_rw', nama_wakil_rw = '$nama_wakil_rw', nama_sekretaris_rw = '$nama_sekretaris_rw', nama_wakil_sekretaris_rw = '$nama_wakil_sekretaris_rw', nama_bendahara_rw = '$nama_bendahara_rw', nama_ketua_rt = '$nama_ketua_rt', nama_wakil_rt = '$nama_wakil_rt', nama_sekretaris_rt = '$nama_sekretaris_rt', nama_wakil_sekretaris_rt = '$nama_wakil_sekretaris_rt', nama_bendahara_rt = '$nama_bendahara_rt', id_user = '$id_user' WHERE pengurus.id_pengurus = $id_pengurus;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Mengubah Data Pengurus RT & RW Berhasil'); window.location.href='../pengurus'</script>";
} else {
  echo "<script>window.alert('Mengubah Data Pengurus RT & RW Gagal!'); window.location.href='../pengurus'</script>";
}
