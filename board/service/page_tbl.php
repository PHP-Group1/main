<?php

    //https://transferhwang.tistory.com/64

    require '../../common/common.php';

    $conn = mysqli_connect("210.90.136.10", "pino", "qwer1595", "php");
    $sql = "SELECT * FROM tbl_board";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);


    $cnt = 1; //각 페이지의 게시물 번호
    $list_num = 5; //한 페이지당 데이터 개수
    $page_num = 5; //한 블럭당 페이지 개수

    //현재 페이지
    $page = isset($_GET['page'])? $_GET['page'] : 1;
    
    //전체 페이지 수 = 전체 데이터 / 페이지당 데이터 개수
    $total_page = ceil($num / $list_num);
    
    //전체 블럭 수 = 전체 페이지 수 / 블럭당 페이지 수
    $total_block = ceil($total_page / $page_num);

    //현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
    $now_block = ceil($page / $page_num);

    //블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) *블럭 당 페이지 수 + 1
    $start_page = ($now_block - 1) * $page_num + 1;

    //데이터가 0인 경우
    if($start_page == 0){
        $start_page =1;
    }

    //블럭당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
    $end_page = $now_block * $page_num;

    //마지막 번호가 전체 페이지를 넘지 않도록
    if($end_page > $total_page){
        $end_page = $total_page;
    }

    //시작 번호 = (현재 페이지 번호 - 1) * 페이지당 보여질 데이터 수
    $start = ($page - 1) * $list_num

?>


