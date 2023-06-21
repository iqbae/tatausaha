<?php
include "../connection.php";
if (isset($_POST['submit'])) {
  $idpenduduk = $_POST['idpenduduk'];
  $nik = $_POST['nik'];
  $no_kartukeluarga = $_POST['no_kartukeluarga'];
  $nama = $_POST['nama'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $kewarganegaraan = $_POST['kewarganegaraan'];
  $status = $_POST['status'];
  $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
  $pekerjaan = $_POST['pekerjaan'];
  $nomor_telepon = $_POST['nomor_telepon'];
  $alamat = $_POST['alamat'];
  $insert = mysqli_query($con, "INSERT INTO datapenduduk(nik,no_kartukeluarga,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,kewarganegaraan,status,pendidikan_terakhir,pekerjaan,nomor_telepon,alamat) VALUES('$nik','$no_kartukeluarga','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$kewarganegaraan','$status','$pendidikan_terakhir','$pekerjaan','$nomor_telepon','$alamat')");

  if ($insert) {
    echo "<script>window.location.href = '?page=datapenduduk-show';</script>";
  }
}
?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pasien</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Nik" required>
          </div>
        </div>
      

        <div class="col-md-10">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
            <option value="" selected></option>
            </select>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="no_kartukeluarga">riwayat Penyakit</label>
            <input type="text" class="form-control" id="no_kartukeluarga" name="no_kartukeluarga" placeholder="riwayat penyakit" required>
          </div>
        </div>


      <div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
          </div>
        </div>
      

      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
          </div>
          </div>
      </div>
          
        

      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="kewarganegaraan" required>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Status" required>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="nomor_telepon">No Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="No Telepon" required>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
          </div>
        </div>
      </div>

      <input type="submit" name="submit" class="btn btn-success" value="Simpan">
      <a href="?page=kategori-show" class="btn btn-warning">Kembali</a>
    </form>

  </div>
</div>

<script>
  $("#kategori").select2({
    theme: 'bootstrap4',
    placeholder: "- Pilih Kategori -"
  });
</script>

<script src="validation.js"></script>
