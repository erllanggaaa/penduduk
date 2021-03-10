<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pengurus</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<form action="update.php" method="post">
<h3>A. RT & RW</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">RT/RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="rt_rw" value="<?php echo $data_pengurus[0]['rt_rw'] ?>" required></td>
  </tr>
</table>

<h3>B. Data Pengurus RW</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Ketua RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nama_ketua_rw" value="<?php echo $data_pengurus[0]['nama_ketua_rw'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Ketua RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_rw" value="<?php echo $data_pengurus[0]['nama_wakil_rw'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Sekretaris RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_sekretaris_rw" value="<?php echo $data_pengurus[0]['nama_sekretaris_rw'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Sekretaris RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_sekretaris_rw" value="<?php echo $data_pengurus[0]['nama_wakil_sekretaris_rw'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Bendahara RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_bendahara_rw" value="<?php echo $data_pengurus[0]['nama_bendahara_rw'] ?>" required></td>
  </tr>
</table>

<h3>C. Data Pengurus RT</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Ketua RT</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nama_ketua_rt" value="<?php echo $data_pengurus[0]['nama_ketua_rt'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Ketua RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_rt" value="<?php echo $data_pengurus[0]['nama_wakil_rt'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Sekretaris RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_sekretaris_rt" value="<?php echo $data_pengurus[0]['nama_sekretaris_rt'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Sekretaris RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_sekretaris_rt" value="<?php echo $data_pengurus[0]['nama_wakil_sekretaris_rt'] ?>" required></td>
  </tr>
  <tr>
    <th>Nama Bendahara RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_bendahara_rt" value="<?php echo $data_pengurus[0]['nama_bendahara_rt'] ?>" required></td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
<input type="hidden" name="id_pengurus" value="<?php echo $data_pengurus[0]['id_pengurus'] ?>">
</form>

<?php include('../_partials/bottom.php') ?>
