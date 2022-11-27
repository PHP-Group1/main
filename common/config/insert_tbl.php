<?php

    require 'common.php';

    $name = $_POST['name'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $sex = $_POST['sex'];
    $birth = $_POST['birth'];
    $agree = $_POST['agree'];

    $id_check = "SELECT * FROM tbl_user WHERE id = '$id'";
    

    if(!$id_check)
    {
        
        $sql = "
        INSERT INTO tbl_user(name,id,pw,sex,birth,agree)
        VALUE ('$name','$id','$pw','$sex','$birth','$agree')
        ";

        mysqli_query($conn,$sql);

        echo "
        <script>
            alert('회원가입을 완료하였습니다.');
        </script>
        ";
    }
    else
    {
        echo "
        <script>
            alert('중복된 아이디입니다. 다시입력하여주세요.');
        </script>
        ";
    }




?>