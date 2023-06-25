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
    <hr style="border: 2; border-top: solid 3.5px #444;">
    <div id="title">
        <h3><u>REKAP LAPORAN SURAT KETERANGAN BEBAS NARKOBA</u></h3>
    </div>
    <br>
    <div id="isi">
        <table align="center" width="86%" id="isit" class="grid" style="border:0.2mm solid #000;">
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th class="center">No</th>
                    <th class="left">Nomor Surat</th>
                    <th class="center">Nama</th>
                    <th class="center">Tempat Lahir</th>
                    <th class="center">Tanggal Lahir</th>
                    <th class="center">Jenis Kelamin</th>
                    <th class="center">Status</th>
                    <th class="center">Kewarganegaraan</th>
                    <th class="center">Keperluan</th>
                    <th class="center">Aphetamine</th>
                    <th class="center">Methamphetamine</th>
                    <th class="center">TCH</th>
                    <th class="center">Tanggal Surat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $result = mysqli_query($con, "SELECT * FROM sk_bebas_napza");
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td align="center"><?php echo $no; ?></td>
                        <td align="left"><?php echo $data['nomor_surat']; ?> </td>
                        <td align="left"><?php echo $data['nama']; ?></td>
                        <td align="left"><?php echo $data['tempat_lahir']; ?></td>
                        <td align="left"><?php echo $data['tanggal_lahir']; ?></td>
                        <td align="center"><?php echo $data['jenis_kelamin']; ?></td>
                        <td align="center"><?php echo $data['status']; ?></td>
                        <td align="left"><?php echo $data['kewarganegaraan']; ?></td>
                        <td align="center"><?php echo $data['keperluan']; ?></td>
                        <td align="left"><?php echo $data['aphetamine']; ?></td>
                        <td align="center"><?php echo $data['methamphetamine']; ?></td>
                        <td align="center"><?php echo $data['tch']; ?></td>
                        <td align="center"><?php echo tgl_eng_to_ind($data['tanggal_surat']); ?></td>
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
            a.n Direktur RSU Nirwana Banjarbaru<br>
            Direktur
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