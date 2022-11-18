<?php

    require "../../common/common.php";

    $sql = "select * from tbl_board";

    $result = sqlResult($sql);

    $row = mysqli_fetch_array($result);

    if ($row != null) {
        do {
            $title = $row['title'];
            $content = $row['content'];
            echo 
                "
                    <table border=\"1\" border-collapse=\"collapse\">
                        <tr>
                            <td>제목: {$title}</td>
                            <td>내용: {$content}</td>
                        </tr>
                ";
            $row = mysqli_fetch_array($result);
        }
        while($row != null);

        echo "</table>";

        mysqli_close($conn);
    } else {
        echo "게시글이 존재하지 않습니다.";
        mysqli_close($conn);
    }



?>