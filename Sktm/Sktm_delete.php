<?php
include "../connection.php";
if (isset($_GET['idsktm'])) {
$idsktm = $_GET['idsktm'];
$result = mysqli_query($con, "DELETE FROM suratketerangantidakmampu WHERE idsktm='$idsktm'");
// header("Location:?page=Skj-show");
echo "<script>window.location.href = '?page=Skj-show';</script>";
}
