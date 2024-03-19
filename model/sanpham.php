<?php
function them_sanpham($tenSanPham, $giaTien, $filename, $mota, $iddm)
{
    $sql = "insert into sanpham(tenSanPham, giaTien, hinhAnh,moTa,iddm) values ('$tenSanPham', '$giaTien', '$filename', '$mota', '$iddm')";
    pdo_execute($sql);
}
function xoa_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function ds_sanpham($key="", $iddm=0){
    $sql = "SELECT * FROM sanpham where 1";
    if ($key!="") {
        $sql .=" and tenSanPham like '%".$key."%'";
    }
    if ($iddm>0) {
        $sql .=" and iddm= '".$iddm."'";
    }
    $sql.=" order by id desc";

    $listsp = pdo_query($sql);
    return $listsp;
}
function sua_sanpham($id)
{
    $sql = "select * from sanpham where id = " . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id, $tenSanPham, $giaTien, $filename, $mota, $iddm)
{
    $sql = "update sanpham set tenSanPham = '" . $tenSanPham . "',giaTien = '" . $giaTien . "',hinhAnh = '" .$filename . "',moTa = '" . $mota . "',iddm = '" .$iddm . "' where id=" .$id;
    pdo_execute($sql);
    
}
function ds_sanpham_trangchu(){
    $sql = "SELECT * FROM sanpham where 1 order by id desc limit 0,9";
    
    

    $listsp = pdo_query($sql);
    return $listsp;
}
function ds_sanpham_top10(){
    $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,10";
    
    

    $listsp = pdo_query($sql);
    return $listsp;
}
