<?php
include "../connection.php";
$dataUser = mysqli_query($con, "SELECT * FROM sk_bebas_napza");
$jumlahUser = mysqli_num_rows($dataUser);
$dataUser = mysqli_query($con, "SELECT * FROM datapenduduk");
$Userdatapenduduk = mysqli_num_rows($dataUser);
$dataUser = mysqli_query($con, "SELECT * FROM sk_sehat");
$Userbelummemilikirumah = mysqli_num_rows($dataUser);
$dataUser = mysqli_query($con, "SELECT * FROM sk_sakit");
$sk_sakit = mysqli_num_rows($dataUser);
$dataUser = mysqli_query($con, "SELECT * FROM sk_buta");
$sk_buta = mysqli_num_rows($dataUser);
$dataUser = mysqli_query($con, "SELECT * FROM sk_kelahiran");
$sk_kelahiran = mysqli_num_rows($dataUser);
$dataUser = mysqli_query($con, "SELECT * FROM datapegawai");
$datapegawai = mysqli_num_rows($dataUser);
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1 ">
                            SK BEBAS NARKOBA</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $jumlahUser;?></div>
                    </div>

                    <div class="col-auto">
                    <i class="fa-solid fa-pills fa-3x text-white"></i>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            SK LAHIR</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $sk_kelahiran
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fa-solid text-white fa-3x fa-baby-carriage"></i>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            SK BUTA WARNA</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $sk_buta
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid text-white fa-3x fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            SK SAKIT</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $sk_sakit
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope text-white fa-3x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            SK SEHAT</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $Userbelummemilikirumah
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope text-white fa-3x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            PASIEN</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $Userdatapenduduk?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-person text-white fa-3x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                            DOKTER</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $datapegawai
                                                                            ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-3x text-white fa-user-doctor"></i>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>