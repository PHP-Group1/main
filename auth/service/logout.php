<?php
    session_start();

    if(isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);

        echo
            "
            <script>
                alert('로그아웃');
                location.href = '../login_view.php'
            </script>
            ";
    } else {
        echo 
            "
            <script>
                alert('로그인 안돼있음');
                location.href = '../login_view.php'
            </script>
            ";
    }

?>