<?php
    
    require_once $_SERVER["DOCUMENT_ROOT"] . "/main/common/common.php";
    
    $type = $_GET['listen_title'];

    if (isset($_COOKIE[$type])) {
        $content = $_COOKIE[$type];
    } else {
        $sql = "select content from listen where type = '$type'";

        $result = sqlResult($sql);

        $row = mysqli_fetch_all($result);

        $num = mt_rand(0, 4);

        $content = $row[$num][0];

        date_default_timezone_set('Asia/Seoul');
        $now = strtotime("now");
        $end = strtotime("+1 day"."00:00:00");
    
        $available = $end - $now;

        setcookie($type, $content, time() + $available);
    }
?>
