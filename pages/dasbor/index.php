<?php include('../_partials/top.php') ?>

<h1 class="page-header">Beranda</h1>

<?php include('data-index.php') ?>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Warga</h3>
        <p>
          Total Data Warga : <?php echo $jumlah_warga['total'] ?> Data. Warga Laki-Laki : <?php echo $jumlah_warga_l['total'] ?> Warga, Warga Perempuan : <?php echo $jumlah_warga_p['total'] ?> Warga.
        </p>
        <p>
          Warga diatas 17 Tahun : <?php echo $jumlah_warga_ld_17['total'] ?> Warga, Warga dibawah 17 Tahun : <?php echo $jumlah_warga_kd_17['total'] ?> Warga.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../warga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-book"></span> Rincian »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Kartu Keluarga</h3>
        <p>Total Data Kartu Keluarga : <?php echo $jumlah_kartu_keluarga['total'] ?> Data.</p>
      </div>
      <div class="panel-footer">
        <a href="../kartu-keluarga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Rincian »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Mutasi</h3>
        <p>
          Total Data Mutasi : <?php echo $jumlah_mutasi['total'] ?> Data. Warga Laki-Laki : <?php echo $jumlah_mutasi_l['total'] ?> Warga, Warga Perempuan : <?php echo $jumlah_mutasi_p['total'] ?> Warga.
        </p>
        <p>
           Warga diatas 17 Tahun : <?php echo $jumlah_mutasi_ld_17['total'] ?> Warga, Warga dibawah 17 Tahun : <?php echo $jumlah_mutasi_kd_17['total'] ?> Warga.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../mutasi" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-export"></span> Rincian »
        </a>
      </div>
    </div>
  </div>
</div>

<?php include('../_partials/bottom.php') ?>
