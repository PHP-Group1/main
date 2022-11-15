<?php

    require '../common/common.php';

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "select * from tbl_user where id = '$id'";

    $result = sqlResult($sql);

    $id_check = mysqli_num_rows($result);

    if (!$id_check) {
        echo 
            "<script>
                alert('아이디 없음');
                history.back();
            </script>";
    } else {
        $row = mysqli_fetch_array($result);

        $db_pw = $row['pw'];

        if ($pw != $db_pw) {
            echo 
            "<script>
                alert('비번 틀림');
                history.back();
            </script>";
            exit;

        } else {
            session_start();
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['name'];
            $_SESSION["user_birth"] = $row['birth'];
            $_SESSION["user_sex"] = $row['sex'];

            echo 
                "<script>
                    alert('로그인 성공');
                    location.href = '../view/login_view.php'
                </script>";
        }

    }

?>