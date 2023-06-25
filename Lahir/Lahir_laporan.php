<?php
// Panggil koneksi database.php untuk koneksi database
require_once "../connection.php";
// panggil fungsi untuk format tanggal
include "../css/fungsi_tanggal.php";
// panggil fungsi untuk format rupiah
include "../css/fungsi_rupiah.php";

$hari_ini = date("Y-m-d");
$year = date("Y");
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Laporan Rekap Pelayanan</title>
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

  <h3><u>REKAP LAPORAN SURAT KETERANGAN LAHIR</u></h3>
  </div>
  <br>
  <div id="isi">
    <table align="center" width="86%" id="isit" class="grid" style="border:0.2mm solid #000;">
      <thead style="background:#e8ecee">
        <tr class="tr-title">
          <th class="center">No</th>
          <th class="left">Nomor Surat</th>
          <th class="center">Nama Istri</th>
          <th class="center">Umur Istri</th>
          <th class="center">Nama Suami</th>
          <th class="center">Umur Suami</th>
          <th class="center">Tempat Lahir</th>
          <th class="center">Tanggal Lahir</th>
          <th class="center">Pukul</th>
          <th class="center">Nama Anak</th>
          <th class="center">Jenis Kelamin</th>
          <th class="center">Berat</th>
          <th class="center">Panjang</th>
          <th class="center">Alamat</th>
          <th class="center">Anak Ke</th>
          <th class="center">Tanggal Surat</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $result = mysqli_query($con, "SELECT * FROM sk_kelahiran");
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nomor_surat'] ?></td>
            <td><?php echo $data['nama_istri'] ?></td>
            <td><?php echo $data['umur_istri'] ?></td>
            <td><?php echo $data['nama_suami'] ?></td>
            <td><?php echo $data['umur_suami'] ?></td>
            <td><?php echo $data['tempat_lahir'] ?></td>
            <td><?php echo $data['tanggal_lahir'] ?></td>
            <td><?php echo $data['pukul'] ?></td>
            <td><?php echo $data['nama_anak'] ?></td>
            <td><?php echo $data['jenis_kelamin'] ?></td>
            <td><?php echo $data['berat'] ?></td>
            <td><?php echo $data['panjang'] ?></td>
            <td><?php echo $data['anak_ke'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['tanggal_surat'] ?></td>
          </tr>
        <?php
          $no++;
        }

        ?>
      </tbody>
    </table>
    <div id="footer-tanggal">
      Banjarbaru, <?php echo tgl_eng_to_ind("$hari_ini"); ?>
    </div>
    <div id="footer-jabatan">
      Dokter Pemeriksa<br>

    </div>

    <div id="footer-nama">
      <u>dr. Deddi Reza Aldiano</u>
    </div>
    <br><br>
  </div>
</body>
<script type="text/javascript">
  window.print()
</script>