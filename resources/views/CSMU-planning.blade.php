<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <style>
        @import  url(https://fonts.googleapis.com/earlyaccess/cwtexfangsong.css);

        body {
            font-family: "微軟正黑體", "Microsoft JhengHei",Arial, "文泉驛正黑", "WenQuanYi Zen Hei", "儷黑 Pro", "LiHei Pro",  "標楷體", DFKai-SB, sans-serif;
            overflow-x: hidden;
            /* padding-top: 90px; */
        }
        a,a:hover,a:focus,a:active{
            text-decoration: none;
            color:inherit;
        }
        ul{
            padding: 0;
            margin: 0;
            list-style: none;
        }

        @media  screen and (max-width: 1200px){

            /* .navbar-brand{
                margin: 0 auto;
                display: block;
            } */
        }
        @media  screen and (max-width: 992px) {

        }

        @media  screen and (max-width: 768px){
            /* body{
                padding-top: 100px;
            } */

        }

        @media  screen and (max-width: 576px) {
            /* body{
                padding-top:calc(((100vw - 107px)/2044*258) + 27px);
            } */

        }

    </style>
    <style>
        .pic {
            display: block;
            margin: auto;
        }

        /* .index {
            font-size: 18px;
        } */
      .pagetitle {
            font-weight: 600;
            line-height: 29px;
            letter-spacing: 3px;
            color: #007FC9;
            display: inline-block;
            padding: 0 10px;
            border-left: solid 3px;
            border-right: solid 3px;
            margin-bottom: 50px;
        }

        .content {
            width: 75%;
            margin: 0 auto 120px auto;
        }

        .foreword {
            font-size: 16px;
            line-height: 26px;
            text-indent: 36px;
            color: #000;
            margin: 24px auto 55px auto;
        }

        .foreword ul {
            margin-top: 20px;
        }

        .foreword ul lh{
            font-size: 18px;
            color: #1f648b;
        }

        .foreword ul li{
            margin-top: 3px;
            padding-left: 22px;
        }

        @media (max-width: 768px) {

            .pagetitle {
                font-weight: 900;
                letter-spacing: 3px;
                color: #007FC9;
                display: inline-block;
                padding: 0 10px;
                border-left: solid 3px;
                border-right: solid 3px;
                margin: 0;
            }

            .content{
                width: 100%;
            }
            .foreword{
                margin: 12px 0 27px 0;
                font-size: 14px;
                line-height: 20px;
            }
        }
    </style>


</head>
<body>

<div class="mt-3 mt-md-5">
    <div class="container">
        <div class="index mb-md-5 mb-3">
            <p><a href="/">首頁</a>
                <span class="arrow">&nbsp;></span>&nbsp;系所介紹
                <span class="arrow">&nbsp;></span>&nbsp;
                <span class="text-warning">教學目標</span>
            </p>
        </div>
        <h2 class="pagetitle mb-5">學生出路</h2>

        <div class="content">
            <div>
                <img class="img-fluid pic" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/img/1898/333060339.jpg" alt="">
            </div>
            <div class="foreword row">
                <ul class="col-md-7 col-12">
                    <lh>＊可習之專業能力</lh>
                    <li>食品技師</li>
                    <li>餐飲管理(餐飲業實務管理概念)</li>
                    <li>經濟會計(餐飲成本控制概念,記帳士執照)</li>
                    <li>食品營養(餐飲食品衛生安全管控、熱量控制)</li>
                    <li>中西餐烹調(可考取中西餐丙級技術士執照)</li>
                    <li>烘焙技術(可考取丙級烘焙技術士執照)</li>
                    <li>調酒技術(可考取丙級調酒師證照)</li>
                </ul>
                <ul class="col-md-5 col-12">
                    <lh>＊主要進修領域</lh>
                    <li>管理科學研究所</li>
                    <li>休閒遊憩研究所</li>
                    <li>餐旅觀光研究所</li>
                    <li>食品研究所</li>
                    <li>營養研究所...等</li>
                </ul>
                <ul class="col-md-7 col-12">
                    <lh>＊就業管道</lh>
                    <li>餐旅產業</li>
                    <li>食品相關產業</li>
                    <li>食品衛生檢驗單位</li>

                    <li>自行創業</li>
                </ul>
                <ul class="col-md-5 col-12">
                    <lh>＊相關專業證照資格</lh>
                    <li>中西餐乙、丙級證照</li>
                    <li>烘焙乙、丙級證照</li>
                    <li>調酒證照</li>
                    <li>中式麵食乙、丙級證照</li>
                    <li>食品技師</li>
                    <li>記帳士執照</li>
                    <li>會展證照...等</li>
                </ul>
            </div>
        </div>


    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>



<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>
<script>/*
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
            document.getElementById("top").style.display = "block";
        } else {
            document.getElementById("top").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<script>/*
    $(".mb-bar").click(function(){
        $(".nav-mb").toggleClass("active");

    });
</script>
<script>/*
    $(".nav-mb ul > li > a").click(function(){
        if($(this).hasClass("active")){
            $(this).parent().find(".sec_ul").slideToggle(1500);
            $(this).removeClass("active");
        }
        else {
            $(".nav-mb ul > li > a").removeClass("active");
            // $(".menu_a > li > a").removeClass("active");
            $(".nav-mb ul > li > .sec_ul").slideUp(600);
            // $(".menu_b").slideUp(600);
            $(this).addClass("active");
            $(this).parent().find(".sec_ul").slideToggle(1500);
        }
    });
</script>

</body>
</html>