<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="Rumah Sakit Nirwana">
 <meta name="author" content="@Ikbaee">
 <title>RSU Nirwana</title>
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/3dcc27b42b.js" crossorigin="anonymous"></script>
 <script src="js/jquery.js"></script>
</head>
<body id="page-top">
 <div id="wrapper">
 <?php include "nav.php" ?>
 <div id="content-wrapper" class="d-flex flex-column">
 <div id="content">
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
 <i class="fa fa-bars"></i>
 </button>
 <ul class="navbar-nav ml-auto">
 <div class="topbar-divider d-none d-sm-block"></div>
 <li class="nav-item dropdown no-arrow">
 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 <span class="mr-2 d-lg-inline text-gray-600 small">Petugas</span>
 <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
 </a>
 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" arialabelledby="userDropdown">
 <a class="dropdown-item" href=# data-toggle="modal" data-target="#logoutModal">
 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
 </a>
 </div>
 </li>
 </ul>
 </nav>
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik Logout jika ingin keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">