<?php
include "../connection.php";

$idsktm = $_GET['idsktm'];
$result = mysqli_query($con, "SELECT * FROM sk_kelahiran WHERE idsktm=$idsktm");
while ($data = mysqli_fetch_array($result)) {
  $nomor_surat = $data['nomor_surat'];
  $nama_istri = $data['nama_istri'];
  $umur_istri = $data['umur_istri'];
  $nama_suami = $data['nama_suami'];
  $umur_suami = $data['umur_suami'];
  $tempat_lahir = $data['tempat_lahir'];
  $tanggal_lahir = $data['tanggal_lahir'];
  $pukul = $data['pukul'];
  $nama_anak = $data['nama_anak'];
  $jenis_kelamin = $data['jenis_kelamin'];
  $berat = $data['berat'];
  $panjang = $data['panjang'];
  $anak_ke = $data['anak_ke'];
  $alamat = $data['alamat'];
  $tanggal_surat = $data['tanggal_surat'];
}

if (isset($_POST['submit'])) {
  $nomor_surat = $_POST['nomor_surat'];
  $nama_istri = $_POST['nama_istri'];
  $umur_istri = $_POST['umur_istri'];
  $nama_suami = $_POST['nama_suami'];
  $umur_suami = $_POST['umur_suami'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $pukul = $_POST['pukul'];
  $nama_anak = $_POST['nama_anak'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $berat = $_POST['berat'];
  $panjang = $_POST['panjang'];
  $anak_ke = $_POST['anak_ke'];
  $alamat = $_POST['alamat'];
  $tanggal_surat = $_POST['tanggal_surat'];


  $result = mysqli_query($con, "UPDATE sk_kelahiran SET nomor_surat='$nomor_surat',nama_istri='$nama_istri',umur_istri='$umur_istri',nama_suami='$nama_suami',umur_suami='$umur_suami',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',pukul='$pukul',nama_anak='$nama_anak',jenis_kelamin='$jenis_kelamin',berat='$berat',panjang='$panjang',anak_ke='$anak_ke',alamat='$alamat', tanggal_surat='$tanggal_surat' WHERE idsktm=$idsktm");
  // update user data
  // Redirect to homepage to display updated user in list
  echo "<script>window.location.href ='?page=Lahir-show';</script>";
}

?>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data Surat Keterangan Lahir</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>

      <div class="form-group">
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" name="nomor surat" class="form-control" placeholder="nomor surat" value="<?php echo $nomor_surat ?>" required>
      </div>
      <!-- data orang tua -->
      <div class="row border border-success rounded mx-1 py-2">
          <div class="col">
            <div class="form-group">
              <label for="nama_istri">Nama Istri</label>
              <input type="text" name="nama_istri" class="form-control" placeholder="Nama Istri" value="<?php echo $nama_istri ?>" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="umur_istri">Umur Istri</label>
              <input type="text" class="form-control" id="umur_istri" name="umur_istri" placeholder="Umur Istri" value="<?php echo $umur_istri ?>" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama_suami">Nama Suami</label>
              <input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Nama Suami" value="<?php echo $nama_suami ?>" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="umur_suami">Umur Suami</label>
              <input type="text" class="form-control" id="umur_suami" name="umur_suami" placeholder="Nama Suami" value="<?php echo $umur_suami ?>" required>
            </div>
          </div>
      </div>
      <!-- end data orang tua -->

      <div class="col-md-12">
        <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempa Lahir" value="<?php echo $tempat_lahir ?>" required>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="tanggal_lahir">Tangggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir ?>" required>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="pukul">Pukul</label>
          <input type="time" class="form-control" id="pukul" name="pukul" placeholder="pukul" value="<?php echo $pukul ?>" required>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="nama_anak">Nama Anak</label>
          <input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="Nama Anak" value="<?php echo $nama_anak ?>" required>
        </div>
      </div>
<!-- data anak  -->
<div class="row border border-primary rounded mx-1 pt-2">
      <div class="col-md-3">
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin ?>" required>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="berat">Berat</label>
          <input type="text" class="form-control" id="berat" name="berat" placeholder="Berat" value="<?php echo $berat ?>" required>
        </div>
      </div>


      <div class="col-md-3">
        <div class="form-group">
          <label for="panjang">Panjang</label>
          <input type="text" class="form-control" id="panjang" name="panjang" placeholder="panjang" value="<?php echo $panjang ?>" required>
        </div>
      </div>


      <div class="col-md-3">
        <div class="form-group">
          <label for="anak_ke">Anak Ke</label>
          <input type="text" class="form-control" id="anak_ke" name="anak_ke" placeholder="anak_ke" value="<?php echo $anak_ke ?>" required>
        </div>
      </div>
      </div>
<!-- data anak end -->
      <div class="col-md-12">
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $alamat ?>" required>
        </div>
      </div>


      <div class="col-md-12">
        <div class="form-group">
          <label for="tanggal_surat">Tanggal Surat</label>
          <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" placeholder="Tanggal Surat" value="<?php echo $tanggal_surat ?>" required>
        </div>
      </div>


      <input type="submit" name="submit" class="btn btn-success" value="Simpan">
      <a href="?page=Lahir-show" class="btn btn-warning">Kembali</a>
    </form>
  </div>
</div>
<script src="validation.js"></script>