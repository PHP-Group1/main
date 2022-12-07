<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .board_box {
            width: 80%;
            height: 971px;
            position: absolute;
            left: 20%;
            background: #FFFDF5;
        }
        .board_con{
            height: 338.47px;
            width: 593px;

            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
            
            margin: auto;
            margin-top: 160px;
        }
    </style>
</head>

<body>
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
    <div class="board_box">
        <div class = "board_con"></div>
        <div class = "pageNum"></div>
    </div>
</body>

</html>