<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* <!--메인컨텐츠박스---------------------------------------------------> */
        body {
            margin: 0;
            padding: 0;
            background-color: #FFFDF5;
        }
        .box{
            position: relative;
            width: 100vw;
            height: 490px;
            padding-top: 50px;
        }
        .main_box{
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 95%;
            height: 350px;
            border: 4px solid #A55E0B;
            border-radius: 20px;
        }
        .name_box{
            position: absolute;
            top: 8%;
            left: 2.5%;
            width: 360px;
            height: 60px;
            background-color: #FFF1A5;
            border: 4px solid #C98724;
            border-radius: 20px;
        }
        .photo{
            position: relative;
            float: left;
            width: 25%;
            height: 100%;
        }
        .photo_star{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            max-width: 80%;
            max-height: 80%;
        }
        .text{
            position: relative;
            float: left;
            width: 75%;
            height: 100%;
            color: black;
            line-height: 180%;
            font-weight: bold;

        }
        .content_star{
            width: 1050px;
            height: 250px;
            position: absolute;
            top: 20%;
            left: 5%;
        }
        .name_box{
            width: 25%;
            position: relative;
        }
        .name_box>div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            font-size: 35px;
            font-weight: bold;
            color:white;
            -webkit-text-stroke:2px #AB6700;
        }

        /* <!--선택컨텐츠박스---------------------------------------------------> */
        .box2{
            width: 100vw;
            height: 142px;
        }
        .prev{
            float: left;
            width: 5%;
            height: 100%;
            position: relative;
        }
        .select{
            position: relative;
            float: left;
            width: 90%;
            height: 100%;
            overflow: hidden;
        }
        .slides{
            position: absolute;
            left:0; top:0;
            width: 100%;
            height: 100%;
        }
        .slides.animated{
            transition: 0.5s ease-out;
        }
        .slides>.swiper{
            float: left;
            width: 197px;
            height: 100%;
            position: relative;
        }
        .prev>img{
            width: auto;
            height: auto;
            max-width:95%;
            max-height: 95%;
            object-fit: cover;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .next>img{
            width: auto;
            height: auto;
            max-width:95%;
            max-height: 95%;
            object-fit: cover;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        a>img{
            max-width:110%;
            max-height: 110%;
            object-fit: cover;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .next{
            float: left;
            width: 5%;
            height: 100%;
            position: relative;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--스크래핑 소스--------------------------------------------------------------------------------------------------------->
<?php 
/* 스크래핑 모듈*/
include('../../common/simple_html_dom.php');
//운세 종류

@$type=$_GET["type"];
if(empty($type)){
    $type = "양자리";
}
//$type = str_replace(' ','%20',$type);
//echo "type : ".$type;
//echo 'https://search.naver.com/search.naver?where=nexearch&sm=tab_etc&qvt=0&query='.$type;

$html = file_get_html('https://search.naver.com/search.naver?where=nexearch&sm=tab_etc&qvt=0&query='.$type.'%20운세');
// 전달받은 운세 종류 출력
?>


<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header_check.php";
        ?>
    </header>
    <nav>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_star.php";
        ?>
    </nav>
    <div class="box">
        <div class="name_box">
            <div id="names_star"><?php echo $type;?></div>
        </div>
        <div class="main_box">
            <div class="photo">
                <img id="photo_star" class="photo_star" <?php echo "src='../../img/star/$type.png'" ?>/>
            </div>
            <div class="text">
                <div id="content_star" class="content_star"><?php echo $html->find('.detail p._cs_fortune_text',0)->outertext;?></div>
            </div>
        </div>
    </div>
    <div class="box2">              
        <div class="prev"><img src="../../img/click/좌.png"/></div>
        <div class="select">
            <section class="slides">
            <div class="swiper"><a href="star_content.php?type=양자리"><img id="star" src="../../img/star/양자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=황소자리"><img id="star" src="../../img/star/황소자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=쌍둥이자리"><img id="star" src="../../img/star/쌍둥이자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=게자리"><img id="star" src="../../img/star/게자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=사자자리"><img id="star" src="../../img/star/사자자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=처녀자리"><img id="star" src="../../img/star/처녀자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=천칭자리"><img id="star" src="../../img/star/천칭자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=전갈자리"><img id="star" src="../../img/star/전갈자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=사수자리"><img id="star" src="../../img/star/사수자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=염소자리"><img id="star" src="../../img/star/염소자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=물병자리"><img id="star" src="../../img/star/물병자리.png"/></a></div>
            <div class="swiper"><a href="star_content.php?type=물고기자리"><img id="star" src="../../img/star/물고기자리.png"/></a></div>
            </section>
        </div>
        <div class="next"><img src="../../img/click/우.png"/></div>
    </div>
    <?php

if (!isset($_SESSION['user_id'])) {
    echo "<script>
                location.href = 'http://localhost:80/main/view/star/need_star.php';
            </script>";
}

?> 
<script src="../../js/slides.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>



