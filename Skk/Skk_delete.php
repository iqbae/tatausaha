<?php
include "../connection.php";
if (isset($_GET['idskk'])) {
$idskk = $_GET['idskk'];
$result = mysqli_query($con, "DELETE FROM suratketerangankematian WHERE idskk='$idskk'");
// header("Location:?page=Skj-show");
echo "<script>window.location.href = '?page=Skk-show';</script>";
}
