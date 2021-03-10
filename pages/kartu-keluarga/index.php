<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th><center>No</center></th>
      <th><center>Nomor KK</center></th>
      <th><center>Nama Kepala Keluarga</center></th>
      <th><center>NIK Kepala Keluarga</center></th>
      <th><center>Jumlah Anggota Keluarga</center></th>
      <th><center>Alamat</center></th>
      <th><center>RT</center></th>
      <th><center>RW</center></th>
      <th><center>Pengaturan</center></th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_kartu_keluarga as $kartu_keluarga) : ?>

    <?php
    // hitung anggota
    $query_jumlah_anggota = "SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_keluarga = ".$kartu_keluarga['id_keluarga'];
    $hasil_jumlah_anggota = mysqli_query($db, $query_jumlah_anggota);
    $jumlah_jumlah_anggota = mysqli_fetch_assoc($hasil_jumlah_anggota);
    ?>

    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><center><?php echo $kartu_keluarga['nomor_keluarga'] ?></center></td>
      <td><?php echo $kartu_keluarga['nama_warga'] ?></td>
      <td><center><?php echo $kartu_keluarga['nik_warga'] ?></center></td>
      <td><?php echo $jumlah_jumlah_anggota['total'] ?></td>
      <td><?php echo $kartu_keluarga['alamat_keluarga'] ?></td>
      <td><?php echo $kartu_keluarga['rt_keluarga'] ?></td>
      <td><?php echo $kartu_keluarga['rw_keluarga'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_keluarga=<?php echo $kartu_keluarga['id_keluarga'] ?>"><span class="glyphicon glyphicon-sunglasses"></span> Rincian KK</a>
            </li>
            <li>
              <a href="cetak-show.php?id_keluarga=<?php echo $kartu_keluarga['id_keluarga'] ?>" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak KK</a>
            </li>
            <?php if ($_SESSION['warga']['level_warga'] != 'RW' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
            <li class="divider"></li>
            <li>
              <a href="edit-anggota.php?id_keluarga=<?php echo $kartu_keluarga['id_keluarga'] ?>"><span class="glyphicon glyphicon-list"></span> Ubah Anggota KK</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id_keluarga=<?php echo $kartu_keluarga['id_keluarga'] ?>"><span class="glyphicon glyphicon-edit"></span> Ubah KK</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_keluarga=<?php echo $kartu_keluarga['id_keluarga'] ?>"><span class="glyphicon glyphicon-trash"></span> Hapus KK</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Data KK :</dt>
    <dd><?php echo $jumlah_kartu_keluarga['total'] ?> Data.</dd>
  </dl>
</div>

<?php include('../_partials/bottom.php') ?>
