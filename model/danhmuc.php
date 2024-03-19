<?php
function them_dm($tenloai)
{
    $sql = "insert into danhmuc(tenDanhMuc) values ('$tenloai')";
    pdo_execute($sql);
}
function xoa_dm($id)
{
    $sql = "delete from danhmuc where id=" .$id;
    pdo_execute($sql);
}
function ds_dm()
{
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdm = pdo_query($sql);
    return $listdm;
}
function sua_dm($id)
{
    $sql = "select * from danhmuc where id = " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_dm($id,$tenloai)
{
    $sql = "update danhmuc set tenDanhMuc = '" . $tenloai . "' where id= " . $id;
    pdo_execute($sql);
    
}
