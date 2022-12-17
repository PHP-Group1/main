<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/main/common/common.php";

    if (isset($_COOKIE['fortune'])) {
        $fortune = $_COOKIE['fortune'];
    } else {
        $sql = "select content from listen where type = 'fortune';";
        $result = sqlResult($sql);
        $row = mysqli_fetch_all($result);
        $num = mt_rand(0, count($row)-1);

        $fortune = $row[$num][0];
        
        cookie("fortune", $fortune);
    }
    