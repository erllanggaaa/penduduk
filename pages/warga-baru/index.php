<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga Baru</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th><center>No</center></th>
      <th><center>NIK</center></th>
      <th><center>Nama Lengkap</center></th>
      <th><center>Jenis Kelamin</center></th>
      <!-- <th>Lahir</th> -->
      <th><center>Usia</center></th>
      <th><center>Pendidikan Terakhir</center></th>
      <th><center>Pekerjaan</center></th>
      <th><center>Status Perkawinan</center></th>
      <th><center>Status Tinggal</center></th>
      <th><center>Pengaturan</center></th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_warga as $warga) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><center><?php echo $warga['nik_warga'] ?></center></td>
      <td><?php echo $warga['nama_warga'] ?></td>
      <td><center><?php echo $warga['jenis_kelamin_warga'] ?></center></td>
      <!-- <td>
        <?php echo ($warga['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($warga['tanggal_lahir_warga'])) : ''?>
      </td> -->
      <td><?php echo $warga['usia_warga'] ?></td>
      <td><?php echo $warga['pendidikan_terakhir_warga'] ?></td>
      <td><?php echo $warga['pekerjaan_warga'] ?></td>
      <td><?php echo $warga['status_perkawinan_warga'] ?></td>
      <td><?php echo $warga['status_warga'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <?php if ($_SESSION['warga']['level_warga'] != 'RT' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Warga' && $_SESSION['warga']['level_warga'] != 'Admin'): ?>
            <li>
              <a href="show.php?id_warga=<?php echo $warga['id_warga'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Rincian Warga</a>
            </li>
            <li>
              <a href="update.php?id_warga=<?php echo $warga['id_warga'] ?>"><i class="glyphicon glyphicon-tag"></i> Konfirm Warga</a>
            </li>
            <li>
              <a href="cetak-show.php?id_warga=<?php echo $warga['id_warga'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak Warga</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_warga=<?php echo $warga['id_warga'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus Warga
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
