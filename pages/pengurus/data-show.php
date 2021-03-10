<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_pengurus = $_GET['id_pengurus'];

// ambil dari database
$query = "SELECT * FROM pengurus WHERE id_pengurus = $get_id_pengurus";

$hasil = mysqli_query($db, $query);

$data_pengurus = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pengurus[] = $row;
}
