<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Mutasi</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th><center>No</center></th>
      <th><center>NIK</center></th>
      <th><center>Nama Warga Mutasi</center></th>
      <th><center>Jenis Kelamin</center></th>
      <!-- <th>Lahir</th> -->
      <th><center>Usia</center></th>
      <th><center>Pendidikan Terakhir</center></th>
      <th><center>Pekerjaan</center></th>
      <th><center>Status Perkawinan</center></th>
      <th>Status Tinggal</th>
      <th>Pengaturan</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_mutasi as $mutasi) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $mutasi['nik_mutasi'] ?></td>
      <td><?php echo $mutasi['nama_mutasi'] ?></td>
      <td><center><?php echo $mutasi['jenis_kelamin_mutasi'] ?></center></td>
      <!-- <td>
        <?php echo ($mutasi['tanggal_lahir_mutasi'] != '0000-00-00') ? date('d-m-Y', strtotime($mutasi['tanggal_lahir_mutasi'])) : ''?>
      </td> -->
      <td><?php echo $mutasi['usia_mutasi'] ?></td>
      <td><?php echo $mutasi['pendidikan_terakhir_mutasi'] ?></td>
      <td><?php echo $mutasi['pekerjaan_mutasi'] ?></td>
      <td><?php echo $mutasi['status_perkawinan_mutasi'] ?></td>
      <td><?php echo $mutasi['status_mutasi'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_mutasi=<?php echo $mutasi['id_mutasi'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Rincian Warga</a>
            </li>
            <li>
              <a href="cetak-show.php?id_mutasi=<?php echo $mutasi['id_mutasi'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak Warga</a>
            </li>
            <?php if ($_SESSION['warga']['level_warga'] != 'RW' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_mutasi=<?php echo $mutasi['id_mutasi'] ?>" onclick="return confirm('Yakin hapus data ini?')">
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

<br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Data Mutasi :</dt>
    <dd><?php echo $jumlah_mutasi['total'] ?> Data.</dd>

    <dt>Warga Laki-Laki :</dt>
    <dd><?php echo $jumlah_mutasi_l['total'] ?> Warga.</dd>

    <dt>Warga Perempuan :</dt>
    <dd><?php echo $jumlah_mutasi_p['total'] ?> Warga.</dd>

    <dt>Warga < 17 Tahun :</dt>
    <dd><?php echo $jumlah_mutasi_kd_17['total'] ?> Warga.</dd>

    <dt>Warga >= 17 Tahun :</dt>
    <dd><?php echo $jumlah_mutasi_ld_17['total'] ?> Warga.</dd>
  </dl>
</div>

<?php include('../_partials/bottom.php') ?>
