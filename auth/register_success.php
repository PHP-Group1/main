 <!DOCTYPE html>
 <html lang="en">
 <head>
    <style>
        .c1{
            color: #AB6700;;
            position:relative;
        }
        body{margin: 0; padding: 0;}
        .box1{ width:100%; height:971px; background-color:#FFFDF5;}
        .box2{ position:absolute;left:42%; top:50%; margin:0; padding:0;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header_check.php";
        ?>
    </header>
    <div class="box1"><div class="box2"><h3 class="c1">회원가입이 완료되었습니다!</h3></div></div>
</div>
 </body>
 </html>