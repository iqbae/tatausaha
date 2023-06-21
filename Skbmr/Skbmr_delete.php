<?php
if (isset($_GET['idskbmr'])) {
include "../connection.php";
$idskbmr= $_GET['idskbmr'];
$result = mysqli_query($con, "DELETE FROM suratbelummemilikirumah WHERE idskbmr='$idskbmr'");
// header("Location:?page=Skbmr-show");
echo "<script>window.location.href = '?page=Skbmr-show';</script>";
}