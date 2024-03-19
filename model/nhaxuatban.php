<?php
function ds_nhaxuatban()
{
    $sql = "SELECT * FROM nhaxuatban order by idNhaXuatBan desc";
    $listnhaxuatban = pdo_query($sql);
    return $listnhaxuatban;
}
?>