<?php
include 'connection.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($con, "select * from user where username ='$username' and password ='$password'");
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    $_SESSION['user'] = $data['user'];
    if($data['user'] =='admin'){
        $query = "select * from user where id = '$data[0]'";
    }else{
        $query = "select * from user where id = '$data[0]'";
    }
    $row = mysqli_fetch_array(mysqli_query($con, $query));
    $_SESSION['id'] = $row[0];
    $_SESSION['username'] = $row[5];
  header('location: index.php');
    }else{
        echo "<script>alert('username and password tidak cocok!');";
        echo "window.location.replace('login.php');</script>";
    }
?>