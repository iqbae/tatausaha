<ul class="navbar-nav bg-gradient-Light sidebar sidebar-light accordion"
id="accordionSidebar">
 <a class="sidebar-brand d-flex align-items-center justify-content-center"
href="index.php">
 <div class="sidebar-brand-icon">
 <i><img src="img/icon.png" alt="" height=60px"></i>
 
 </div>
 <div class="sidebar-brand-text mx-3">RSU  NIRWANA</div>
 </a>
 <hr class="sidebar-divider my-0">
 <li class="nav-item info">
 <a class="nav-link" href="?page=dashboard">
 <i class="fas fa-fw fa-tachometer-alt"></i>
 <span>Dashboard</span></a>
 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi1"
 aria-expanded="true" aria-controls="transaksi">
 <i class="fas fa-fw fa-tasks"></i>
 <span>Pelayanan</span>
 </a>
 <div id="transaksi1" class="collapse" aria-labelledby="headingTwo" dataparent="#accordionSidebar">
 <div class="bg-info py-2 collapse-inner rounded">
 <a class="collapse-item" href="?page=Narkoba-show">SK Bebas Narkoba</a>
 <a class="collapse-item" href="?page=Lahir-show">SK Lahir</a>
 <a class="collapse-item" href="?page=Skbuta-show">SK Buta Warna</a>
 <a class="collapse-item" href="?page=Sakit-show">SK Sakit</a>
 <a class="collapse-item" href="?page=Sehat-show">SK Sehat</a>
 <li class="nav-item">

 <li class="nav-item">
 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi"
aria-expanded="true" aria-controls="transaksi">
 <i class="fas fa-fw fa-database"></i>
 <span>Master Data</span>
 </a>
 <div id="transaksi" class="collapse" aria-labelledby="headingTwo" dataparent="#accordionSidebar">
 <div class="bg-info py-2 collapse-inner rounded">
 <a class="collapse-item" href="?page=datapenduduk-show">Pasien</a>
 <a class="collapse-item" href="?page=datapegawai-show">Dokter</a>
 </div>
 </div>
 </li>
 <li class="nav-item">
 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi2"
aria-expanded="true" aria-controls="transaksi">
 <i class="fas fa-fw  fa-folder-open"></i>
 <span>Rekap Laporan</span>
 </a>
 <div id="transaksi2" class="collapse" aria-labelledby="headingTwo" dataparent="#accordionSidebar">
 <div class="bg-info py-2 collapse-inner rounded">
 <a target="_BLANK" class="collapse-item" href="Narkoba/Narkoba_laporan.php">SK Bebas Narkoba</a>
 <a target="_BLANK" class="collapse-item" href="Lahir/Lahir_laporan.php">SK Lahir</a>
 <a target="_BLANK" class="collapse-item" href="Skbuta/Skbuta_laporan.php">SK Buta Warna</a>
 <a target="_BLANK" class="collapse-item" href="Sakit/Sakit_laporan.php">SK Sakit</a>
 <a target="_BLANK" class="collapse-item" href="Sehat/Sehat_laporan.php">SK Sehat</a>
 </div>
 </div>
 </li>
<li class="nav-item">
 <a class="nav-link" href="?page=user-show">
 <i class="fas fa-fw fa-user"></i>
 <span>User</span>
 </a>
 </li>
 <hr class="sidebar-divider d-none d-md-block">
 <div class="text-center d-none d-md-inline">
 <button class="rounded-circle border-0" id="sidebarToggle"></button>
 </div>
</ul>