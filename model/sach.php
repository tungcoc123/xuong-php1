<?php
function ds_sach($key="", $idXuatBan=0){
    $sql = "SELECT * FROM sach where 1";
    if ($key!="") {
        $sql .=" and tenSach like '%".$key."%'";
    }
    if ($idXuatBan>0) {
        $sql .=" and idXuatBan= '".$idXuatBan."'";
    }
    $sql.=" order by id desc";

    $listsach = pdo_query($sql);
    return $listsach;
}
function them_sach($tenSach, $gia, $filename, $mota, $idXuatBan){
    $sql = "insert into sach(tenSach, gia, hinhAnh,moTa,idXuatBan) values ('$tenSach', '$gia', '$filename', '$mota', '$idXuatBan')";
    pdo_execute($sql);
}
function xoa_sach($id)
{
    $sql = "delete from sach where id=" . $id;
    pdo_execute($sql);
}
function update_sach($id,$tenSach, $gia, $filename, $mota, $idXuatBan)
{
    $sql = "update sanpham set tenSach = '" . $tenSach . "',gia = '" . $gia . "',hinhAnh = '" .$filename . "',moTa = '" . $mota . "',idXuatBan = '" .$idXuatBan . "' where id=" .$id;
    pdo_execute($sql);
    
}
function sua_sach($id)
{
    $sql = "select * from sach where id = " . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
?>