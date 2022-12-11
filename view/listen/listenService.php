<?php

    require_once "../../common/common.php";

    $type = $_GET['listen_title'];

    $sql = "select content from listen where type = '$type'";

    $result = sqlResult($sql);

    $row = mysqli_fetch_all($result);

    $num = mt_rand(0, 4);

    $content = $row[$num][0];
