<?php

    require '../../common/common.php';

    $name = $_POST['name'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $sex = $_POST['sex'];
    $birth = $_POST['birth'];
    $agree = $_POST['agree'];

    $id_check_sql = "select * from tbl_user where id = '$id'";
    $id_check_result = sqlResult($id_check_sql);
    $id_check = mysqli_fetch_array($id_check_result);

    if (!$id_check) {
        $register_sql = "insert into tbl_user(name, id, pw, sex, birth, agree) values('$name', '$id', '$pw', '$sex', '$birth', '$agree')";

        sqlResult($register_sql);

        mysqli_close($conn);

        echo 
            "<script>
                alert('회원가입 성공');
                location.href = '../register_success.php'
            </script>";
    } else {
        mysqli_close($conn);
        echo 
            "<script>
                alert('이미 존재하는 아이디');
                history.back();
            </script>";
    }

?>