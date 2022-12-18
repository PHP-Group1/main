<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .qna_con_box{
            width:100%;
            height:100vh;
            margin:0;
            padding:0;
        }
        .req_con{
            position:absolute;
            left:20%;
            margin: 0;
            width: 80%;
            height: 100vh;
            background: #FFFDF5;
        }
        .wrap{
            height: 595px;
            width: 937px;
            margin: 130px auto;
        }
        .text{
            padding: 0;
            margin: auto;
            margin-bottom: 22px;
            width:600px;
            height:48px;

            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
        }

        .input_box{
            width: 931px;
            height: 455px;
            resize: none;
        }
        .submit{
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
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header_check.php";
        ?>
    </header>
    <div class = "qna_con_box">
        <nav>
            <?php
                include $_SERVER["DOCUMENT_ROOT"]."/main/view/side/req_side.php";
            ?>
        </nav>
        <div class = "req_con">
            <div class = "wrap">
                <div class = "text">요구사항 및 개선사항을 입력해주세요</div>
                <textarea class = "input_box" name = "request"></textarea>
                <button class = "submit">보내기</button>
            </div>
        </div>
    </div>
    
    
</body>
</html>