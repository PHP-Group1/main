<?php

    require "../../common/common.php";

    session_start();

    if (!isset($_SESSION['user_id'])) {
        echo 
            "
                <script>
                    alert('로그인 안됨');
                    history.back();
                </script>
            ";
    } else {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $user_id = $_SESSION['user_id'];


        $sql = "insert into tbl_board(title, content, user_id) values('$title', '$content', '$user_id')";

        sqlResult($sql);

        echo
            "
            <script>
                alert('게시글 업로드 완료');
                history.back();
            </script>
            ";

    }

?>