<?php
include "../connection.php";
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
  $nama_usaha = $_POST['nama_usaha'];
  $alamat_usaha = $_POST['alamat_usaha'];
  $jenis_usaha = $_POST['jenis_usaha'];
  $keperluan = $_POST['keperluan'];
  $nama_file = $_FILES['foto']['name'];
  $tmp_file = $_FILES['foto']['tmp_name'];
  $direktori = "foto/$nama_file";
  if (move_uploaded_file($tmp_file, $direktori)) {
    echo "Foto berhasil diupload.";
  } else {
    echo "Foto gagal diupload.";
  }
  $tanggal_surat = $_POST['tanggal_surat'];
  $insert = mysqli_query($con, "INSERT INTO suratketeranganusaha(nomor_surat,nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,status,agama,kewarganegaraan,pekerjaan,alamat,nama_usaha,alamat_usaha,jenis_usaha,keperluan,foto,tanggal_surat) VALUES('$nomor_surat','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$status','$agama','$kewarganegaraan','$pekerjaan','$alamat','$nama_usaha','$alamat_usaha','$jenis_usaha','$keperluan','$direktori','$tanggal_surat')");
  if ($insert) {
    echo "<p>query berhasil<p/>";
} else {
    die('invalid Query : ' . mysqli_error($con));
}


  if ($insert) {
    echo "<script>window.location.href = '?page=Sku-show';</script>";
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
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Surat Keterangan Bebas Buta Warna</h6>
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
            <option value="" selected></option>

          </select>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir"  value="<?php echo $data['tempat_lahir'];?>"name="tempat_lahir" placeholder="Tempat Lahir" readonly>
          </div>
          </div>
        

        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>" name="tanggal_lahir" placeholder="Tanggal Lahir" readonly>
          </div>
        </div>
        
        
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>" name="jenis_kelamin" placeholder="Jenis Kelamin" readonly>
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
            <label for="nama_usaha">Nama Usaha</label>
            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="alamat_usaha">Alamat Usaha</label>
            <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" placeholder="Alamat Usaha" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="jenis_usaha">Jenis Usaha</label>
            <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" placeholder="Jenis Usaha" required>
          </div>
        </div>

        <div class="col-md-10">
          <div class="form-group">
            <label for="keperluan">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan" required>
          </div>
        </div>

      <div class="col-md-10">
          <div class="form-group">
            <label for="foto">Upload Foto keterangan dari Dokter</label>
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
