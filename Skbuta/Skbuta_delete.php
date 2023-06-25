<?php
include "../connection.php";
if (isset($_GET['idsku'])) {
$idsku = $_GET['idsku'];
$result = mysqli_query($con, "DELETE FROM suratketeranganusaha WHERE idsku='$idsku'");
// header("Location:?page=Skbuta-show");
echo "<script>window.location.href = '?page=Skbuta-show';</script>";
}
