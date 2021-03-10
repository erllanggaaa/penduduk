<?php
function is_active($page) {
  $uri = "$_SERVER[REQUEST_URI]";
  if (strpos($uri, $page)) {
    echo 'active';
  }
}
?>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('dasbor'); ?>">
    <a href="../dasbor"><i class="glyphicon glyphicon-home"></i> Beranda</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <?php if ($_SESSION['warga']['level_warga'] != 'RT' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Admin' && $_SESSION['warga']['level_warga'] != 'RW'): ?>
  <li class="<?php is_active('dataku'); ?>">
    <a href="../warga/show.php?id_warga=<?php echo $_SESSION['warga']['id_warga'] ?>"><i class="glyphicon glyphicon-user"></i> Dataku</a>
  </li>
  <li class="<?php is_active('editdataku'); ?>">
    <a href="../warga/edit.php?id_warga=<?php echo $_SESSION['warga']['id_warga'] ?>"><i class="glyphicon glyphicon-pencil"></i> Edit Dataku</a>
  </li>
<?php endif; ?>
  <?php if ($_SESSION['warga']['level_warga'] != 'RW' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
  <li class="<?php is_active('warga'); ?>">
    <a href="../warga"><i class="glyphicon glyphicon-book"></i> Data Warga</a>
  </li>
<?php endif; ?>
  <?php if ($_SESSION['warga']['level_warga'] != 'RT' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Admin' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
  <li class="<?php is_active('wargabaru'); ?>">
    <a href="../warga-baru"><i class="glyphicon glyphicon-book"></i> Konfirmasi Warga Baru</a>
  </li>
<?php endif; ?>
<?php if ($_SESSION['warga']['level_warga'] != 'Warga'): ?>
  <li class="<?php is_active('kartu-keluarga'); ?>">
    <a href="../kartu-keluarga"><i class="glyphicon glyphicon-inbox"></i> Data Kartu Keluarga</a>
  </li>
<?php endif; ?>
  <?php if ($_SESSION['warga']['level_warga'] != 'RW' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
  <li class="<?php is_active('mutasi'); ?>">
    <a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>
  </li>
<?php endif; ?>
  <?php if ($_SESSION['warga']['level_warga'] != 'Warga'): ?>
  <li class="<?php is_active('pengurus'); ?>">
    <a href="../pengurus"><i class="glyphicon glyphicon-edit"></i> Data Pengurus RT & RW</a>
  </li>
<?php endif; ?>
<?php if ($_SESSION['warga']['level_warga'] != 'RT' && $_SESSION['warga']['level_warga'] != 'RW' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
  <li class="<?php is_active('user'); ?>">
    <a href="../user"><i class="glyphicon glyphicon-user"></i> Data User</a>
  </li>
<?php endif; ?>
</ul>
