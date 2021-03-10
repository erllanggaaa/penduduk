<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM pengurus";

$hasil = mysqli_query($db, $query);

$data_pengurus = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pengurus[] = $row;
}

