<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM warga WHERE level_warga='RT' OR level_warga='RW' OR level_warga='Lurah' OR level_warga='Admin'";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
