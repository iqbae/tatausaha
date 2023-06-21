<?php
$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM datapegawai WHERE idpegawai = $id");
while ($data = mysqli_fetch_array($result)) {
  $idpegawai = $data['idpegawai'];
  $nip = $data['nip'];
  $nama = $data['nama'];
  $jabatan = $data['jabatan'];
  $alamat = $data['alamat'];
}

if (isset($_POST['submit'])) {
  $idpegawai = $_POST['idpegawai'];
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $alamat = $_POST['alamat'];
  $result = mysqli_query($con, "UPDATE datapegawai SET nip='$nip', nama='$nama', jabatan='$jabatan', alamat='$alamat' WHERE idpegawai=$idpegawai");

  echo "<script>window.location.href ='?page=datapegawai-show';</script>";
}
?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data Dokter</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <input type="hidden" class="form-control" id="idpegawai" name="idpegawai" value="<?php echo $idpegawai ?>" placeholder="Nama" required>
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" placeholder="Nama" required>
          </div>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $jabatan ?>" placeholder="Jabatan" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" id="nip" name="nip" placeholder="Nip" value="<?php echo $nip ?>" required>
            <option value="" selected></option>
            
          </select>

        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>" placeholder="Alamat" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col offset-sm-2">
          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
          <a href="?page=datapegawai-show" class="btn btn-warning">Kembali</a>
        </div>
      </div>
    </form>

  </div>
</div>
<script src="validation.js"></script>
