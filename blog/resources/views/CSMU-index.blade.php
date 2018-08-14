<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.css">


    <style>
        body {
            font-family: "微軟正黑體", "Microsoft JhengHei",Arial, "文泉驛正黑", "WenQuanYi Zen Hei", "儷黑 Pro", "LiHei Pro",  "標楷體", DFKai-SB, sans-serif;
        }

        ul{
            list-style-type: none;
            margin:0px;
            padding: 0px;
        }
        .mb{
            display: none;
        }

        /*header設定*/
        .topbox{
            height: 5px;
            background-color: #99CC00;
        }
        .centerbox{
            padding:7px 0px;
        }
        .logo-left{
            display:flex;
            align-items:flex-end;
        }
        .logo-right{
            text-align: end;
        }
        .logo-heading h2,p{
            margin-bottom:0px;
        }
        .logo-heading{
            margin-left:10px;    
        }
        .topword{
            margin-bottom:45px;
        }

        /*Nav設定*/
        .Navbarbox{
            background-color: #99CC00;
        }
        .navbar-nav{
            margin:0px auto;
        }
       
        
        .slider{
            
        }
        .bottombar{
            height: 10px;
            margin-bottom: 50px;
            background-color: #99CC00;
        }

        /*news設定*/
        .news .row{
            margin-bottom: 35px;
        }
        .news .row .news_item{
            margin-bottom: 25px;
        }
        .box{
            border-radius: 15px;
        }
        .nav-tabs{
            border-bottom-style: none;
            border-top-left-radius:15px;
            border-top-right-radius:15px;
        }
        .nav-tabs .nav-link,.nav-tabs .nav-link.active{
            color: #ffffff;
        }
        .nav-tabs .nav-link.active{
        }
        .nav-tabs .nav-link {
            text-align: center;
            border: 0px solid transparent;
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }
        .tab-content{
            background-color: #ffffff;
            margin:10px 10px 5px 10px;
        }
        .word-more{
            padding: 0px 50px 5px 0px;
            text-align: right;
        }
        .word-more a{
            color:#ffffff;
        }
         /*<<<綠色組件>>>*/
         #green,#green #myTab .active{
            background-color: #99CC00;
        }
        #green #myTab{
            background-color: #6E9E00;
        }

        /*<<<藍色組件>>>*/
        #blue,#blue #myTab .active{
            background-color: #98D5CD;
        }
        #blue #myTab{
            background-color: #5DC2B4;
        }


        /*video設定*/
        .video{
            margin-bottom: 50px;
        }
        .videoframe {
            position: relative;
            width: 100%;
            height: 0;
            padding-top: 35px;
            padding-bottom: 56.25%;
        }
        .videoframe iframe, .videoframe object, .videoframe embed {
            position: absolute;
            top: 0;left: 0;
            width: 100%;
            height: 100%;
        }

        .heading{
            margin-bottom: 20px;
        }

        /*linkicon設定*/
        .linkicon{
            margin-bottom: 50px;
        }
        .icon{
            margin-bottom: 10px;
        }
        .iconbg{
            height: 100%;
            background-color: #ffc750;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            text-align: center;
            color: #ffffff;
        }
        .icon a{
            text-decoration:none;
        }

        /*card設定*/
        .cardswip{
            margin-bottom: 60px;
        }
        .cardswip .swiper-father{
            position:relative;
        }
        .cardswip .swiper-container {
            width: 100%;
            height: 100%;
        }
        .cardswip .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .cardswip .swiper-button-next{
            height: 25px;
            width: 30px;
            right: -30px;
        }
        .cardswip .swiper-button-prev{
            height: 25px;
            width: 30px;
            left: -30px;
        }

        /*footer設定*/
        .footer{
            color: #fff;
            background-color:#99CC00;
        }
        .contop{
            border-bottom: solid white 1px;
        }
        .conbottom ul li{
            margin-bottom: 8px;
        }
        .footer2{
            color: #fff;
            background-color:#6E9E00;
            text-align: center;
        }
        .footer_2 p {
            margin: 0;
        }

    </style>
    <style>
        @media  screen and (max-width: 1200px){
           /* .navbar-brand{
                margin: 0 auto;
                display: block;
            } */
            .videoframe {
                padding-top: 105px;
            }
        }
        @media  screen and (max-width: 992px) {
            .logo-img img{
                 width:85px;
            }
            .logo-heading p{
                font-size: 0.9rem;
            }
            .videoframe {
                padding-top: 0px;
            }
            .iconimg p{
                font-size:13px;
            }

        }

        @media  screen and (max-width: 768px){
        
            .dp{
                display: none;
            }
            .mb{
                display: block;
            }
        }
        @media  screen and (max-width: 576px) {
            /* body{
                padding-top:calc(((100vw - 107px)/2044*258) + 27px);
            } */
            .logo-img img{
                 width:68px;
            }
            .logo-heading h2{
                font-size: 1.5rem;
            }
            .logo-heading p{
                font-size: 0.7rem;
            }

            .cardswip .swiper-button-next{
                right: -15px;
            }
            .cardswip .swiper-button-prev{
                left: -15px;
            }

            .footer_2 p {
                font-size: 12px;
            }

            

        }

    </style>
</head>
<body>
    <div class="header">
        <div class="topbox"></div>
        <div class="centerbox">
            <div class="container">
                <div class="logo">

                    <div class="logo-left">
                        <div class="logo-img">
                            <img width="113" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/img/1901/162208153.png" alt="">
                        </div>
                        <div class="logo-heading">
                            <h2>健康餐飲暨產業管理學系</h2>
                            <p class="">Department of Health Diet and Industry Management</p>
                        </div>
                        <div class="logo-right ml-auto">
                            <div class="topword d-none d-md-block"><p><a href="#">首頁</a>｜<a href="#">中山醫首頁</a>｜<a href="#">網站地圖</a></p></div>
                            <div class="bottomword d-none d-lg-block"><p>食品安全。食品科學。餐旅服務。經營管理</p></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="main">
        <div class="Navbarbox">
            <nav class="navbar navbar-expand-md navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown px-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                系所介紹
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-2 px-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                課程資訊
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-2 px-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                師資陣容
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-2 px-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                考照資訊
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-2 px-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                活動專區
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-2 px-lg-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="http://originalhotels.org/wp-content/uploads/2015/09/manta-resort-under-water-room-slider-2-1200x500.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://positivestepscounseling.com/wp-content/uploads/2013/02/dirtroad1200x500.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://mosaic-church.org.uk/images/sized/images/uploads/240e4be9-1200x500.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="bottombar"></div>
            <div class="news">
                <div class="row">
                    <div class="news_item col-12 col-lg-6">
                        <div class="box" id="green">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item w-50">
                                    <a class="nav-link active" id="1-tab" data-toggle="tab" href="#1" role="tab" aria-controls="home" aria-selected="true" style="border-top-left-radius:15px; ">Home</a>
                                </li>
                                <li class="nav-item w-50">
                                    <a class="nav-link" id="2-tab" data-toggle="tab" href="#2" role="tab" aria-controls="profile" aria-selected="false" style="border-top-right-radius:15px; ">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="home-tab">AAAAAA<br><br><br><br></div>
                                <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="profile-tab">SSSSS<br><br><br><br><br><br></div>
                            </div>
                            <div class="word-more"><a href="#">More...</a></div>
                        </div>

                    </div>
                    <div class="news_item col-12 col-lg-6">
                        <div class="box" id="green">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item w-50">
                                    <a class="nav-link active" id="3-tab" data-toggle="tab" href="#3" role="tab" aria-controls="home" aria-selected="true" style="border-top-left-radius:15px; ">Home</a>
                                </li>
                                <li class="nav-item w-50">
                                    <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="profile" aria-selected="false" style="border-top-right-radius:15px; ">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="3" role="tabpanel" aria-labelledby="home-tab">AAAAAA<br><br><br><br></div>
                                <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="profile-tab">SSSSS<br><br><br><br><br><br></div>
                            </div>
                            <div class="word-more"><a href="#">More...</a></div>
                        </div>

                    </div>
                    <div class="news_item col-12 col-lg-6">
                        <div class="box" id="blue">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item w-50">
                                    <a class="nav-link active" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="home" aria-selected="true" style="border-top-left-radius:15px; ">Home</a>
                                </li>
                                <li class="nav-item w-50">
                                    <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="profile" aria-selected="false" style="border-top-right-radius:15px; ">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="5" role="tabpanel" aria-labelledby="home-tab">AAAAAA<br><br><br><br></div>
                                <div class="tab-pane fade" id="6" role="tabpanel" aria-labelledby="profile-tab">SSSSS<br><br><br><br><br><br></div>
                            </div>
                            <div class="word-more"><a href="#">More...</a></div>
                        </div>

                    </div>
                    <div class="news_item col-12 col-lg-6">
                        <div class="box" id="blue">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item w-50">
                                    <a class="nav-link active" id="7-tab" data-toggle="tab" href="#7" role="tab" aria-controls="home" aria-selected="true" style="border-top-left-radius:15px; ">Home</a>
                                </li>
                                <li class="nav-item w-50">
                                    <a class="nav-link" id="8-tab" data-toggle="tab" href="#8" role="tab" aria-controls="profile" aria-selected="false" style="border-top-right-radius:15px; ">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="7" role="tabpanel" aria-labelledby="home-tab">AAAAAA<br><br><br><br></div>
                                <div class="tab-pane fade" id="8" role="tabpanel" aria-labelledby="profile-tab">SSSSS<br><br><br><br><br><br></div>
                            </div>
                            <div class="word-more"><a href="#">More...</a></div>
                        </div>

                    </div>
                </div>
        </div>
            <div class="row">
                <div class="video col-12 col-lg-8">
                    <div class="heading"><h3>Vedio heading</h3></div>
                    <div class="videoframe">
                        <iframe  src="https://www.youtube.com/embed/ChXzv57SMY4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="linkicon col-12 col-lg-4">
                    <div class="heading"><h3>快速連結</h3></div>
                    <div class="iconframe">
                        <div class="row d-flex align-content-between flex-wrap">
                            <div class="icon col-6">
                                <a href="#">
                                    <div class="iconbg">
                                        <div class="iconimg">
                                            <i class="fas fa-download fa-4x"></i>
                                            <p>學雜費單據<br>下載&列印</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="icon col-6">
                                <a href="#">
                                    <div class="iconbg">
                                        <div class="iconimg">
                                            <i class="fas fa-utensils fa-4x"></i>
                                            <p>食安青年軍<br>紛絲專頁</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="icon col-6">
                                <a href="#">
                                    <div class="iconbg">
                                        <div class="iconimg">
                                            <i class="fab fa-facebook-square fa-4x"></i>
                                            <p>餐飲系<br>紛絲專頁</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="icon col-6">
                                <a href="#">
                                    <div class="iconbg">
                                        <div class="iconimg">
                                            <i class="fas fa-book fa-4x"></i>
                                            <p>新生專區</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="icon col-6 mb-0">
                                <a href="#">
                                    <div class="iconbg">
                                        <div class="iconimg">
                                            <i class="fas fa-school fa-4x"></i>
                                            <p>新生專區</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="icon col-6 mb-0">
                                <a href="#">
                                    <div class="iconbg">
                                        <div class="iconimg">
                                            <i class="fas fa-graduation-cap fa-4x"></i>
                                            <p>系友會<br>相關資訊</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardswip">
                <div class="heading"><h2>活動花絮</h2></div>
                <div class="swiper-father">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://www.shuicaimi.com/wp-content/uploads/2016/04/shuicai20160413095700.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://www.shuicaimi.com/wp-content/uploads/2016/04/shuicai20160413095730.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://www.shuicaimi.com/wp-content/uploads/2016/04/shuicai20160413095706.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://www.shuicaimi.com/wp-content/uploads/2016/04/shuicai20160413095757.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4rVD8w96A1eOe4iPRMb6xNRn8pelkP8vnwOoiShIfJaK3UUqY" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJI3uTUY4Ucull5SHDj_1X1_GEGdjxmT_iiPSEjdpnNfoN_RTS" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://www.shuicaimi.com/wp-content/uploads/2016/04/shuicai20160413095804.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://s16.sinaimg.cn/mw690/004avC1Rzy76FcEQ0J98f&690" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://www.shuicaimi.com/wp-content/uploads/2016/04/shuicai20160413095801.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text text-truncate">Some card title and make up the bulk of the card's content.</p>
                                        <p class="card-text-footer text-right">2017/08/07</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="footer dp">
            <div class="container py-3 py-md-4">
                <div class="">
                    <div class="contop row mb-4">
                        <div class="contop-item col-2"><a class="text-light" style="text-decoration: none;" href="">系所介紹</a></div>
                        <div class="contop-item col-2"><a class="text-light" style="text-decoration: none;" href="/news">課程資訊</a></div>
                        <div class="contop-item col-2"><a class="text-light" style="text-decoration: none;" href="/news">師資陣容</a></div>
                        <div class="contop-item col-2"><a class="text-light" style="text-decoration: none;" href="/news">考照資訊</a></div>
                        <div class="contop-item col-2"><a class="text-light" style="text-decoration: none;" href="/news">活動專區</a></div>
                        <div class="contop-item col-2"><a class="text-light" style="text-decoration: none;" href="/news">English</a></div>
                    </div>
                    <div class="conbottom row">
                        <div class="conbottom-item col-2">
                            <ul>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">簡史</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">特色</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/excellence/龍騰微笑創意競賽">教學目標</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">學涯規劃</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">行政團隊</a></li>
                            </ul>
                        </div>
                        <div class="conbottom-item col-2">
                            <ul>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">科目學分表</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">實習專區</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/excellence/龍騰微笑創意競賽">國際會議與<br>展覽學程</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">課程地圖</a></li>
                            </ul>
                        </div>
                        <div class="conbottom-item col-2">
                            <ul>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">陳翰紳 系主任</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">葉彥宏 教授</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/excellence/龍騰微笑創意競賽">劉世詮 副教授</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">賴坤明 副教授</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">賴明俊 助理教授</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">鄧旭茹 助理教授</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">沈祐成 助理教授</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">張曉平 助理教授</a></li>
                            </ul>
                        </div>
                        <div class="conbottom-item col-2">

                        </div>
                        <div class="conbottom-item col-2">

                        </div>
                        <div class="conbottom-item col-2">
                            <ul>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">About us</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/department_innovation">Faculty & Staff</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/excellence/龍騰微笑創意競賽">Research</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">Program</a></li>
                                <li><a class="text-light" style="text-decoration: none;" href="/download/系所相關">Graduate employability</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="footer2">
            <p class="px-2 py-1 px-sm-0 dp">Copyright(C)中山醫學大學 健康餐飲暨產業管理學系暨碩士班 版權所有</p>
            <p class="px-2 py-1 px-sm-0 mb">Copyright(C)中山醫學大學<br>健康餐飲暨產業管理學系暨碩士班 版權所有</p>
        </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>



</body>
</html>