<?php

    echo '<h1>회원가입 정보</h1>';

    require 'conn.php';

    $sel = "SELECT * FROM tbl_user";

    $result = mysqli_query($conn,$sel);

    while($row = mysqli_fetch_array($result))
    {
    echo $row['idx'].".&nbsp".
        "이름 : ".$row['name'].
        "ㅣㅣ아이디 : ".$row['id'].
        "ㅣㅣ비밀번호 : ".$row['pw'].
        "ㅣㅣ성별 : ".$row['sex'].
        "ㅣㅣ생일 : ".$row['birth'].
        "ㅣㅣ생성일 : ".$row['r_date'].
    '<br>';
    }

?>