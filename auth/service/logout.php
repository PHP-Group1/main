<?php
    session_start();

    if(isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);

        echo
            "
            <script>
                alert('로그아웃을 성공했습니다.');
                location.href = 'http://localhost:80/main/auth/login_view.php';
            </script>
            ";
    } else {
        echo 
            "
            <script>
                alert('로그인상태가 아닙니다.');
                <script>
                    location.href = 'http://localhost:80/main/auth/login_view.php';
                </script>
            ";
    }

?>