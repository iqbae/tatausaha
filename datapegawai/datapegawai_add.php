<?php
include "../connection.php";
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $nip = $_POST['nip'];
  $alamat = $_POST['alamat'];
  $insert = mysqli_query($con, "INSERT INTO datapegawai(nama,jabatan,nip,alamat) VALUES('$nama','$jabatan','$nip','$alamat')");



  if ($insert) {
    echo "<script>window.location.href = '?page=datapegawai-show';</script>";
  }
}

?>

<form action="" method="post" enctype="multipart/form-data">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Dokter</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
          </div>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="jabatan">Spesialis</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Spesialis" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" id="nip" name="nip" placeholder="Nip" required>
            <option value="" selected></option>
            
          </select>

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