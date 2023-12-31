<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nomor_surat = $_POST['nomor_surat'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama']; 
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $status = $_POST['status'];
  $agama = $_POST['agama'];
  $kewarganegaraan = $_POST['kewarganegaraan'];
  $pekerjaan = $_POST['pekerjaan'];
  $alamat = $_POST['alamat'];
  $keperluan = $_POST['keperluan'];

  $tanggal_surat = $_POST['tanggal_surat'];
  $insert = mysqli_query($con, "INSERT INTO sk_sehat(nomor_surat,nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,status,agama,kewarganegaraan,pekerjaan,alamat,keperluan,tanggal_surat) VALUES('$nomor_surat','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$status','$agama','$kewarganegaraan','$pekerjaan','$alamat','$keperluan','$tanggal_surat')");



  if ($insert) {
    echo "<script>window.location.href = '?page=Sehat-show';</script>";
  }
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM datapenduduk WHERE nik='$id'") 
        or die('Ada kesalahan pada query tampil data : '.mysqli_error($con));
$data  = mysqli_fetch_assoc($query);
}
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Surat Keterangan Sehat</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="nomor_surat">Nomor Surat</label>
            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Nomor Surat" required>
          </div>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['nik'];?>" placeholder="NIK" readonly>
          </div>
        </div>
      <div class="col-md-10">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'];?>" placeholder="Nama" readonly>
        </div>
      </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>" placeholder="Tempat Lahir" readonly>
          </div>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>" placeholder="Tanggal Lahir" readonly>
          </div>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>" placeholder="Jenis Kelamin" readonly>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['status'];?>" placeholder="status" readonly>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data['agama'];?>" placeholder="Agama" readonly>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan'];?>" placeholder="Kewarganegaraan" readonly>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan'];?>" placeholder="Pekerjaan" readonly>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat'];?>" placeholder="Alamat" readonly>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="keterangan">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan" required>
          </div>
        </div>
      


      

      <div class="col-md-10">
          <div class="form-group">
            <label for="tanggal_surat">Tanggal Surat</label>
            <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" placeholder="Tanggal Surat" required>
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
