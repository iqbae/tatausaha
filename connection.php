<?php
$databasehost = "localhost";
$databasename = "desa";
$databaseusername = "root";
$databasepassword = "";
$con = mysqli_connect("$databasehost", "$databaseusername", "$databasepassword",
"$databasename");
if (mysqli_connect_errno()) {
 echo "<h1>Koneksi database error : " . mysqli_connect_errno() . "</h1>";
}
?>