<?php
if (isset($_GET['idskj'])) {
include "../connection.php";
$idskj = $_GET['idskj'];
$result = mysqli_query($con, "DELETE FROM sk_bebas_napza WHERE idskj='$idskj'");
// header("Location:?page=Skj-show");
echo "<script>window.location.href = '?page=Skj-show';</script>";
}
