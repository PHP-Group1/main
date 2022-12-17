<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/main/common/common.php";
    
    $type = $_GET['listen_title'];

    if (isset($_COOKIE[$type])) {
        $content = $_COOKIE[$type];
    } else {
        $sql = "select content from listen where type = '$type'";

        $result = sqlResult($sql);

        $row = mysqli_fetch_all($result);

        $num = mt_rand(0, count($row)-1);

        $content = $row[$num][0];

        cookie($type, $content);
    }
?>
