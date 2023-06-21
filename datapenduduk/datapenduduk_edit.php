<?php
$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM datapenduduk WHERE idpenduduk = $id");
while ($data = mysqli_fetch_array($result)) {
  $idpenduduk = $data['idpenduduk'];
  $nik = $data['nik'];
  $nama = $data['nama'];
  $no_kartukeluarga = $data['no_kartukeluarga'];
  $tempat_lahir = $data['tempat_lahir'];
  $tanggal_lahir = $data['tanggal_lahir'];
  $jenis_kelamin = $data['jenis_kelamin'];
  $agama = $data['agama'];
  $status = $data['status'];
  $pendidikan_terakhir = $data['pendidikan_terakhir'];
  $pekerjaan = $data['pekerjaan'];
  $nomor_telepon = $data['nomor_telepon'];
  $alamat = $data['alamat'];
}

if (isset($_POST['submit'])) {
  $idpenduduk = $_POST['idpenduduk'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $no_kartukeluarga = $_POST['no_kartukeluarga'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $status = $_POST['status'];
  $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
  $pekerjaan = $_POST['pekerjaan'];
  $nomor_telepon = $_POST['nomor_telepon'];
  $alamat = $_POST['alamat'];
  $result = mysqli_query($con, "UPDATE datapenduduk SET nik='$nik', 
                                                        no_kartukeluarga='$no_kartukeluarga', 
                                                        nama='$nama',
                                                        tempat_lahir='$tempat_lahir',
                                                        tanggal_lahir='$tanggal_lahir',
                                                        jenis_kelamin='$jenis_kelamin',
                                                        agama='$agama', 
                                                        status='$status',
                                                        pendidikan_terakhir='$pendidikan_terakhir',
                                                        pekerjaan='$pekerjaan',
                                                        nomor_telepon='$nomor_telepon',
                                                        alamat='$alamat' WHERE idpenduduk=$idpenduduk");

  echo "<script>window.location.href ='?page=datapenduduk-show';</script>";
}
?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data Pasien</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <input type="hidden" class="form-control" id="idpenduduk" name="idpenduduk" value="<?php echo $idpenduduk ?>" placeholder="Nama" required>
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>" placeholder="Nik" required>
          </div>
        </div>

          <div class="col-md-10">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" placeholder="Nama" required>
          </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="no_kartukeluarga">Riwayat</label>
            <input type="text" class="form-control" id="no_kartukeluarga" name="no_kartukeluarga" value="<?php echo $no_kartukeluarga ?>" placeholder="No Kk" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $tempat_lahir ?>" placeholder="Tempat Lahir" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir ?>" placeholder="Tanggal Lahir" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $jenis_kelamin ?>" placeholder="Jenis Kelamin" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $agama ?>" placeholder="Agama" required>
          </div>
        </div>


        <div class="col-md-10">
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $status ?>" placeholder="Status" required>
          </div>
        </div>


        <div class="col-md-10">
          <div class="form-group">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?php echo $pendidikan_terakhir ?>" placeholder="Pendidikan Terakhir" required>
          </div>
        </div>


        <div class="col-md-10">
          <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $pekerjaan ?>" placeholder="Pekerjaan" required>
          </div>
        </div>


        <div class="col-md-10">
          <div class="form-group">
            <label for="nomor_telepon">No Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $nomor_telepon ?>" placeholder="No Telepon" required>
          </div>
        </div>


        <div class="col-md-10">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>" placeholder="Alamat" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col offset-sm-1">
          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
          <a href="?page=datapenduduk-show" class="btn btn-warning">Kembali</a>
        </div>
      </div>
    </form>

  </div>
</div>
<script src="validation.js"></script>