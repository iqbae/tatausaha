<?php
// Panggil koneksi database.php untuk koneksi database
require_once "../connection.php";
// panggil fungsi untuk format tanggal
include "../css/fungsi_tanggal.php";
// panggil fungsi untuk format rupiah
include "../css/fungsi_rupiah.php";

$hari_ini = date("Y-m-d");
$year = date("Y");


if (isset($_GET['idsku'])) {
  $idsku  = $_GET['idsku'];
  $no = 1;
  $query = mysqli_query($con, "SELECT * FROM sk_buta b JOIN datapenduduk p ON b.nik=p.nik WHERE b.idsku='$_GET[idsku]'")
    or die('Ada kesalahan pada query tampil Data : ' . mysqli_error($con));
}

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Laporan Surat Pelayanan</title>
  <link rel="stylesheet" type="text/css" href="../css/laporan.css" />
</head>

<body>
  <h2 align="center">
    <img style="position: absolute left; margin-top:10px;margin-right:600px;margin-bottom:10px;" height="60" src="../img/nirwana.png" alt="Logo">
    <center style="margin-top: -100px;">
      <br>RUMAH SAKIT UMUM NIRWANA <br>
      <small style="font-size: 12px;"> Jalan Panglima Batur Timur Nomor 42 Banjarbaru Kalimantan Selatan<small>
          <br>Telepon (0511) 6749272 E-mail : rsu.nirwana@gmail.com
    </center>
  </h2>
  <hr style="border: 2; border-top: solid 3.5px #444;">
  <?php
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <div id="title">
      <h3><u>SURAT KETERANGAN DOKTER</u></h3><br>
      <p style="margin-top: -40px; font-size: 14;">Nomor :&nbsp;<?php echo $data['nomor_surat']; ?>/NIR<!-- / X - <?php echo $year; ?> --></p>
    </div>
    <br>
    <?php
    $query2 = mysqli_query($con, "SELECT * FROM datapegawai WHERE jabatan='Kasi Kesos'")
      or die('Ada kesalahan pada query tampil data : ' . con_error($mysqli));
    $data2  = mysqli_fetch_assoc($query2);
    ?>
    <div id="isi">
      <div class="container" style="font-size: 11pt;">
        <p style="text-align: justify;"> yang bertanda tangan dibawah ini Dokter Penguji pada Rumah Sakit Nirwana, dengan ini menerangkan bahwa telah memeriksa dengan teliti seorang :
      </div>
      <table style="border:none; font-size: 11pt;" width="700px">
        <tr>
          <td width="360" align="left"><br>Nama</td>
          <td width="340" align="left"><br>: <b><?php echo $data['nama']; ?></b></td>
        </tr>
        <tr>
          <td width="360" align="left">NIK</td>
          <td width="340" align="left">: <?php echo $data['nik']; ?></td>
        </tr>
        <tr>
          <td width="360" align="left">Tempat/Tanggal Lahir</td>
          <td width="340" align="left">: <?php echo $data['tempat_lahir']; ?>, <?php echo tgl_eng_to_ind($data['tanggal_lahir']); ?></td>
        </tr>
        <tr>
          <td width="360" align="left">Jenis Kelamin</td>
          <td width="340" align="left">: <?php echo $data['jenis_kelamin']; ?></td>
        </tr>
        <tr>
          <td width="360" align="left">Status</td>
          <td width="340" align="left">: <?php echo $data['status']; ?></td>
        </tr>
        <tr>
          <td width="360" align="left">Agama</td>
          <td width="340" align="left">: <?php echo $data['agama']; ?></td>
        </tr>
        <tr>
          <td width="360" align="left">Kewarganegaraan</td>
          <td width="340" align="left">: <?php echo $data['kewarganegaraan']; ?></td>
        </tr>
        <tr>
          <td width="360" align="left">Pekerjaan</td>
          <td width="340" align="left">: <?php echo $data['pekerjaan']; ?></td>
        </tr>
        <tr>
          <td width="360" align="left">Alamat</td>
          <td width="340" align="left">: <?php echo $data['alamat']; ?></td>
        </tr>
      </table>
      <div class="container" style="font-size: 11pt;">
        <p style="text-align: justify;">dan yang bersangkutan dinyatakan </p>
        <b style="font-size:18pt"> <?php echo $data['hasil']; ?></b>
        <p style="text-align: justify;">Surat Keterangan ini dipergunakan untuk : </p>  
        <b style="font-size:18pt"><?php echo $data['keperluan']; ?></b>
        <p style="text-align: justify;">Demikian Surat Keterangan Buta Warna ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
      </div>
    <?php
    $no++;
  }
    ?>
    <div id="footer-tanggal">
      Banjarbaru, <?php echo tgl_eng_to_ind("$hari_ini"); ?>
    </div>
    <div id="footer-jabatan">
      a.n Direktur RSU Nirwana Banjarbaru<br>
      Dokter Pemeriksa
    </div>
    <div id="footer-nama">
      <u>dr. Deddi Reza Aldiano</u>
    </div>
    <br><br>
    </div>
    <div class="container" style="font-size: 9pt;">
      <br><br>
      <p style="text-align: justify;">Catatan : </u></i></b><br><br>
        Surat keterangan ini berlaku selama 3 bulan sejak tanggal diterbitkan.
      <p>
</body>
<script type="text/javascript">window.print()</script>