<?php
// Panggil koneksi database.php untuk koneksi database
require_once "../connection.php";
// panggil fungsi untuk format tanggal
include "../css/fungsi_tanggal.php";
// panggil fungsi untuk format rupiah
include "../css/fungsi_rupiah.php";

$hari_ini = date("Y-m-d");
$year = date("Y");


if (isset($_GET['idsktm'])) {
            $idsktm  = $_GET['idsktm'];
            $no = 1;  
            $query = mysqli_query($con, "SELECT * FROM sk_kelahiran WHERE idsktm='$_GET[idsktm]'")
                or die('Ada kesalahan pada query tampil Data : '.mysqli_error($con));

}

?>
    <html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Laporan Surat Pelayanan</title>
        <link rel="stylesheet" type="text/css" href="../css/laporan.css" />
    </head>
    <body>
    <h2 align="center" >
            <img style="position: absolute left; margin-top:10px;margin-right:600px;margin-bottom:10px;"  height="60" src="../img/nirwana.png" alt="Logo">
            <center style="margin-top: -100px;">
            <br>RUMAH SAKIT UMUM NIRWANA <br>
            <small style="font-size: 12px;"> Jalan Panglima Batur Timur Nomor 42 Banjarbaru Kalimantan Selatan<small>
            <br>Telepon (0511) 6749272 E-mail : rsu.nirwana@gmail.com</center>
            </h2>
        <hr style="border: 2; border-top: solid 3.5px #444;">
        <!-- <?php
          while ($data = mysqli_fetch_array($query)) {    
        ?> -->
        <div id="title">
            <h3><u>SURAT KETERANGAN LAHIR</u></h3><br>
            <p style="margin-top: -40px; font-size: 14;">Nomor :&nbsp;<?php echo $data['nomor_surat']; ?>/NIR<!-- / X - <?php echo $year; ?> --></p>
        </div>
        <br>
        <?php 
          $query2 = mysqli_query($con, "SELECT * FROM datapegawai WHERE jabatan='Kasi Kesos'") 
                                                    or die('Ada kesalahan pada query tampil data : '.con_error($mysqli));
          $data2  = mysqli_fetch_assoc($query2);
        ?>
        <div id="isi">
            <table style="border:none; font-size: 11pt;" width="700px">
            <tr > 
              <td width="400" align="left"><br><br>Yang bertanda tangan di bawah ini, menerangkan bahwa</td>
              <td width="340" align="left"><br><br>:</td> 
            </tr>
            <tr >
              <td width="360" align="left"><br>Nama</td>
              <td width="340" align="left"><br>: <b><?php echo $data['nama_istri']; ?></b></td> 
            </tr>
            <tr >
              <td width="360" align="left">Umur</td>
              <td width="340" align="left">: <?php echo $data['umur_istri']; ?></td> 
            </tr>
            <tr > 
              <td width="400" align="left"><b>Merupakan istri dari<b></td>
            </tr>
            <tr > 
              <td width="400" align="left">Nama Suami</td>
              <td width="340" align="left">: <b><?php echo $data['nama_suami']; ?></b></td> 
            </tr>
            <tr >
              <td width="360" align="left">Umur</td>
              <td width="340" align="left">: <?php echo $data['umur_suami']; ?></td> 
            </tr>
            <tr >
              <td width="360" align="left">beralamat</td>
              <td width="340" align="left">: <?php echo $data['alamat']; ?></td> 
            </tr>
            <tr >
              <td width="360" align="left"><b>Telah melahirkan seorang anak pada<b></td>
              <td width="340" align="left"><br><br></td>  
            </tr>
            <tr >
              <td width="360" align="left">Tempat/Tanggal Lahir</td>
              <td width="340" align="left">: <?php echo $data['tempat_lahir']; ?>, <?php echo tgl_eng_to_ind($data['tanggal_lahir']); ?></td> 
            </tr>
            <tr >
              <td width="360" align="left">Nama </td>
              <td width="340" align="left">: <?php echo $data['nama_anak']; ?></td> 
            </tr>
            <tr >
              <td width="360" align="left">Jenis Kelamin</td>
              <td width="340" align="left">: <?php echo $data['jenis_kelamin']; ?></td> 
            </tr>
            <tr >
              <td width="360" align="left">Berat</td>
              <td width="340" align="left">: <?php echo $data['berat']; ?></td> 
            </tr>
            <tr >
              <td width="360" align="left">Panjang</td>
              <td width="340" align="left">: <?php echo $data['panjang']; ?></td> 
            </tr>
            <tr >
              <td width="360" align="left">Anak ke</td>
              <td width="340" align="left">: <?php echo $data['anak_ke']; ?></td> 
            </tr>
            
            </table>
            <div class="container" style="font-size: 11pt;">
              <br>
                <p style="text-align: justify;">Demikian Surat Keterangan Lahir ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
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
    </body>
<script type="text/javascript">window.print()</script>