<?php
if (isset($_POST['submit'])) {
  $idsktm = $_POST['idsktm'];
  $nomor_surat = $_POST['nomor_surat'];
  $nama_istri = $_POST['nama_istri'];
  $umur_istri = $_POST['umur_istri'];
  $nama_suami = $_POST['nama_suami'];
  $umur_suami = $_POST['umur_suami'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $pukul = $_POST['pukul'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $berat = $_POST['berat'];
  $panjang = $_POST['panjang'];
  $anak_ke = $_POST['anak_ke'];
  $alamat = $_POST['alamat'];
  $tanggal_surat = $_POST['tanggal_surat'];
  $insert = mysqli_query($con, "INSERT INTO suratketerangantidakmampu(nomor_surat,nama_istri,umur_istri,nama_suami,umur_suami,tempat_lahir,tanggal_lahir,pukul,jenis_kelamin,berat,panjang,anak_ke,alamat,tanggal_surat) VALUES('$nomor_surat','$nama_istri','$umur_istri','$nama_suami','$umur_suami','$tempat_lahir','$tanggal_lahir','$pukul','$jenis_kelamin','$berat','$panjang','$anak_ke','$alamat','$tanggal_surat')");

  if ($insert) {
    echo "<script>window.location.href = '?page=Sktm-show';</script>";
  }
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($con, "SELECT * FROM datapenduduk WHERE nik='$id'")
    or die('Ada kesalahan pada query tampil data : ' . mysqli_error($con));
  $data  = mysqli_fetch_assoc($query);
}
?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Surat Keterangan Lahir</h6>
    </div>
    <div class="card-body">
      <form method="POST" class="needs-validation" novalidate>
        <div class="row">

          <div class="col-md-12">
            <div class="form-group">
              <label for="nomor_surat">Nomor Surat</label>
              <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Nomor Surat" required>
            </div>
          </div>
          <!-- data orang tua -->
          <div class="col">
            <div class="form-group">
              <label for="nama_istri">Nama Istri</label>
              <input type="text" class="form-control" id="nama_istri" name="nama_istri" placeholder="Nama Istri" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="umur_istri">Umur Istri</label>
              <input type="text" class="form-control" id="umur_istri" name="umur_istri" placeholder="Umur Istri" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama_suami">Nama Suami</label>
              <input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Nama Suami" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="umur_suami">Umur Suami</label>
              <input type="text" class="form-control" id="umur_suami" name="umur_suami" placeholder="Nama Suami" required>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempa Lahir" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="tanggal_lahir">Tangggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="pukul">Pukul</label>
              <input type="time" class="form-control" id="pukul" name="pukul" placeholder="Tempa Lahir" required>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"  placeholder="Jenis Kelamin" required>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="berat">Berat</label>
              <input type="text" class="form-control" id="berat" name="berat" value="<?php echo $data['berat']; ?>" placeholder="Berat" required>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="panjang">Panjang</label>
              <input type="text" class="form-control" id="panjang" name="panjang" value="<?php echo $data['panjang']; ?>" placeholder="panjang" required>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="anak_ke">Anak Ke</label>
              <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?php echo $data['anak_ke']; ?>" placeholder="anak_ke" required>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Alamat" required>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="tanggal_surat">Tanggal Surat</label>
              <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" placeholder="Tanggal Surat" required>
            </div>
          </div>

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