<?php
include "../connection.php";

$idskj = $_GET['idskj'];
$result = mysqli_query($con, "SELECT * FROM suratketeranganjanda WHERE idskj=$idskj");
while ($data = mysqli_fetch_array($result)) {
  $nomor_surat = $data['nomor_surat'];
  $nik = $data['nik'];
  $nama = $data['nama'];
  $tempat_lahir = $data['tempat_lahir'];
  $tanggal_lahir = $data['tanggal_lahir'];
  $jenis_kelamin = $data['jenis_kelamin'];
  $status = $data['status'];
  $agama = $data['agama'];
  $kewarganegaraan = $data['kewarganegaraan'];
  $pekerjaan = $data['pekerjaan'];
  $alamat = $data['alamat'];
  $keperluan = $data['keperluan'];
  $nama_file = $_FILES['foto']['name'];
  $tmp_file = $_FILES['foto']['tmp_name'];
  $direktori = "foto/$nama_file";
  if (move_uploaded_file($tmp_file, $direktori)) {
    echo "Foto berhasil diupload.";
  } else {
    echo ".";
  }
  $tanggal_surat = $data['tanggal_surat'];
  
}

if (isset($_POST['submit'])) {
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
    

  // update user data
  $result = mysqli_query($con, "UPDATE suratketeranganjanda SET nomor_surat='$nomor_surat',nik='$nik',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',status='$status',agama='$agama',kewarganegaraan='$kewarganegaraan',pekerjaan='$pekerjaan',alamat='$alamat',keperluan='$keperluan',foto='$foto',tanggal_surat='$tanggal_surat' WHERE idskj=$idskj");
  // Redirect to homepage to display updated user in list
  echo "<script>window.location.href ='?page=Skj-show';</script>";
}

?>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data Surat Keterangan Bebas Narkoba</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" name="nomor surat" class="form-control" placeholder="nomor surat" value="<?php echo $nomor_surat ?>" required>
      </div>
      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" name="nik" class="form-control" placeholder="nik" value="<?php echo $nik ?>" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $nama ?>" required>
      </div>
      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir </label>
        <input type="text" name="tempat lahir" class="form-control" placeholder="tempat lahir" value="<?php echo $tempat_lahir ?>" required>
      </div>
      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal lahir" class="form-control" placeholder="tanggal lahir" value="<?php echo $tanggal_lahir ?>" required>
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis kelamin" class="form-control" placeholder="jenis kelamin" value="<?php echo $jenis_kelamin ?>" required>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control" placeholder="status" value="<?php echo $status ?>" required>
      </div>
      <div class="form-group">
        <label for="agama">Agama</label>
        <input type="text" name="agama" class="form-control" placeholder="agama" value="<?php echo $agama ?>" required>
      </div>
      <div class="form-group">
        <label for="kewarganegaraan">Kewarganegaraan</label>
        <input type="text" name="kewarganegaraan" class="form-control" placeholder="kewarganegaraan" value="<?php echo $kewarganegaraan ?>" required>
      </div>
      <div class="form-group">
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan" value="<?php echo $pekerjaan ?>" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $alamat ?>" required>
      </div>
      <div class="form-group">
        <label for="keperluan">Keperluan</label>
        <input type="text" name="keperluan" class="form-control" placeholder="keperluan" value="<?php echo $keperluan ?>" required>
      </div>
      <div class="form-group">
        <label for="tanggal_surat">Tanggal Surat</label>
        <input type="date" name="tanggal surat" class="form-control" placeholder="tanggal surat" value="<?php echo $tanggal_surat ?>" required>
      </div>

      <input type="submit" name="submit" class="btn btn-success" value="Simpan">
      <a href="?page=Skj-show" class="btn btn-warning">Kembali</a>
    </form>
  </div>
</div>
<script src="validation.js"></script>
