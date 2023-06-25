<?php
include "../connection.php";

$idskk = $_GET['idskk'];
$result = mysqli_query($con, "SELECT * FROM suratketerangankematian WHERE idskk=$idskk");
while ($data = mysqli_fetch_array($result)) {
  $nomor_surat = $data['nomor_surat'];
  $nik = $data['nik'];
  $nomor_surat = $data['nomor_surat'];
  $nik = $data['nik'];
  $nama = $data['nama'];
  $tempat_lahir = $data['tempat_lahir'];
  $tanggal_lahir = $data['tanggal_lahir'];
  $jenis_kelamin = $data['jenis_kelamin'];
  $alamat = $data['alamat'];
  $dari_tanggal = $data['dari_tanggal'];
  $sampai_tanggal = $data['sampai_tanggal'];
  $masa_sakit = $data['masa_sakit'];
  $pekerjaan = $data['pekerjaan'];
  $tanggal_surat = $data['tanggal_surat'];
}

if (isset($_POST['submit'])) {
  $nomor_surat = $_POST['nomor_surat'];
  $nik = $_POST['nik'];
  $nomor_surat = $_POST['nomor_surat'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $dari_tanggal = $_POST['dari_tanggal'];
  $sampai_tanggal = $_POST['sampai_tanggal'];
  $masa_sakit = $_POST['masa_sakit'];
  $pekerjaan = $_POST['pekerjaan'];
  $tanggal_surat = $_POST['tanggal_surat'];
  // update user data
  $result = mysqli_query($con, "UPDATE suratketerangankematian SET nomor_surat='$nomor_surat',nik='$nik',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir'=jenis_kelamin='$jenis_kelamin',alamat='$alamat',dari_tanggal='$dari_tanggal',sampai_tanggal='$sampai_tanggal',masa_sakit='$masa_sakit',pekerjaan='$pekerjaan',tanggal_surat='$tanggal_surat' WHERE idskk=$idskk");
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
        <label for="nik">NIK</label>
        <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik; ?>" placeholder="NIK" readonly>
      </div>
<div class="row">
  <div class="col-md-10">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Nama" readonly>
  </div>
  <div class="col-md-10">
    <div class="form-group">
      <label for="tempat_lahir">Tempat Lahir</label>
      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir" readonly>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-10">
    <div class="form-group">
      <label for="tanggal_lahir">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir" readonly>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-10">
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" placeholder="Jenis Kelamin" readonly>
    </div>
  </div>
          <!-- sakit part -->
          <div class="row flex pl-3">
          <div class="col-md-4">
            <div class="form-group">
              <label for="masa_sakit">Masa Istirahat</label>
              <input type="text" class="form-control" id="masa_sakit" name="masa_sakit" value="<?php echo $masa_sakit; ?>" placeholder="masa sakit" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="dari_tanggal">Dari tanggal</label>
              <input type="date" class="form-control" id="dari_tanggal" name="dari_tanggal" value="<?php echo $dari_tanggal; ?>" placeholder="dari_tanggal" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="sampai_tanggal">Sampai tanggal</label>
              <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal" value="<?php echo $sampai_tanggal; ?>"placeholder="sampai_tanggal" required>
            </div>
          </div>
          </div>
<!-- sakit part end -->
          <div class="col-md-10">
            <div class="form-group">
              <label for="tanggal_surat">Tanggal Surat</label>
              <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="<?php echo $tanggal_surat; ?>" placeholder="Tanggal Surat" required>
            </div>
          </div>
        </div>

  <input type="submit" name="submit" class="btn btn-success" value="Simpan">
  <a href="?page=Skk-show" class="btn btn-warning">Kembali</a>
  </form>
</div>
</div>
</div>
</div>
<script src="validation.js"></script>