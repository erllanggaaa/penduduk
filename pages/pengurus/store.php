<?php
session_start();
if (!isset($_SESSION['warga'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$rw = htmlspecialchars($_POST['rw']);
$rt = htmlspecialchars($_POST['rt']);
$nama_ketua_rw = htmlspecialchars($_POST['nama_ketua_rw']);
$alamat_ketua_rw = htmlspecialchars($_POST['alamat_ketua_rw']);
$nama_wakil_rw = htmlspecialchars($_POST['nama_wakil_rw']);
$alamat_wakil_rw = htmlspecialchars($_POST['alamat_wakil_rw']);
$nama_sekretaris_rw = htmlspecialchars($_POST['nama_sekretaris_rw']);
$alamat_sekretaris_rw = htmlspecialchars($_POST['alamat_sekretaris_rw']);
$nama_wakil_sekretaris_rw = htmlspecialchars($_POST['nama_wakil_sekretaris_rw']);
$alamat_wakil_sekretaris_rw = htmlspecialchars($_POST['alamat_wakil_sekretaris_rw']);
$nama_bendahara_rw = htmlspecialchars($_POST['nama_bendahara_rw']);
$alamat_bendahara_rw = htmlspecialchars($_POST['alamat_bendahara_rw']);
$nama_ketua_rt = htmlspecialchars($_POST['nama_ketua_rt']);
$alamat_ketua_rt = htmlspecialchars($_POST['alamat_ketua_rt']);
$nama_wakil_rt = htmlspecialchars($_POST['nama_wakil_rt']);
$alamat_wakil_rt = htmlspecialchars($_POST['alamat_wakil_rt']);
$nama_sekretaris_rt = htmlspecialchars($_POST['nama_sekretaris_rt']);
$alamat_sekretaris_rt = htmlspecialchars($_POST['alamat_sekretaris_rt']);
$nama_wakil_sekretaris_rt = htmlspecialchars($_POST['nama_wakil_sekretaris_rt']);
$alamat_wakil_sekretaris_rt = htmlspecialchars($_POST['alamat_wakil_sekretaris_rt']);
$nama_bendahara_rt = htmlspecialchars($_POST['nama_bendahara_rt']);
$alamat_bendahara_rt = htmlspecialchars($_POST['alamat_bendahara_rt']);

$id_user = $_SESSION['warga']['id_warga'];

// masukkan ke database

$query = "INSERT INTO pengurus (id_pengurus, rw, rt, nama_ketua_rw, alamat_ketua_rw, nama_wakil_rw, alamat_wakil_rw, nama_sekretaris_rw, alamat_sekretaris_rw, nama_wakil_sekretaris_rw, alamat_wakil_sekretaris_rw, nama_bendahara_rw, alamat_bendahara_rw, nama_ketua_rt, alamat_ketua_rt, nama_wakil_rt, alamat_wakil_rt, nama_sekretaris_rt, alamat_sekretaris_rt, nama_wakil_sekretaris_rt, alamat_wakil_sekretaris_rt, nama_bendahara_rt, alamat_bendahara_rt, id_user) VALUES ('', '$rw', '$rt', '$nama_ketua_rw', '$alamat_ketua_rw', '$nama_wakil_rw', '$alamat_wakil_rw', '$nama_sekretaris_rw', '$alamat_sekretaris_rw', '$nama_wakil_sekretaris_rw', '$alamat_wakil_sekretaris_rw', '$nama_bendahara_rw', '$alamat_bendahara_rw', '$nama_ketua_rt', '$alamat_ketua_rt', '$nama_wakil_rt', '$alamat_wakil_rt', '$nama_sekretaris_rt', '$alamat_sekretaris_rt', '$nama_wakil_sekretaris_rt', '$alamat_wakil_sekretaris_rt', '$nama_bendahara_rt', '$alamat_bendahara_rt', '$id_user');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Menambah Data Pengurus RT & RW Berhasil'); window.location.href='../pengurus/'</script>";
} else {
  echo "<script>window.alert('Menambah Data Pengurus RT & RW Gagal!'); window.location.href='../pengurus/'</script>";
}
