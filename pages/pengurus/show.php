<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pengurus RT & RW</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<h3>A. RT & RW</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">RT/RW</th>
    <td width="1%">:</td>
    <td><?php echo $data_pengurus[0]['rt_rw'] ?></td>
  </tr>
</table>

<h3>B. Data Pengurus RW</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Nama Ketua RW</th>
    <td width="1%">:</td>
    <td><?php echo $data_pengurus[0]['nama_ketua_rw'] ?></td>
  </tr>
  <tr>
    <th>Nama Wakil Ketua RW</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_wakil_rw'] ?></td>
  </tr>
  <tr>
    <th>Nama Sekretaris RW</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_sekretaris_rw'] ?></td>
  </tr>
  <tr>
    <th>Nama Wakil Sekretaris RW</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_wakil_sekretaris_rw'] ?></td>
  </tr>
  <tr>
    <th>Nama Bendahara RW</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_bendahara_rw'] ?></td>
  </tr>
</table>

<h3>C. Data Pengurus RT</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Nama Ketua RT</th>
    <td width="1%">:</td>
    <td><?php echo $data_pengurus[0]['nama_ketua_rt'] ?></td>
  </tr>
  <tr>
    <th>Nama Wakil Ketua RT</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_wakil_rt'] ?></td>
  </tr>
  <tr>
    <th>Nama Sekretaris RT</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_sekretaris_rt'] ?></td>
  </tr>
  <tr>
    <th>Nama Wakil Sekretaris RT</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_wakil_sekretaris_rt'] ?></td>
  </tr>
  <tr>
    <th>Nama Bendahara RT</th>
    <td>:</td>
    <td><?php echo $data_pengurus[0]['nama_bendahara_rt'] ?></td>
  </tr>
</table>

<h3>D. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput Oleh Admin</th>
    <td width="1%">:</td>
    <td>id - <?php echo $data_pengurus[0]['id_user'] ?></td>
  </tr>
</table>

<?php include('../_partials/bottom.php') ?>
