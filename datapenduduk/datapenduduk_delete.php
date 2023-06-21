<?php
include "../connection.php";
if (isset($_GET['idpenduduk'])) {
$idpenduduk = $_GET['idpenduduk'];
$result = mysqli_query($con, "DELETE FROM datapenduduk WHERE idpenduduk='$idpenduduk'");
echo "<script>window.location.href = '?page=datapenduduk-show';</script>";
}