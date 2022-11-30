<!DOCTYPE html>
<html lang="en">

<head>
   <style>
      body {
         margin: 0;
         padding: 0;
         background-color: #FFFDF5;
      }
      .qna_con_box{
         width:100%;
         height: 100vh;
      }
      .employ_box{
         width:80%;

         position: absolute;
         left:20%;
      }

      .b1 {
         margin: auto;
         width:240px;
         height: 32px;
         font-weight: 700;
         font-size: 32px;
         line-height: 39px;
         /* identical to box height */

         display: flex;
         align-items: center;
         margin-top: 350px;
      }
   </style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <header>
      <?php
         include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php";
      ?>
   </header>
   
   <div class ="qna_con_box">
      <aside>
         <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/side/employ_side.php";
         ?>
      </aside>
      <div class = "employ_box">
         <div class="b1">
            <strong>1조로 연락주세요</strong>
         </div>
      </div>
   </div>
</body>
</html>