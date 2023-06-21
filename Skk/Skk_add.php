<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nomor_surat = $_POST['nomor_surat'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tempat_tanggal = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
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
    echo "Foto gagal diupload.";
  }
  $tanggal_surat = $_POST['tanggal_surat'];
  $insert = mysqli_query($con, "INSERT INTO suratketerangankematian(nomor_surat,nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,tanggalmeninggal_dunia,kewarganegaraan,agama,status,pekerjaan,tempat_kematian,sebab_kematian,yang_melapor,nik_melapor,hubungandenganyang_meninggal,foto,tanggal_surat) VALUES('$nomor_surat','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$tanggalmeninggal_dunia','$kewarganegaraan','$agama','$status','$pekerjaan','$tempat_kematian','$sebab_kematian','$yang_melapor','$nik_melapor','$hubungandenganyang_meninggal','$direktori','$tanggal_surat')");



  if ($insert) {
    echo "<script>window.location.href = '?page=Skk-show';</script>";
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
            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['nik'];?>" placeholder="NIK" readonly>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'];?>" placeholder="Nama" readonly>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>" placeholder="Tempat Lahir" readonly>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>" placeholder="Tanggal Lahir" readonly>
          </div>
          </div>
          </div>
        

      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>" placeholder="Jenis Kelamin" readonly>
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
            <label for="tanggalmeninggal_dunia">Tanggal Meninggal Dunia</label>
            <input type="date" class="form-control" id="tanggalmeninggal_dunia" name="tanggalmeninggal_dunia" placeholder="Tanggal Meninggal Dunia" required>
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
            <label for="agama">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data['agama'];?>" placeholder="Agama" readonly>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['status'];?>" placeholder="Status" readonly>
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
            <label for="tempat_kematian">Tempat Kematian</label>
            <input type="text" class="form-control" id="tempat_kematian" name="tempat_kematian" placeholder="Tempat Kematian" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="sebab_kematian">Sebab Kematian</label>
            <input type="text" class="form-control" id="sebab_kematian" name="sebab_kematian" placeholder="Sebab Kematian" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="yang_melapor">Yang Melapor</label>
            <input type="text" class="form-control" id="yang_melapor" name="yang_melapor" placeholder="Yang Melapor" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="nik_melapor">Nik Melapor</label>
            <input type="text" class="form-control" id="nik_melapor" name="nik_melapor" placeholder="Nik Melapor" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="hubungandenganyang_meninggal">Hubungan Dengan Yang Meninggal</label>
            <input type="text" class="form-control" id="hubungandenganyang_meninggal" name="hubungandenganyang_meninggal" placeholder="Hubungan Dengan Yang Meninggal" required>
          </div>
        </div>
      

      <div class="col-md-10">
          <div class="form-group">
            <label for="foto">Upload Foto Pengantar RT</label>
            <input type="file" class="form-control" id="foto" name="foto" placeholder="Upload Foto Pengantar RT" required>
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
