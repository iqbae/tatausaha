<?php
if (isset($_GET['idskbmr'])) {
include "../connection.php";
$idskbmr= $_GET['idskbmr'];
$result = mysqli_query($con, "DELETE FROM sk_sehat WHERE idskbmr='$idskbmr'");
// header("Location:?page=Sehat-show");
echo "<script>window.location.href = '?page=Sehat-show';</script>";
}