<?php
include "../connection.php";
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM user WHERE id=$id");
// header("Location:?page=Skj-show");
echo "<script>window.location.href = '?page=Skj-show';</script>";
