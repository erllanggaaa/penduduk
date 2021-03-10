<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-edit-anggota.php') ?>

<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td><?php echo $data_keluarga[0]['nomor_keluarga'] ?></td>
  </tr>
  <tr>
    <th>Nama Kepala Keluarga</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['nama_warga'] ?></td>
  </tr>
  <tr>
    <th>NIK Kepala Keluarga</th>
    <td>:</td>
    <td><?php echo $data_keluarga[0]['nik_warga'] ?></td>
  </tr>
</table>

<h3>Daftar Nama Warga</h3>
<form action="update-anggota.php" method="post">
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Nama Warga</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="id_warga" required>
          <option value="" selected disabled>- Silakan Dipilih -</option>
          <?php foreach ($data_warga as $warga) : ?>
          <option value="<?php echo $warga['id_warga'] ?>">
            <?php echo $warga['nama_warga'] ?> (NIK : <?php echo $warga['nik_warga'] ?>)
          </option>
          <?php endforeach ?>
        </select>
      </td>
    </tr>
  </table>

  <input type="hidden" name="id_keluarga" value="<?php echo $get_id_keluarga ?>">

  <button type="submit" class="btn btn-primary btn-lg">
    <i class="glyphicon glyphicon-plus"></i> Tambahkan
  </button>
</form>

<br><br>

<h3>Data Anggota Keluarga</h3>
<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th><center>No</center></th>
      <th><center>NIK</center></th>
      <th><center>Nama Anggota</center></th>
      <th><center>Tempat Lhr</center></th>
      <th><center>Tanggal Lhr</center></th>
      <th><center>Pendidikan</center></th>
      <th><center>Pekerjaan</center></th>
      <th><center>Stts Kawin</center></th>
      <th><center>Stts Tinggal</center></th>
      <th><center>Pengaturan</center></th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_anggota_keluarga as $anggota_keluarga) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $anggota_keluarga['nik_warga'] ?></td>
      <td><?php echo $anggota_keluarga['nama_warga'] ?></td>
      <td><?php echo $anggota_keluarga['tempat_lahir_warga'] ?></td>
      <td>
        <?php echo ($anggota_keluarga['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($anggota_keluarga['tanggal_lahir_warga'])) : ''?>
      </td>
      <td><?php echo $anggota_keluarga['pendidikan_terakhir_warga'] ?></td>
      <td><?php echo $anggota_keluarga['pekerjaan_warga'] ?></td>
      <td><?php echo $anggota_keluarga['status_perkawinan_warga'] ?></td>
      <td><?php echo $anggota_keluarga['status_warga'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="../warga/show.php?id_warga=<?php echo $anggota_keluarga['id_warga'] ?>">
                <span class="glyphicon glyphicon-sunglasses"></span> Rincian Anggota
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="../kartu-keluarga/delete-anggota.php?id_warga=<?php echo $anggota_keluarga['id_warga'] ?>&id_keluarga=<?php echo $data_keluarga[0]['id_keluarga'] ?>" onclick="return confirm('Yakin hapus dari anggota?')">
                <span class="glyphicon glyphicon-trash"></span> Hapus Anggota
              </a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
