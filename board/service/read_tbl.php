<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .read_con {
            position: absolute;
            left: 20%;
            width: 80%;
            height: 918px;
            background-color: #fffdf5;
        }

        .read_wrap {
            height: 751px;
            width: 809px;

            margin: 95px auto;
        }

        .title {
            width: 805px;
            height: 64px;
            border: 2px solid #000000;

            margin-bottom: 17px;
        }
        .content{
            width:805px;
            height:662px;

            border: 2px solid #000000;
        }
        .id_text{
            position:absolute;
            right:0;
            bottom:0;
        }
        .content{
            position:relative;
        }
    </style>
</head>

<body>
    <?php
    require '../../common/common.php';

    $idx = $_GET['idx'];

    $conn = mysqli_connect("210.223.18.224", "pino", "qwer1595", "php");
    $sql = "SELECT user_id, title, content
            FROM tbl_board
            WHERE idx = $idx";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($result);
?>
<header>
    <?php
        include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php";
    ?>
</header>
<aside>
    <?php
        include $_SERVER["DOCUMENT_ROOT"]."/main/view/side/board_side.php";
    ?>
</aside>
    <div class="read_con">
        <div class="read_wrap">
            <table>
                <div class="title" >
                    <?php echo $rows['title']?> 
                </div>
                    <div class="content">
                        <?php echo $rows['content']?>
                        <div class = "id_text">
                            ID : 
                            <?php echo preg_replace('/(?<=.{4})./u','*',$rows['user_id']);?>
                        </div>
                    </div>
            </table>
            <a href="http://localhost:80/main/board/service/index_tbl.php">
                뒤로가기
            </a>
        </div>

    </div>
</body>

</html>