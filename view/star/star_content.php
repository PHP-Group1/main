<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user_id'])) {
        echo "<script>location.href='need_star.php';</script>";
    }
?>
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
            margin-top: 50px;
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
            height: 100%;
            float: left;
            color: black;
            line-height: 180%;
            font-weight: bold;


        }
        .content_star{
            position: absolute;
            width: 70%;
            left: 27%;
            font-size: 23px;

            display: inline-block;
            margin-top: 80px;
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

            margin-top: 117px;
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

//생년월일 세션을 가져옴
@$birth = $_SESSION['user_birth'];

//값이 만약에 없다면 주는 기본값
if(empty($birth)){
    $birth = "1997-05-06";
}

//생년월일에서 하이푼을 삭제함
@$birth_rep = str_replace("-", "", $birth);

//생년월일에서 월과 일을 추출
@$birth_year = substr($birth_rep, 4, 4);

//문자를 정수로 바꾸어서 추출
@$birth_cha = (int) $birth_year;

//운세값, 초기값으로 회원의 띠를 출력
@$type=$_GET["type"];

//정수로 바꾼 값의 따른 회원의 별자리를 출력
if(empty($type)){
    if($birth_cha >= 320 && $birth_cha <= 420){
        $type = "양자리";
    }
    else if($birth_cha >= 421 && $birth_cha <= 520){
        $type = "황소자리";
    }
    else if($birth_cha >= 521 && $birth_cha <= 621){
        $type = "쌍둥이자리";
    }
    else if($birth_cha >= 622 && $birth_cha <= 722){
        $type = "게자리";
    }
    else if($birth_cha >= 723 && $birth_cha <= 822){
        $type = "사자자리";
    }
    else if($birth_cha >= 823 && $birth_cha <= 922){
        $type = "처녀자리";
    }
    else if($birth_cha >= 923 && $birth_cha <= 1021){
        $type = "천칭자리";
    }
    else if($birth_cha >= 1022 && $birth_cha <= 1121){
        $type = "전갈자리";
    }
    else if($birth_cha >= 1122 && $birth_cha <= 1221){
        $type = "사수자리";
    }
    else if($birth_cha >= 1222 || $birth_cha <= 120){
        $type = "염소자리";
    }
    else if($birth_cha >= 121 && $birth_cha <= 218){
        $type = "물병자리";
    }
    else if($birth_cha >= 219 && $birth_cha <= 320){
        $type = "물고기자리";
    }
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
<script src="../../js/slides.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>



