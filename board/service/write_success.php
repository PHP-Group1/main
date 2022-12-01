<?php

    require '../../common/common.php';

    session_start();

    $title = $_POST['title'];
    $content = $_POST['content'];
    // $user_id = $_SESSION['id'];

    //user_id는 임시적으로 직접 기입하였음
    $sql = "INSERT INTO tbl_board(user_id,title,content)
            VALUES ('qwer1234','$title','$content')";

    $URL = 'index_tbl.php';
    

    if($title == null){
       echo"
        <script>
        alert('제목을 입력하여주세요.');
        history.back();
        </script>
        ";
    }
    else if($content == null){
        echo"
        <script>
        alert('내용을 입력하여주세요.');
        history.back();
        </script>
        ";
    }
    else{
        sqlResult($sql);
        ?>
        <script>
        alert('문의가 완료되었습니다.');
        location.replace('<?php echo $URL?>');
        </script>
        <?php

    }

?>