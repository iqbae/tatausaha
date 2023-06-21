<?php
include "../connection.php";

$idskk = $_GET['idskk'];
$result = mysqli_query($con, "SELECT * FROM suratketerangankematian WHERE idskk=$idskk");
while ($data = mysqli_fetch_array($result)) {
  $nomor_surat = $data['nomor_surat'];
  $nik = $data['nik'];
  $nama = $data['nama'];
  $tempat_lahir = $data['tempat_lahir'];
  $tanggal_lahir = $data['tanggal_lahir'];
  $jenis_kelamin = $data['jenis_kelamin'];;
  $alamat = $data['alamat'];
  $tanggalmeninggal_dunia = $data['tanggalmeninggal_dunia'];
  $kewarganegaraan = $data['kewarganegaraan'];
  $agama = $data['agama'];
  $status = $data['status'];
  $pekerjaan = $data['pekerjaan'];
  $tempat_kematian = $data['tempat_kematian'];
  $sebab_kematian = $data['sebab_kematian'];
  $yang_melapor = $data['yang_melapor'];
  $nik_melapor = $data['nik_melapor'];
  $hubungandenganyang_meninggal = $data['hubungandenganyang_meninggal'];
  $tanggal_surat = $data['tanggal_surat'];
  
}

if (isset($_POST['submit'])) {
  $nomor_surat = $_POST['nomor_surat'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];;
  $alamat = $_POST['alamat'];
  $tanggalmeninggal_dunia = $_POST['tanggalmeninggal_dunia'];
  $kewarganegaraan = $_POST['kewarganegaraan'];
  $agama = $_POST['agama'];
  $status = $_POST['status'];
  $pekerjaan = $_POST['pekerjaan'];
  $tempat_kematian = $_POST['tempat_kematian'];
  $sebab_kematian = $_POST['sebab_kematian'];
  $yang_melapor = $_POST['yang_melapor'];
  $nik_melapor = $_POST['nik_melapor'];
  $hubungandenganyang_meninggal = $_POST['hubungandenganyang_meninggal'];
  $nama_file = $_FILES['foto']['name'];
  $tmp_file = $_FILES['foto']['tmp_name'];
  $direktori = "foto/$nama_file";
  if (move_uploaded_file($tmp_file, $direktori)) {
    echo "Foto berhasil diupload.";
  } else {
    echo "";
  }
  $tanggal_surat = $_POST['tanggal_surat'];
    

  // update user data
  $result = mysqli_query($con, "UPDATE suratketerangankematian SET nomor_surat='$nomor_surat',nik='$nik',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',tanggalmeninggal_dunia='$tanggalmeninggal_dunia',kewarganegaraan='$kewarganegaraan',agama='$agama',status='$status',pekerjaan='$pekerjaan',tempat_kematian='$tempat_kematian',sebab_kematian='$sebab_kematian',yang_melapor='$yang_melapor',nik_melapor='$nik_melapor',hubungandenganyang_meninggal='$hubungandenganyang_meninggal',foto='$foto',tanggal_surat='$tanggal_surat' WHERE idskk=$idskk");
  // Redirect to homepage to display updated user in list
  echo "<script>window.location.href ='?page=Skk-show';</script>";
}

?>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data Surat Keterangan Kematian</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="form-group">
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" name="nomor_surat" class="form-control" placeholder="nomor surat" value="<?php echo $nomor_surat ?>" required>
      </div>
      <div class="form-group">
        <label for="nik">Nik</label>
        <input type="text" name="nik" class="form-control" placeholder="nik" value="<?php echo $nik ?>" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $nama ?>" required>
      </div>
      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir </label>
        <input type="text" name="tempat_lahir" class="form-control" placeholder="tempat lahir" value="<?php echo $tempat_lahir ?>" required>
      </div>
      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal lahir" value="<?php echo $tanggal_lahir ?>" required>
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" placeholder="jenis kelamin" value="<?php echo $jenis_kelamin ?>" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="alamat" value="<?php echo $alamat ?>" required>
      </div>
      <div class="form-group">
        <label for="tanggalmeninggal_dunia">Tanggal Meninggal Dunia</label>
        <input type="text" name="tanggalmeninggal_dunia" class="form-control" placeholder="tanggal meninggal dunia" value="<?php echo $tanggalmeninggal_dunia ?>" required>
      </div>
      <div class="form-group">
        <label for="kewarganegaraan">Kewarganegaraan</label>
        <input type="text" name="kewarganegaraan" class="form-control" placeholder="kewarganegaraan" value="<?php echo $kewarganegaraan ?>" required>
      </div>
      <div class="form-group">
        <label for="agama">Agama</label>
        <input type="text" name="agama" class="form-control" placeholder="agama" value="<?php echo $agama ?>" required>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control" placeholder="status" value="<?php echo $status ?>" required>
      </div>
      <div class="form-group">
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan" value="<?php echo $pekerjaan ?>" required>
      </div>
      <div class="form-group">
        <label for="tempat_kematian">Tempat Kematian</label>
        <input type="text" name="tempat_kematian" class="form-control" placeholder="tempat kematian" value="<?php echo $tempat_kematian ?>" required>
      </div>
      <div class="form-group">
        <label for="sebab_kematian">Sebab Kematian</label>
        <input type="text" name="sebab_kematian" class="form-control" placeholder="sebab kematian" value="<?php echo $sebab_kematian ?>" required>
      </div>
      <div class="form-group">
        <label for="yang_melapor">Yang Melapor</label>
        <input type="text" name="yang_melapor" class="form-control" placeholder="yang melapor" value="<?php echo $yang_melapor ?>" required>
      </div>
      <div class="form-group">
        <label for="nik_melapor">Nik Melapor</label>
        <input type="text" name="nik_melapor" class="form-control" placeholder="nik melapor" value="<?php echo $nik_melapor ?>" required>
      </div>
      <div class="form-group">
        <label for="hubungandenganyang_meninggal">Hubungan Dengan Yang Meninggal</label>
        <input type="text" name="hubungandenganyang_meninggal" class="form-control" placeholder="hubungan dengan yang meninggal" value="<?php echo $hubungandenganyang_meninggal ?>" required>
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" name="foto" class="form-control" placeholder="foto" value="<?php echo $foto ?>" required>
      </div>
      <div class="form-group">
        <label for="tanggal_surat">Tanggal Surat</label>
        <input type="date" name="tanggal_surat" class="form-control" placeholder="tanggal surat" value="<?php echo $tanggal_surat ?>" required>
      </div>

      <input type="submit" name="submit" class="btn btn-success" value="Simpan">
      <a href="?page=Skj-show" class="btn btn-warning">Kembali</a>
    </form>
  </div>
</div>
<script src="validation.js"></script>
