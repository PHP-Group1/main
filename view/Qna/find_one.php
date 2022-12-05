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

            border: 2px solid #000000;
        }
        .input_content{
            width: 797px;
            height: 662px;

            border: 2px solid #000000;
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
                        <div class = "input_title"></div>
                        <div class = "input_content"></div>
                    </div>
                </form>
        </div>
    </div>
    
</body>
</html>
