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
case "skj-show";
include "skj/skj_show.php";
break;
case "skj-add";
include "skj/skj_add.php";
break;
case "skj-edit";
include "skj/skj_edit.php";
break;
case "skj-delete";
include "skj/skj_delete.php";
break;
// SK Tidak Mampu
case "Sktm-show";
include "Sktm/Sktm_show.php";
break;
case "Sktm-add";
include "Sktm/Sktm_add.php";
break;
case "Sktm-edit";
include "Sktm/Sktm_edit.php";
break;
case "Sktm-delete";
include "Sktm/Sktm_delete.php";
break;
// SK Usaha
case "Sku-show";
include "Sku/Sku_show.php";
break;
case "Sku-add";
include "Sku/Sku_add.php";
break;
case "Sku-edit";
include "Sku/Sku_edit.php";
break;
case "Sku-delete";
include "Sku/Sku_delete.php";
break;
// SK Kematian 
case "Skk-show";
include "Skk/Skk_show.php";
break;
case "Skk-add";
include "Skk/Skk_add.php";
break;
case "Skk-edit";
include "Skk/Skk_edit.php";
break;
case "Skk-delete";
include "Skk/Skk_delete.php";
break;
// SK Belum Memiliki Rumah 
case "Skbmr-show";
include "Skbmr/Skbmr_show.php";
break;
case "Skbmr-add";
include "Skbmr/Skbmr_add.php";
break;
case "Skbmr-edit";
include "Skbmr/Skbmr_edit.php";
break;
case "Skbmr-delete";
include "Skbmr/Skbmr_delete.php";
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