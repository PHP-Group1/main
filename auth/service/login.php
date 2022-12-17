<?php

    require '../../common/common.php';

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "select * from tbl_user where id = '$id'";

    $result = sqlResult($sql);

    $id_check = mysqli_num_rows($result);

    if (!$id_check) {
        mysqli_close($conn);
        echo 
            "<script>
                alert('존재하지 않는 아이디 입니다.');
                location.href = '../login_view.php';
            </script>";
    } else {
        $row = mysqli_fetch_array($result);

        $db_pw = $row['pw'];

        if ($pw != $db_pw) {
            echo 
            "<script>
                alert('비밀번호가 일치하지 않습니다.');
                history.back();
            </script>";
            exit;

        } else {
            session_start();
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['name'];
            $_SESSION["user_birth"] = $row['birth'];

            mysqli_close($conn);

            echo 
                "<script>
                    alert('성공적으로 로그인 되었습니다.');
                    location.href = '../../view/main_content.php';
                </script>";
        }

    }

?>