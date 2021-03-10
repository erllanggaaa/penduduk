<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
    <?php if ($_SESSION['warga']['level_warga'] != 'RT' && $_SESSION['warga']['level_warga'] != 'RW' && $_SESSION['warga']['level_warga'] != 'Lurah' && $_SESSION['warga']['level_warga'] != 'Warga'): ?>
      <div class="col-md-2">
        <a href="create.php" class="btn btn-primary">
          <i class="glyphicon glyphicon-file"></i> Tambah Data
        </a>
      </div>
      <?php endif; ?>
      <div class="col-md-2">
        <a href="index.php" class="btn btn-primary">
          <i class="glyphicon glyphicon-eye-open"></i> Lihat Data
        </a>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-primary">
          <i class="glyphicon glyphicon-refresh"></i> Refresh
        </a>
      </div>
      <div class="col-md-2">
        <a href="cetak-index.php" target="_blank" class="btn btn-primary">
          <i class="glyphicon glyphicon-print"></i> Cetak Data
        </a>
      </div>
    </div>
  </div>
</div>
<br>
