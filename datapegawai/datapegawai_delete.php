<?php 
include "../connection.php";
if (isset($_GET['idpegawai'])) {
$idpegawai = $_GET['idpegawai'];
$result = mysqli_query($con, "DELETE FROM datapegawai WHERE idpegawai='$idpegawai'");
// header("Location:?page=datapegawai-show");
echo "<script>window.location.href = '?page=datapegawai-show';</script>";
}