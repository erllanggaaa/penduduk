<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pengurus RT & RW</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th><center>No</center></th>
      <th><center>RW</center></th>
      <th><center>RT</center></th>
      <th><center>Pengaturan</center></th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_pengurus as $pengurus) : ?>
    <tr>
      <td><center><?php echo $nomor++ ?>.</center></td>
      <td><center><?php echo $pengurus['rw'] ?></center></td>
      <td><center><?php echo $pengurus['rt'] ?></center></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_pengurus=<?php echo $pengurus['id_pengurus'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Rincian Pengurus</a>
            </li>
            <li>
              <a href="cetak-show.php?id_pengurus=<?php echo $pengurus['id_pengurus'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak Pengurus</a>
            </li>
            <?php if ($_SESSION['warga']['level_warga'] != 'RT' && $_SESSION['warga']['level_warga'] != 'RW' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
            <li class="divider"></li>
            <li>
              <a href="edit-pengurus.php?id_pengurus=<?php echo $pengurus['id_pengurus'] ?>"><span class="glyphicon glyphicon-pencil"></span> Ubah Pengurus</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_pengurus=<?php echo $pengurus['id_pengurus'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus Pengurus
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
