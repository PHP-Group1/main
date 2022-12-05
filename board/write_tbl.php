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
        .write_con_box{
            width:100%;
            height:971px;
            margin:0;
            padding:0;
        }
        .write_con{
            position:absolute;
            left:20%;
            margin: 0;
            width: 80%;
            height: 971px;
            background: #FFFDF5;
        }
        .wrap_write{
            height: 808px;
            width: 805px;
            margin: 95px auto;
        }
        .input_title{
            width: 794px;
            height: 64px;
            margin-bottom: 17px;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;
            background-color: #FFFDF5;

            border: 2px solid #000000;
        }
        .input_content{
            width: 797px;
            height: 662px;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;
            background-color: #FFFDF5;

            border: 2px solid #000000;
        }
        .send{
            margin:0;
            padding:0;
            width: 109px;
            height: 48px;
            float:right;
            margin-top: 22px;

            font-weight: 700;
            font-size: 32px;
            line-height: 39px;
            background-color: #FFFDF5;
        }
    </style>
</head>
<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php";
        ?>
    </header>
    <div class = "write_con_box">
        <nav>
            <?php
                include $_SERVER["DOCUMENT_ROOT"]."/main/view/side/board_side.php";
            ?>
        </nav>
        <div class = "write_con">
            <div class = "wrap_write">
                <form action="write_success.php" method="post">
                        <input type="title" class = "input_title" name="title" placeholder="제목을 입력하여주세요.">
                        <textarea class = "input_content" name="content" placeholder="내용을 입력하여주세요."></textarea>
                        <input type="submit" value="보내기" class = "send">
                    </div>
                </form>
        </div>
    </div>
    
</body>
</html>
