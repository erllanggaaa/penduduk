<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pengurus RT & RW</h1>
<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<h3>A. RT & RW</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">RW</th>
    <td width="1%">:</td>
    <td><select name="rw" id="rw" class="form-control" required>
                                        <option selected disabled>-- Pilih --</option>
                                                    <option value="01">RW 01</option>
                                                    <option value="02">RW 02</option>
                                                    <option value="03">RW 03</option>
                                                    <option value="04">RW 04</option>
                                        </select></td>
  </tr>
  <tr id="rw01" style="display: none;">
    <th width="20%">RT</th>
    <td width="1%">:</td>
    <td><select name="rt" class="form-control" required>
                                        <option selected disabled>-- Pilih --</option>
                                                    <option value="01">RT 01</option>
                                                    <option value="02">RT 02</option>
                                                    <option value="03">RT 03</option>
                                                    <option value="04">RT 04</option>
                                        </select></td>
  </tr>
  <tr id="rw02" style="display: none;">
    <th width="20%">RT</th>
    <td width="1%">:</td>
    <td><select name="rt" class="form-control" required>
                                        <option selected disabled>-- Pilih --</option>
                                                    <option value="05">RT 05</option>
                                                    <option value="06">RT 06</option>
                                                    <option value="07">RT 07</option>
                                                    <option value="08">RT 08</option>
                                        </select></td>
  </tr>
  <tr id="rw03" style="display: none;">
    <th width="20%">RT</th>
    <td width="1%">:</td>
    <td><select name="rt" class="form-control" required>
                                        <option selected disabled>-- Pilih --</option>
                                                    <option value="09">RT 09</option>
                                                    <option value="10">RT 10</option>
                                                    <option value="11">RT 11</option>
                                                    <option value="12">RT 12</option>
                                        </select></td>
  </tr>
  <tr id="rw04" style="display: none;">
    <th width="20%">RT</th>
    <td width="1%">:</td>
    <td><select name="rt" class="form-control" required>
                                        <option selected disabled>-- Pilih --</option>
                                                    <option value="13">RT 13</option>
                                                    <option value="14">RT 14</option>
                                                    <option value="15">RT 15</option>
                                                    <option value="16">RT 16</option>
                                        </select></td>
  </tr>
</table>

<h3>B. Data Pengurus RW</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Ketua RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nama_ketua_rw" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Ketua RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_ketua_rw" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Ketua RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_rw" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Wakil Ketua RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_wakil_rw" required></td>
  </tr>
  <tr>
    <th>Nama Sekretaris RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_sekretaris_rw" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Sekretaris RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_sekretaris_rw" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Sekretaris RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_sekretaris_rw" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Wakil Sekretaris RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_wakil_sekretaris_rw" required></td>
  </tr>
  <tr>
    <th>Nama Bendahara RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_bendahara_rw" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Bendahara RW</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_bendahara_rw" required></td>
  </tr>
</table>

<h3>C. Data Pengurus RT</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Ketua RT</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nama_ketua_rt" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Ketua RT</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_ketua_rt" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Ketua RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_rt" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Wakil Ketua RT</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_wakil_rt" required></td>
  </tr>
  <tr>
    <th>Nama Sekretaris RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_sekretaris_rt" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Sekretaris RT</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_sekretaris_rt" required></td>
  </tr>
  <tr>
    <th>Nama Wakil Sekretaris RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_wakil_sekretaris_rt" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Wakil Sekretaris RT</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_wakil_sekretaris_rt" required></td>
  </tr>
  <tr>
    <th>Nama Bendahara RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_bendahara_rt" required></td>
  </tr>
  <tr>
    <th width="20%">Alamat Bendahara RT</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_bendahara_rt" required></td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>

<?php include('../_partials/bottom.php') ?>
