<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/main/common/common.php";

    $sql = "select * from listen where type = 'item'";
    $result = sqlResult($sql);
    $row = mysqli_fetch_all($result);
    $num = mt_rand(0, 4);
    $item = $row[$num];