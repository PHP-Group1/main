<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user_id'])) {
        echo "<script>location.href='need_animal.php';</script>";
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
        .box1{
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
            position: relative;
            top: 8%;
            left: 2.5%;
            width: 25%;
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
        .photo_animal{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .text{
            float: left;
            color: black;
            font-weight: bold;
            line-height: 50px;
        }
        .content_animal{
            position: absolute;
            width: 70%;
            left: 27%;
            font-size: 25px;
            
            display: inline-block;
            margin-top: 80px;
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
            max-width:95%;
            max-height: 95%;
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

//생년월일 세션을 가져옴
@$birth = $_SESSION['user_birth'];

//값이 만약에 없다면 주는 기본값
if(empty($birth)){
    $birth = "1997-05-06";
}

//생년월일에서 하이푼을 삭제함
@$birth_rep = str_replace("-", "", $birth);

//생년월일에서 년도만 추출
@$birth_year = substr($birth_rep, 0, 4);

//년도에 12를 나눈 나머지 값
@$birth_div = $birth_year % 12;

//운세값, 초기값으로 회원의 띠를 출력
@$type=$_GET["type"];

if(empty($type)){
//나머지 값의 따른 회원의 띠를 출력
switch($birth_div){
    case 0:
        $type = "원숭이띠";
        break;
    case 1:
        $type = "닭띠";
        break;
    case 2:
        $type = "개띠";
        break;
    case 3:
        $type = "돼지띠";
        break;
    case 4:
        $type = "쥐띠";
        break;
    case 5:
        $type = "소띠";
        break;
    case 6:
        $type = "호랑이띠";
        break;
    case 7:
        $type = "토끼띠";
        break;
    case 8:
        $type = "용띠";
        break;
    case 9:
        $type = "뱀띠";
        break;
    case 10:
        $type = "말띠";
        break;
    case 11:
        $type = "양띠";
        break;
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
            include_once $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header_check.php";
        ?>
    </header>
    <nav>
        <?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_animal.php";
        ?>
    </nav>
    <div class="box1">
        <div class="name_box">
            <div id="names_animal"><?php echo $type;?></div>
        </div>
        <div class="main_box">
            <div class="photo">
                <img id="photo_animal" class="photo_animal" <?php echo "src='../../img/animal/$type.png'" ?>/>
            </div>
            <div class="text">
                <div id="content_animal" class="content_animal"><?php echo $html->find('.detail p._cs_fortune_text',0)->outertext;?></div>
            </div>
        </div>
    </div>
    <div class="box2">            
        <div class="prev"><img src="../../img/click/좌.png"/></div>
        <div class="select">
            <section class="slides">
            <div class="swiper"><a href="animal_content.php?type=쥐띠"><img id="animal" src="../../img/animal/쥐띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=소띠"><img id="animal" src="../../img/animal/소띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=호랑이띠"><img id="animal" src="../../img/animal/호랑이띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=토끼띠"><img id="animal" src="../../img/animal/토끼띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=용띠"><img id="animal" src="../../img/animal/용띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=뱀띠"><img id="animal" src="../../img/animal/뱀띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=말띠"><img id="animal" src="../../img/animal/말띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=양띠"><img id="animal" src="../../img/animal/양띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=원숭이띠"><img id="animal" src="../../img/animal/원숭이띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=닭띠"><img id="animal" src="../../img/animal/닭띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=개띠"><img id="animal" src="../../img/animal/개띠.png"/></a></div>
            <div class="swiper"><a href="animal_content.php?type=돼지띠"><img id="animal" src="../../img/animal/돼지띠.png"/></a></div>
            </section>
        </div>
        <div class="next"><img src="../../img/click/우.png"/></div>
    </div>
<script src="../../js/slides.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>



