<?php include "header.php" ?>
<?php
include 'connection.php';
error_reporting(0);
switch ($_GET['page']) {
default:
include "dashboard.php";
break;
case "dashboard";
include "dashboard.php";
break;
// SK Janda
case "Narkoba-show";
include "Narkoba/Narkoba_show.php";
break;
case "Narkoba-add";
include "Narkoba/Narkoba_add.php";
break;
case "Narkoba-edit";
include "Narkoba/Narkoba_edit.php";
break;
case "Narkoba-delete";
include "Narkoba/Narkoba_delete.php";
break;
// SK Tidak Mampu
case "Lahir-show";
include "Lahir/Lahir_show.php";
break;
case "Lahir-add";
include "Lahir/Lahir_add.php";
break;
case "Lahir-edit";
include "Lahir/Lahir_edit.php";
break;
case "Lahir-delete";
include "Lahir/Lahir_delete.php";
break;
// SK Usaha
case "Skbuta-show";
include "Skbuta/Skbuta_show.php";
break;
case "Skbuta-add";
include "Skbuta/Skbuta_add.php";
break;
case "Skbuta-edit";
include "Skbuta/Skbuta_edit.php";
break;
case "Skbuta-delete";
include "Skbuta/Skbuta_delete.php";
break;
// SK Kematian 
case "Sakit-show";
include "Sakit/Sakit_show.php";
break;
case "Sakit-add";
include "Sakit/Sakit_add.php";
break;
case "Sakit-edit";
include "Sakit/Sakit_edit.php";
break;
case "Sakit-delete";
include "Sakit/Sakit_delete.php";
break;
// SK Belum Memiliki Rumah 
case "Sehat-show";
include "Sehat/Sehat_show.php";
break;
case "Sehat-add";
include "Sehat/Sehat_add.php";
break;
case "Sehat-edit";
include "Sehat/Sehat_edit.php";
break;
case "Sehat-delete";
include "Sehat/Sehat_delete.php";
break;
// Data Penduduk
case "datapenduduk-show";
include "datapenduduk/datapenduduk_show.php";
break;
case "datapenduduk-show1";
include "datapenduduk/datapenduduk_show1.php";
break;
case "datapenduduk-show2";
include "datapenduduk/datapenduduk_show2.php";
break;
case "datapenduduk-show3";
include "datapenduduk/datapenduduk_show3.php";
break;
case "datapenduduk-show4";
include "datapenduduk/datapenduduk_show4.php";
break;
case "datapenduduk-show5";
include "datapenduduk/datapenduduk_show5.php";
break;
case "datapenduduk-add";
include "datapenduduk/datapenduduk_add.php";
break;
case "datapenduduk-edit";
include "datapenduduk/datapenduduk_edit.php";
break;
case "datapenduduk-delete";
include "datapenduduk/datapenduduk_delete.php";
break;
// Data Pegawai
case "datapegawai-show";
include "datapegawai/datapegawai_show.php";
break;
case "datapegawai-add";
include "datapegawai/datapegawai_add.php";
break;
case "datapegawai-edit";
include "datapegawai/datapegawai_edit.php";
break;
case "datapegawai-delete";
include "datapegawai/datapegawai_delete.php";
break;
// user
case "user-show";
include "user/user_show.php";
break;
case "user-add";
include "user/user_add.php";
break;
case "user-edit";
include "user/user_edit.php";
break;
case "user-edit";
include "user/user_delete.php";
break;
}
?>
<?php include "footer.php" ?>