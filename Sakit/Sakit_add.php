<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
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
  $insert = mysqli_query($con, "INSERT INTO sk_sakit(nomor_surat,nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,dari_tanggal,sampai_tanggal,masa_sakit,pekerjaan,tanggal_surat) VALUES('$nomor_surat','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$dari_tanggal','$sampai_tanggal','$masa_sakit','$pekerjaan','$tanggal_surat')");



  if ($insert) {
    echo "<script>window.location.href = '?page=Sakit-show';</script>";
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
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Surat Keterangan Sakit</h6>
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
              <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['nik']; ?>" placeholder="NIK" readonly>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-10">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama" readonly>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" placeholder="Tempat Lahir" readonly>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" placeholder="Jenis Kelamin" readonly>
            </div>
          </div>
          
          <div class="col-md-10">
            <div class="form-group">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" placeholder="Pekerjaan" readonly>
            </div>
          </div>

          <div class="col-md-10">
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Alamat" readonly>
            </div>
          </div>
          <!-- sakit part -->
          <div class="row flex pl-3">
          <div class="col-md-4">
            <div class="form-group">
              <label for="masa_sakit">Masa Istirahat</label>
              <input type="text" class="form-control" id="masa_sakit" name="masa_sakit" value="<?php echo $data['masa_sakit']; ?>" placeholder="masa sakit" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="dari_tanggal">Dari tanggal</label>
              <input type="date" class="form-control" id="dari_tanggal" name="dari_tanggal" placeholder="dari_tanggal" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="sampai_tanggal">Sampai tanggal</label>
              <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal" placeholder="sampai_tanggal" required>
            </div>
          </div>
          </div>
<!-- sakit part end -->
          <div class="col-md-10">
            <div class="form-group">
              <label for="tanggal_surat">Tanggal Surat</label>
              <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" placeholder="Tanggal Surat" required>
            </div>
          </div>
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="Simpan">
        <a href="?page=Sakit-show" class="btn btn-warning">Kembali</a>
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