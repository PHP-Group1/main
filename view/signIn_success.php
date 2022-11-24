 <!DOCTYPE html>
 <html lang="en">
 <head>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php";
        ?>
    </header>
    <style>
        body{
            margin: 0; 
            padding: 0;
        }
        .c1{
            color: #AB6700;;
            position:relative;
            font-size: 32px;
        }
        
        .box1{ 
            width:100%; 
            height:971px; 
            background-color:#FFFDF5;
            display: flex;
            justify-content : center;
        }
        .box2{ 
            top:50%; 
            margin:0; 
            padding:0;
            margin: auto;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div class="box1">
        <div class="box2">
            <h3 class="c1">회원가입이 완료되었습니다!</h3>
        </div>
    </div>
</div>
 </body>
 </html>