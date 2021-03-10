<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Surat Pengantar</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th><center>No</center></th>
      <th><center>Nama Surat Pengantar</center></th>
      <th>Pengaturan</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_surat_pengantar as $surat_pengantar) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $surat_pengantar['nama_surat_pengantar'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_pengantar=<?php echo $pengurus['id_pengantar'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Rincian Surat</a>
            </li>
            <li>
              <a href="cetak-show.php?id_pengantar=<?php echo $pengurus['id_pengantar'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak Surat</a>
            </li>
            <?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_pengantar=<?php echo $pengurus['id_pengantar'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus Surat
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
