<?php
if (isset($_POST['submit'])) {
  $idskj = $_POST['idskj'];
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
  $aphetamine = $_POST['aphetamine'];
  $methamphetamine = $_POST['methamphetamine'];
  $tch = $_POST['tch'];
  $tanggal_surat = $_POST['tanggal_surat'];
  $insert = mysqli_query($con, "INSERT INTO sk_bebas_napza(nomor_surat,nik,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,status,agama,kewarganegaraan,pekerjaan,alamat,keperluan,aphetamine,methamphetamine,tch,tanggal_surat) VALUES('$nomor_surat','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$status','$agama','$kewarganegaraan','$pekerjaan','$alamat','$keperluan','$aphetamine','$methamphetamine','$tch','$tanggal_surat')");

  if ($insert) {
    echo "<script>window.location.href = '?page=Skj-show';</script>";
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
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Surat Keterangan Bebas Narkoba</h6>
    </div>
    <div class="card-body">
      <form method="POST" class="needs-validation" novalidate>
        <!-- <div class="row"> -->
          <div class="col">
            <div class="form-group">
              <label for="nomor_surat">Nomor Surat</label>
              <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Nomor Surat" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data['nik']; ?>" placeholder="NIK" readonly>
            </div>
          </div>
        
          <div class="col">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" placeholder="Tempat Lahir" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" placeholder="Jenis Kelamin" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['status']; ?>" placeholder="status" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="agama">Agama</label>
              <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" value="<?php echo $data['agama']; ?>" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="kewarganegaraan">Kewarganegaraan</label>
              <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan']; ?>" placeholder="Kewarganegaraan" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" placeholder="Pekerjaan" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat']; ?>" readonly>
            </div>
          </div>

          <div class="col">
            <div class="form-group ">
              <label for="keperluan">Keperluan</label>
              <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan" required>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="tanggal_surat">Tanggal Surat</label>
              <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" placeholder="Tanggal Surat" required>
            </div>
          </div>

          <div class="row"><!-- start countainer -->
            <div class=" col form-group">
              <label for="aphetamine">Aphetamine</label>
              <input type="text" class="form-control border-warning" id="aphetamine" name="aphetamine" placeholder="Hasil Pemeriksaan" required>
              <div class="form-text">Isi dengan "Negatif" atau "Positif"</div>
            </div>
            <div class="col form-group">
              <label for="methamphetamine">Methamphetamine</label>
              <input type="text" class="form-control border-warning" id="methamphetamine" name="methamphetamine" placeholder="Hasil Pemeriksaan" required>
              <div class="form-text">Isi dengan "Negatif" atau "Positif"</div>
            </div>
            <div class=" col form-group">
              <label for="tch">TCH</label>
              <input type="text" class="form-control border-warning" id="tch" name="tch" placeholder="Hasil Pemeriksaan" required>
              <div class="form-text">Isi dengan "Negatif" atau "Positif"</div>
            </div>
        </div> <!--end countainer-->
        
        
      </div>
    </div>

  <input type="submit" name="submit" class="btn btn-success" value="Simpan">
  <a href="?page=Skj-show" class="btn btn-warning">Kembali</a>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
  function isi_otomatis() {
    var nim = $("#nim").val();
    $.ajax({
      url: 'ajax.php',
      data: "nik=" + nimk,
    }).success(function(data) {
      var json = data,
        obj = JSON.parse(json);
      $('#nik').val(obj.nik);
      $('#nama').val(obj.nama);
      $('#tempat_lahir').val(obj.tempat_lahir);
      $('#jurusan').val(obj.jurusan);
    });
  }
</script>

</div>
</div>

<script>
  $("#kategori").select2({
    theme: 'bootstrap4',
    placeholder: "- Pilih Kategori -"
  });
</script>

<script src="validation.js"></script>