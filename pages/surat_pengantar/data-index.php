<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM surat_pengantar";

$hasil = mysqli_query($db, $query);

$data_surat_pengantar = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_surat_pengantar[] = $row;
}

