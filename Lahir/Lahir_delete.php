<?php
include "../connection.php";
if (isset($_GET['idsktm'])) {
$idsktm = $_GET['idsktm'];
$result = mysqli_query($con, "DELETE FROM sk_kelahiran WHERE idsktm='$idsktm'");
// header("Location:?page=Skj-show");
echo "<script>window.location.href = '?page=Sktm-show';</script>";
}
