<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "view/header.php";
include "tongquan.php";

$spmoi= ds_sanpham_trangchu();
$dsdm = ds_dm();
$dstop10= ds_sanpham_top10();
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'gioithieu':
           include "view/gioithieu.php";
            break;
        
        case 'lienhe':
           include "view/lienhe.php";
            break;
        
        default:
            include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}

include "view/footer.php";


?>