
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="jyDxMRum0kyXoKNkXRkiTtI3PWtaxlzRi6ToLdZn">
    <meta name="keywords" content="Activity"/>
    <meta name="description" content="Activity"/>
    <title>Activity</title>
    <!-- Styles -->
    <link href="https://puricom.digipack-develop.com/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>

        body{
            font-family: "Heiti TC", "Microsoft JhengHei", "LiHei Pro", Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #fff;
        }

        body.lock{
            overflow-y: hidden;
        }
        .page-link:focus{
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
        }

        #app{
            padding-top:134px;
        }
        #app.fixed{
            padding-top:114px;
        }

        a,a:hover,a:focus,a:active{
            text-decoration: none;
            color:inherit;
        }
        .mobile{
            display: none;
        }
        .mobile_nav{
            display: none;
        }
        #main_nav .nav ul{
            padding: 0;
            margin:0;
            list-style: none;
        }
        .sen_nav{
            padding:40px 0 28px 0;
            border-bottom: 1px solid #C3C3C3;
            position: fixed;
            top:0;
            left: 0;
            z-index: 2;
            width: 100%;
            background: white;
            transition: overflow 0s linear .2s,background-color .3s,height .3s ease,padding .3s ease;
        }
        .sen_nav.fixed{
            padding:20px 0 0 0;
        }
        #main_nav .logo{
            float: left;
            padding-bottom: 10px;
        }
        #main_nav .logo img{
            height: 40px;
            transition:height .3s ease;
        }
        #main_nav.fixed .logo img{
            height: 32px;
        }
        #main_nav .nav > ul{
            margin-top: 14px;
            font-size: 18px;
            line-height: 21px;
            color: #333333;
        }
        #main_nav .nav > ul > li{
            display: inline-block;
            list-style: none;
            margin-right: 25px;
            padding-bottom: 30px;
        }
        #main_nav.fixed > ul .nav li{
            padding-bottom: 20px;
        }
        #main_nav .nav > ul li > a{
            letter-spacing: 1px;
        }
        #main_nav .nav > ul li .product_item{
            position:absolute;
            top:105px;
            left:0;
            width:100%;
            background-color:#00B2E3;
            padding:0;
            height: 0;
            opacity: 0;
            z-index: -1;
            overflow: hidden;
            transition: 0.3s;
        }
        #main_nav .nav > ul li:nth-child(2) .product_item{
            background-color:#8FC31F;
        }
        #main_nav.fixed .nav > ul li .product_item{
            top:75px;
        }
        #main_nav .nav > ul li:hover .product_item{
            height:200px;
            padding: 14px 0 14px 0;
            opacity: 1;
            z-index: 1;
        }
        #main_nav .nav > ul li:nth-child(3):hover .product_item{
            height:200px;
            padding: 14px 0 14px 0;
        }
        #main_nav .nav > ul li:nth-child(4):hover .product_item{
            height:200px;
            padding: 14px 0 14px 0;
        }
        #main_nav .nav > ul li:nth-child(5):hover .product_item{
            height:200px;
            padding: 14px 0 14px 0;
        }
        #main_nav .nav > ul li:nth-child(6):hover .product_item{
            height:200px;
            padding: 14px 0 14px 0;
        }

        #main_nav .nav > ul li.active::before{
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 14px 19px 14px;
            border-color: transparent transparent #00b2e3 transparent;
            position: absolute;
            z-index: -1;
            transform: translate(22px,32px);
            transition: 0.3s;
        }
        #main_nav .nav > ul li:nth-child(2).active::before{
            border-color: transparent transparent #8FC31F transparent;
        }
        #main_nav.fixed .nav > ul li.active::before{
            transform: translate(22px,23px);
        }

        #main_nav .nav > ul li .product_item .product_item_title{
            font-size: 130%;
            font-weight: bold;
            color: #fff;
            margin-bottom: 10px;
            position: relative;
        }
        .product_item_title a {
            transition: 0.3s;
        }
        .product_item_title a:hover {
            opacity: 0.75;
        }
        #main_nav .nav > ul li .product_item .product_item_subtitle{
            font-size: 90%;
            line-height: 25px;
            color: #fff;
        }
        #main_nav .nav > ul li .product_item .bg-img{
            width: 80px;
            height: 80px;
            background-size:contain;
            background-position: center;
            background-repeat: no-repeat;
            transition: all .3s cubic-bezier(.215,.61,.355,1);
        }
        #main_nav .nav > ul li .product_item .bg-img:hover{
            transform: scale(1.1);
            transition: all .4s cubic-bezier(.215,.61,.355,1);
        }

        .product_item {
            display: inline-block;
            position: relative;
            letter-spacing: 0.5px;
        }

        .product_item_list li{
            position: relative;
        }
        ul.product_item_list li a {
            transition: 0.3s;
        }

        ul.product_item_list li a:hover {
            opacity: 0.75;
        }

        #nav_li_item_1 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(33% + ((1902px - 100%)*0.018));
        }

        #nav_li_item_2 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(42% + ((1902px - 100%)*0.008));
        }

        #nav_li_item_3 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(50% + ((1902px - 100%)*0.018));
        }

        #nav_li_item_4 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(55% + ((1902px - 100%)*0.08));
        }

        #nav_li_item_5 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(60% + ((1902px - 100%)*0.15));
        }

        #nav_li_item_6 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(66% + ((1902px - 100%)*0.205));
        }

        #main_nav.fixed #nav_li_item_1 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(33% + ((1902px - 100%)*0.018) - 28px);
        }
        #main_nav.fixed #nav_li_item_2 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(42% + ((1902px - 100%)*0.008) - 28px);
        }

        #main_nav.fixed #nav_li_item_3 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(50% + ((1902px - 100%)*0.018) - 28px);
        }

        #main_nav.fixed #nav_li_item_4 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(55% + ((1902px - 100%)*0.08) - 28px);
        }

        #main_nav.fixed #nav_li_item_5 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(60% + ((1902px - 100%)*0.15) - 28px);
        }

        #main_nav.fixed #nav_li_item_6 .d-flex.justify-content-center.flex-column{
            margin:0 0 0 calc(66% + ((1902px - 100%)*0.205) - 28px);
        }

        /*#main_nav .sen_search{
            display: inline-block;
            position: absolute;
            right: 80px;
            top: 49px;
            color: #808080;
            transition: 0.3s;
        }
        #main_nav.fixed .sen_search{
            top: 29px;
        }*/
        #main_nav .search{
            display: inline-block;
            position: relative;
            margin-right: 8px;
            font-size: 18px;
            line-height: 24px;
            margin-top: 49px;
        }
        #main_nav .search_icon,
        #main_nav .search .product_log{
            display: none;
        }
        #main_nav .search button{
            background-color: transparent;
        }
        #main_nav .search span{
            transform: translateY(1px);
        }
        #main_nav .search::after{
            position: absolute;
            content: '';
            width: 2px;
            height: 24px;
            background-color: #A9A9A9;
            top: 2px;
            right:-39px;
            display:none;
        }
        #main_nav .search_key{
            display: inline-block;
            font-size: 13px;
            line-height: 13px;
            color: #fff;
            text-align: center;
            padding: 4px 4px 4px 20px;
            border-radius: 30px;
            background-color: #808080;
        }

        #main_nav .serach_key input{
            -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            border: none;
            color: #fff;
            font-size: 13px;
            line-height: 13px;
        }
        #main_nav input#search_keyword:focus, textarea:focus, select:focus {
            outline: none;
        }

        #search_form input#search_keyword::-webkit-input-placeholder {color:white;}
        #search_form input#search_keyword::-moz-placeholder          {color:white;}
        #search_form input#search_keyword:-moz-placeholder           {color:white;}
        #search_form input#search_keyword:-ms-input-placeholder      {color:white;}

        #main_nav .product_log{
            display: inline-block;
            color: #00A6CE;
            font-size: 18px;
        }
        .footer{
            background-color: #4D4D4D;
            padding: 60px 0 50px 0;
            color: #fff;
            font-size: 18px;
            line-height: 18px;
        }

        .footer ul{
            display: inline-block;
            list-style: none;
            padding: 0;
            margin:0;
        }
        .footer ul li{
            margin-bottom:21px;
        }
        .footer ul li a {
            display: inline-block;
            position: relative;
            letter-spacing: 0.5px;
            transition: 0.3s;
        }
        .footer ul li a:hover {
            opacity: 0.75;
        }
        .footer .icon{
            display: flex;
            flex-direction: row;
        }
        .footer .icon img{
            display: inline-block;
            margin-right: 10px;
            max-width: 60px;
            max-height: 60px;
        }
        .copyright{
            background-color: #3E3A39;
            color: #fff;
            font-size: 14px;
            text-align: center;
            padding: 6px 0;
        }

        .mb_private{
            background-color: #3E3A39;
            color: #fff;
            font-size: 14px;
            text-align: center;
            padding-top: 6px;
        }
        /* Back to top */
        .go-top {
            position: fixed;
            bottom: 2em;
            right: 2em;
            text-decoration: none;
            color: white;
            background-color: rgba(0, 178, 277, 0.3);
            font-size: 30px;
            height: 40px;
            width: 40px;
            line-height: 40px;
            text-align: center;
            display: none;
            border-radius: 100%;
        }

        .go-top:hover {
            background-color: rgba(0, 178, 277, 0.6);
        }

        /*add bootstrap container size*/
        @media(min-width: 1600px){
            .container {
                max-width: 1400px;
            }
        }

        @media(max-width: 1600px){
            #main_nav .nav li .product_item{
                font-size: 15px;

            }
            #main_nav .sen_search{
                padding-top: 2px;
                position: absolute;
                right: 0;
                margin-right: 60px;
            }
            #main_nav .sen_search .search_line.active{
                display:none;
            }
            #main_nav .search_icon{
                display: block;
                font-size: 18px;
                cursor: pointer;
                float: left;
                margin-right: 20px;
                z-index: 3;
            }
            #main_nav .search_icon.active{
                float: right;
            }
            #main_nav .search{
                display: none;
            }
            #main_nav .search.active{
                opacity: 1;
                display: block;
            }
            #main_nav .search form{
                margin-bottom: 10px;
            }
            .copyright{
                font-size: 12px;
            }
            .footer{
                font-size: 16px;
                line-height: 16px;
            }
        }

        @media(max-width: 1200px){
            .d-none,
            .dp{
                display:none;
            }
            #app{
                padding-top:71px;
            }
            #app.fixed{
                padding-top:71px;
            }
            .sen_nav{
                padding:0;
                padding-top: 20px;
            }
            .mobile{
                display: block;
            }
            .mobile_nav{
                display: block;
            }
            #main_nav .logo{
                margin: 0 auto;
                padding-bottom: 20px;
            }
            #main_nav .logo img{
                height: 35px;
            }
            #main_nav.fixed .logo img{
                height: 30px;
            }
            body::before {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-color: rgba(0, 0, 0, 0);
                overflow: auto;
                z-index: 0;
                transition: 0.6s;
                display: none;
            }
            body.lock::before {
                background-color: rgba(0, 0, 0, 0.7);
                overflow: hidden;
                height: 10000px;
                /* z-index: 9; */
                z-index: 2;
                display: block;
            }
            /**漢堡條**/

            .collapse-toggle {
                position: absolute;
                width: 40px;
                height: 40px;
                left: 5px;
                top: 15px;
                cursor: pointer;
            }

            .collapse-toggle span {
                display: block;
                width: 25px;
                height: 3px;
                background-color: #000;
                margin: 18.5px auto;
            }

            .collapse-toggle span::before,
            .collapse-toggle span::after {
                content: '';
                position: relative;
                display: block;
                width: 25px;
                height: 3px;
                background-color: #000;
            }

            .collapse-toggle span::before {
                top: -6px;
            }

            .collapse-toggle span::after {
                top: 3px;
            }
            .menu-wrap {
                position: absolute;
                top: 76px;
                left: -80%;
                z-index: 9999;
                height: calc(100vh - 71px);
                background-color: #fff;
                width: 80%;
                transition: .3s;
                overflow-y: scroll;
            }
            #main_nav.fixed .menu-wrap {
                top: 71px;
            }
            .menu-wrap.active {
                left: 0;
            }

            .menu-wrap-bg {
                display: none;
                width: 30%;
                height: 100vh;
                position: absolute;
                right: 0;
                top: 0;
                z-index: 99;
            }

            .menu-bottom {
                margin: 0 auto;
                text-align: center;
                padding: 0 15px;
            }

            .menu-bottom li {
                border-bottom: 1px solid #ccc;
                margin: 0 auto;
                text-align: left;
                display: block;
                padding: 10px 0 10px 0;
                font-weight: bold;
                font-size: 18px;
            }

            ul#product-content li{
                padding: 5px 0 5px 0;
            }
            ul#product-content li:last-child{
                padding: 5px 0 0 0;
            }
            ul#solution-content li a, ul#product-content li a{
                padding-left: 15px;
            }

            .menu-bottom .logo{
                float: none !important;
                padding: 20px 0;
                text-align: center;
            }
            .menu-bottom .logo img{
                height: 30px;
            }

            /* .menu-bottom>li {
                position: relative;
            } */

            .menu-bottom>.logo>img {
                width: 180.743px;
                margin-top: 5px;
                padding-bottom: 15px;
                float: none;
            }

            .menu-bottom>li>a {
                padding: 0;
            }
            .menu-bottom>li.active {
                border-bottom: none;
            }

            .menu-bottom>li>ul {
                display: none;
                margin-top: 5px;
                padding: 0;
            }
            .menu-bottom>li>.menu-bottom-sec>li {
                display: block;
                font-weight: 500;
                font-size: 16px;
                opacity: 0.9;
            }
            .menu-bottom>li>.menu-bottom-sec>li:nth-child(1),
            .menu_b>li:nth-child(1){
                border-top: 1px solid #ccc;
            }
            .menu_b{
                padding: 0;
            }
            .menu_b li{
                font-size: 14px;
                font-weight: 500;
            }
            .menu_b li a{
                opacity: 0.8 !important;
                padding-left: 30px !important;
            }
            .menu-bottom>li>.menu-bottom-sec>li:nth-last-child(1),
            .menu_b>li:nth-last-child(1){
                border: none;
            }
            #main_nav .search_icon{
                display: none;
            }
            .mobile_nav .menu-bottom > .menu-fst > div{
                position: relative;
            }
            .plus{
                position: relative;
            }
            .mobile_nav .menu-bottom > .menu-fst > div.plus::before{
                content: '';
                position: absolute;
                width: 2px;
                height: 20px;
                background-color: #898989;
                top: 50%;
                margin-top: -10px;
                right: 8.5px;
                transition: 1.5s;
            }
            .plus::before{
                content: '';
                position: absolute;
                width: 2px;
                height: 20px;
                background-color: #898989;
                top: 50%;
                margin-top: -10px;
                right: 8.5px;
                transition: 1.5s;
            }
            .mobile_nav .menu-bottom > .menu-fst > div.plus::after{
                content: '';
                position: absolute;
                width: 20px;
                height: 2px;
                background-color: #898989;
                right: 0;
                top: 50%;
                margin-top: -1px;
            }
            .plus::after{
                content: '';
                position: absolute;
                width: 20px;
                height: 2px;
                background-color: #898989;
                right: 0;
                top: 50%;
                margin-top: -1px;
            }
            .mobile_nav .menu-bottom > .menu-fst > div{
                color:#231815;
            }
            .mobile_nav .menu-bottom > .menu-fst > div:hover{
                font-weight: 600;
            }
            .mobile_nav .menu-bottom > .menu-fst > div.plus{
                position: relative;
            }
            .mobile_nav .menu-bottom > .menu-fst > div.plus.active::before{
                transform: rotate(270deg);
            }
            .plus.active::before{
                transform: rotate(270deg);
            }
            #main_nav .sen_search{
                display: none;
            }
            .go-top{
                right: 0.5em;
            }

        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css">
    <style>
        .banner {
            /* height: 41vh; */
            background-image: url("http://restaurant.csmu.edu.tw/ezfiles/39/1039/img/1899/Banner180531.png");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 9.5% 0 7.5% 0;
        }
        .banner .title {
            font-size: 45px;
            letter-spacing: .2vw;
            color: #fff;
        }

        .paging {
            font-size: 0.94vw;
            border: solid 1px #818181;
            border-right: none;
            border-left: none;
            margin-bottom: 60px;
        }

        .paging .container ul {
            display: flex;
            justify-content: space-between;
            margin: 0;
            border-radius: 0;
        }

        .paging .container li {
            width: 100%;
            text-align: center;
            border-left: solid 1px #818181;
        }

        .paging .container li:nth-last-child(1) {
            border-right: solid 1px #818181;
        }

        .paging .container ul a {
            transition: 0.15s;
            color:#1A1A1A;
            letter-spacing: .15vw;
            font-size: 20px;
            padding: 20px 0;
        }

        .paging .page-link {
            margin: 0;
            border: none;
            border-radius: 0;
        }

        .paging .container ul a:hover {
            background-color: rgba(0, 131, 193, .8);
            color: aliceblue;
        }

        .paging .page-item.active .page-link {
            background-color: #0083c1;
            border-radius: 0;
        }

        .paging .page-item:first-child .page-link,
        .paging .page-item:last-child .page-link{
            border-radius: 0;
        }

        .photo{
            margin-bottom: 5px;
            position: relative;
        }
        .photo .bg{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-color: #00B2E3;
            text-align: center;
            vertical-align: middle;
            transition: all .5s;
        }
        .photo .bg p{
            color: #fff;
            font-size: 20px;
        }
        .photo .bg .plus{
            font-size: 70px;
            margin-bottom: 5px;
        }
        .photo:hover .bg{
            opacity: .8;
        }
        .content_text{
            margin-bottom: 60px;
        }
        .content_text .date,
        .content_text .content{
            font-size: 12px;
            color: #808080;
            line-height: 18px;
            letter-spacing: .2vw;
        }
        .content_text .title{
            font-size: 21px;
            color: #333333;
        }
        .content_text span{
            color:#00A7E1;
        }
        .section4_paging{
            margin-bottom: 60px;
        }
        .page-link{
            padding: 4px 10px;
        }

        .section2 .container .row .col-lg-4{
            padding: 0px 50px;
        }

        .section4_paging .page-link,
        .section4_paging .page-item:first-child .page-link {
            border: #808080 solid 1px;
        }
        .page-item:first-child .page-link{
            border-top-left-radius:10%;
            border-bottom-left-radius:10%;
        }
        .page-item:last-child .page-link{
            border-top-right-radius:10%;
            border-bottom-right-radius:10%;
        }
        .page-item.disabled .page-link{
            border-color: inherit;
        }

        .section4_paging .prev a,
        .section4_paging .next a {
            vertical-align: middle;
            text-align: center;
            font-size: 18px;
            color: #000;
            line-height: 40px;
            /* padding-bottom: 15px; */
        }
        .section4_paging .number .a{
            vertical-align: middle;
            text-align: center;
            font-size: 30px;
            color: #0082CA;
            line-height: 40px;
            padding: 0;
        }

        .section4_paging .number .a > input{
            text-align: center;
            font-size: 29px;
            padding: 0;
            color: #0082CA;
            width: 20%;
        }

        .section4_paging .number .a:hover {
            background-color: #fff;
        }
        .section4_paging .number .a span{
            color:#4D4D4D;
        }
        .dropdown .dropdown-toggle{
            border-right:33px solid;
            min-width: 155px;
        }
        .dropdown span{
            font-size: 21px;
            margin-right: 5px;
        }
        .btn{
            border-radius: 0;
            padding: 0 0.75rem;
        }
        input.form-control{
            display: inline-block;
            width: 35%;
            padding: 9px 0.75rem;
        }
        @media(max-width: 1200px){
            .banner{
                padding: 12px 0;
            }
            .banner .title{
                font-size: 24px;
            }
            .paging{
                margin-bottom: 30px;
            }
            .paging .container ul a{
                padding: 10px;
                font-size: 15px;
            }
            .content_text {
                margin-bottom: 20px;
            }
            .section4_paging {
                margin-bottom: 30px;
            }
            .page-link {
                padding: 8px 5px;
            }
            .section4_paging .prev a, .section4_paging .next a{
                font-size: 16px;
                line-height: 16px;
            }
            .section4_paging .number .a{
                font-size: 16px;
                line-height: 20px;
                padding: 4.5px 0;
            }
            .section4_paging .number .a > input{
                text-align: center;
                font-size: 13.5px;
                padding: 0;
                color: #0082CA;
                width: 20%;
            }
            input.form-control{
                width: 27%;
                padding: 7.5px 6px;
            }
        @media (max-width: 768) {
            .section2 .container .row{
                padding: 0px 50px;
                background-color: #00A6CE;
            }
        }

        }
    </style>
</head>
<body>
<div id="app">
    <div class="sen_nav" id="main_nav">
        <div class="container d-flex justify-content-between">
            <div class="logo mr-3 dp">
                <a href="/">
                    <img src="/images/logo.svg" alt="">
                </a>
            </div>
            <div class="logo mobile">
                <a href="/">
                    <img src="/images/logo.svg" alt="">
                </a>
            </div>
            <div class="nav dp">
                <ul>
                    <li id="nav_li_item_1">
                        <a href="#">
                            系所介紹
                        </a>
                        <div class="product_item d-flex">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="product_item_title d-inline-flex">
                                    <a href="/info_center_truth" style="font-weight:500;">
                                        簡史
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_activity" style="font-weight:500;">
                                        特色
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_firm" style="font-weight:500;">
                                        教學目標
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_firm" style="font-weight:500;">
                                        學涯規劃
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="nav_li_item_2">
                        <a href="#">
                            課程資訊
                        </a>
                        <div class="product_item d-flex">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="product_item_title d-inline-flex">
                                    <a href="/info_center_truth" style="font-weight:500;">
                                        科目學分表
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_activity" style="font-weight:500;">
                                        實習專區
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_firm" style="font-weight:500;">
                                        國際會議與展覽專區
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_firm" style="font-weight:500;">
                                        課程地圖
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="nav_li_item_3">
                        <a href="#">
                            師資陣容
                        </a>
                        <div class="product_item d-flex">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="product_item_title d-inline-flex">
                                    <a href="/info_center_truth" style="font-weight:500;">
                                        part
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_activity" style="font-weight:500;">
                                        part
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/info_center_firm" style="font-weight:500;">
                                        part
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="nav_li_item_4">
                        <a href="#">
                            考照資訊
                        </a>
                        <div class="components product_item d-flex">
                            <div class=" d-flex justify-content-center flex-column">
                                <div class="product_item_title d-inline-flex">
                                    <a href="/service_application" style="font-weight:500;">
                                        part
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/service_question" style="font-weight:500;">
                                        part
                                    </a>
                                </div>
                                <div class="product_item_title">
                                    <a href="/service_supplier" style="font-weight:500;">
                                        part
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="nav_li_item_5">
                        <a href="#">
                            活動專區
                        </a>
                        <div class="components product_item d-flex">
                            <div class=" d-flex justify-content-center flex-column">
                                <div class="product_item_title d-inline-flex">
                                    <a href="/company_about" style="font-weight:500;">
                                        活動照片集
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="nav_li_item_6">
                        <a href="#">
                            English
                        </a>
                        <div class="components product_item d-flex">
                            <div class=" d-flex justify-content-center flex-column">
                                <div class="product_item_title d-inline-flex">
                                    <a href="/contact_contact_us" style="font-weight:500;">
                                        About us
                                    </a>
                                </div>
                                <div class="product_item_title" style="font-weight:500;">
                                    <a href="/contact_buy">
                                        part
                                    </a>
                                </div>
                                <div class="product_item_title" style="font-weight:500;">
                                    <a href="/contact_buy">
                                        part
                                    </a>
                                </div>
                                <div class="product_item_title" style="font-weight:500;">
                                    <a href="/contact_buy">
                                        part
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile_nav">
                <div class="collapse-toggle">
                    <span></span>
                </div>
                <div class="menu-wrap">
                    <ul class="menu-bottom">
                        <li class="menu-arrow menu-fst">
                            <div class="plus">
                                <a href="/product_all_kind">
                                    產品專區
                                </a>
                            </div>

                            <ul class="menu-bottom-sec" id="product-content">
                                <li>
                                    <div class="sub-menu-plus plus">
                                        <a href="/product_type_page/1"> 家用逆滲透</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;  ">
                                        <li>
                                            <a href="/product_type_page/1">簡約型RO淨水器</a>
                                        </li>
                                        <li>
                                            <a href="/product_type_page/2">標準型RO淨水器</a>
                                        </li>
                                        <li>
                                            <a href="/product_type_page/3">直輸型RO淨水器</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="sub-menu-plus plus">
                                        <a href="/product_type_page/4"> 免安裝DIY</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;  ">
                                        <li>
                                            <a href="/product_type_page/4">ZIP</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="sub-menu-plus plus">
                                        <a href="/product_type_page/5"> 前置淨水器</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;  ">
                                        <li>
                                            <a href="/product_type_page/5">DIY快拆型</a>
                                        </li>
                                        <li>
                                            <a href="/product_type_page/6">傳統標準型</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="sub-menu-plus plus">
                                        <a href="/product_type_page/7"> 住/商型飲水機</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;  ">
                                        <li>
                                            <a href="/product_type_page/7">落地型飲水機</a>
                                        </li>
                                        <li>
                                            <a href="/product_type_page/8">桌上型飲水機</a>
                                        </li>
                                        <li>
                                            <a href="/product_type_page/9">櫥下型加熱器</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="sub-menu-plus plus">
                                        <a href="/product_type_page/10"> 全戶式淨水系統</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;  ">
                                        <li>
                                            <a href="/product_type_page/10">軟水系統</a>
                                        </li>
                                        <li>
                                            <a href="/product_type_page/11">過濾系統</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="sub-menu-plus plus">
                                        <a href="/product_type_page/12"> 工/商型水處理系統</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;  ">
                                        <li>
                                            <a href="/product_type_page/12">大流量RO淨水器</a>
                                        </li>
                                        <li>
                                            <a href="/product_type_page/13">造霧系統</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-arrow menu-fst">
                            <div class="plus">
                                <a href="/component_all_kind">
                                    零件專區
                                </a>
                            </div>
                            <ul class="menu-bottom-sec" id="solution-content">
                                <li>
                                    <div class="plus">
                                        <a href="/component_type_page/14"> 家用淨水濾芯</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;">
                                        <li>
                                            <a href="/component_type_page/14">FK-T 快拆型濾芯</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/15">FK-S 快拆型濾芯</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/16">FK-K 標準型濾芯</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/35">CK 快拆型濾芯</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/17">FP 後置濾芯</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/19">其他類濾芯</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/18">標準型濾芯</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="plus">
                                        <a href="/component_type_page/20"> RO逆滲透膜</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;">
                                        <li>
                                            <a href="/component_type_page/20">快拆型</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/21">內置型</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="plus">
                                        <a href="/component_type_page/22"> 淨水專用配件</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;">
                                        <li>
                                            <a href="/component_type_page/22">儲水壓力桶</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/23">純水龍頭</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/24">安裝零組件</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="plus">
                                        <a href="/component_type_page/25"> 加壓馬達</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;">
                                        <li>
                                            <a href="/component_type_page/25">家用淨水馬達</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/32">大流量淨水馬達</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="plus">
                                        <a href="/component_type_page/26"> 商用淨水濾芯</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;">
                                        <li>
                                            <a href="/component_type_page/26">標準型</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/27">快拆型</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="plus">
                                        <a href="/component_type_page/33"> 紫外線殺菌燈</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;">
                                        <li>
                                            <a href="/component_type_page/33">紫外線殺菌燈組</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/34">紫外線殺菌燈管</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="plus">
                                        <a href="/component_type_page/28"> 各式濾材</a>
                                    </div>
                                    <ul class="menu_b" style="margin-left: 0;">
                                        <li>
                                            <a href="/component_type_page/28">軟水設備</a>
                                        </li>
                                        <li>
                                            <a href="/component_type_page/29">淨水設備</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="plus">
                                <a href="#">訊息中心</a>
                            </div>
                            <ul class="menu-bottom-sec" id="solution-content">
                                <li>
                                    <div>
                                        <a href="/info_center_truth">真相不可不知</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/info_center_activity">活動報仔</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/info_center_firm">企業訊息</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="plus">
                                <a href="#">服務支援</a>
                            </div>
                            <ul class="menu-bottom-sec" id="solution-content">
                                <li>
                                    <div>
                                        <a href="/service_application">生活應用</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/service_question">常見問題</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/service_supplier">經銷商專區</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/service_product_register">產品登錄</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="plus">
                                <a href="#">公司簡介</a>
                            </div>
                            <ul class="menu-bottom-sec" id="solution-content">
                                <li>
                                    <div>
                                        <a href="/company_about">關於我們</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/company_quality">品質認證</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/company_awards">獲獎榮耀</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/company_responsibility">社會責任</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="plus">
                                <a href="#">聯絡專區</a>
                            </div>
                            <ul class="menu-bottom-sec" id="solution-content">
                                <li>
                                    <div>
                                        <a href="/contact_contact_us">聯絡我們</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="/contact_buy">購買通路</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu-wrap-bg"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <main id="main_content">
        <div class="section1">
            <div class="banner">
                <div class="container">
                    <!--<p class="title">真相不可不知</p>-->
                </div>
            </div>
        </div>
        <div class="paging">
            <div class="container">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="/info_center_truth">---</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="/info_center_activity">活動照片集</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="/info_center_firm">---</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section2">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="photo">
                            <a href="/info_center_truth/1">
                                <div class="bg d-flex align-items-center justify-content-center">
                                    <div>
                                        <p class="plus">+</p>
                                        <p>Learn More</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/pictures/253/part_37104_6831238_72223.png" alt="">
                            </a>
                        </div>
                        <div class="content_text">
                            <div class="date">2018-06-24</div>
                            <div class="title">餐飲之夜</div>
                            <div class="content JQellipsis">
                                <p><span style="font-size: 14.4px;">歡樂一整夜</span><br></p>
                            </div>
                            <a href="/info_center_truth/1">
                                <span>查看內文</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="photo">
                            <a href="/info_center_truth/2">
                                <div class="bg d-flex align-items-center justify-content-center">
                                    <div>
                                        <p class="plus">+</p>
                                        <p>Learn More</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/pictures/507/part_37102_1850596_62173.png" alt="">
                            </a>
                        </div>
                        <div class="content_text">
                            <div class="date">2018-06-24</div>
                            <div class="title">餐飲之夜</div>
                            <div class="content JQellipsis">
                                <p><span style="font-size: 14.4px;">歡樂一整夜</span><br></p>
                            </div>
                            <a href="/info_center_truth/1">
                                <span>查看內文</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="photo">
                            <a href="/info_center_truth/5">
                                <div class="bg d-flex align-items-center justify-content-center">
                                    <div>
                                        <p class="plus">+</p>
                                        <p>Learn More</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/pictures/563/part_32800_1334223_39559.jpg" alt="">
                            </a>
                        </div>
                        <div class="content_text">
                            <div class="date">2018-06-24</div>
                            <div class="title">餐飲之夜</div>
                            <div class="content JQellipsis">
                                <p><span style="font-size: 14.4px;">歡樂一整夜</span><br></p>
                            </div>
                            <a href="/info_center_truth/1">
                                <span>查看內文</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="photo">
                            <a href="/info_center_truth/3">
                                <div class="bg d-flex align-items-center justify-content-center">
                                    <div>
                                        <p class="plus">+</p>
                                        <p>Learn More</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/pictures/253/part_37104_6831238_72223.png" alt="">
                            </a>
                        </div>
                        <div class="content_text">
                            <div class="date">2018-06-24</div>
                            <div class="title">餐飲之夜</div>
                            <div class="content JQellipsis">
                                <p><span style="font-size: 14.4px;">歡樂一整夜</span><br></p>
                            </div>
                            <a href="/info_center_truth/1">
                                <span>查看內文</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="photo">
                            <a href="/info_center_truth/4">
                                <div class="bg d-flex align-items-center justify-content-center">
                                    <div>
                                        <p class="plus">+</p>
                                        <p>Learn More</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/pictures/507/part_37102_1850596_62173.png" alt="">
                            </a>
                        </div>
                        <div class="content_text">
                            <div class="date">2018-06-24</div>
                            <div class="title">餐飲之夜</div>
                            <div class="content JQellipsis">
                                <p><span style="font-size: 14.4px;">歡樂一整夜</span><br></p>
                            </div>
                            <a href="/info_center_truth/1">
                                <span>查看內文</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="photo">
                            <a href="/info_center_truth/5">
                                <div class="bg d-flex align-items-center justify-content-center">
                                    <div>
                                        <p class="plus">+</p>
                                        <p>Learn More</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="http://restaurant.csmu.edu.tw/ezfiles/39/1039/pictures/563/part_32800_1334223_39559.jpg" alt="">
                            </a>
                        </div>
                        <div class="content_text">
                            <div class="date">2018-06-24</div>
                            <div class="title">餐飲之夜</div>
                            <div class="content JQellipsis">
                                <p><span style="font-size: 14.4px;">歡樂一整夜</span><br></p>
                            </div>
                            <a href="/info_center_truth/1">
                                <span>查看內文</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section4_paging">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled prev">
                                <a class="page-link" onclick="return false;" tabindex="-1">上一頁</a>
                            </li>
                            <li class="page-item number">
                                <div class="page-link a">
                                    <input id="page" type="text" class="form-control" value=" 1" min="1" max="2">
                                    <span style="margin:0 15px;">/</span>
                                    <span>2</span>
                                </div>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="/info_center_truth?page=2" tabindex="-1">下一頁</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <a href="#" class="go-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm">
                    <ul>
                        <li> <a href="/product_all_kind">產品專區</a></li>
                        <li><a href="/component_all_kind">零件專區</a></li>
                    </ul>
                </div>
                <div class="col-4 col-sm">
                    <ul>
                        <li><a href="/info_center_truth">訊息中心</a></li>
                        <li><a href="/service_question">服務支援</a></li>
                        <li><a href="/company_about">公司簡介</a></li>
                    </ul>
                </div>
                <div class="col-4 col-sm">
                    <ul>
                        <li><a href="/contact_contact_us">聯絡我們</a></li>
                        <li><a href="https://www.104.com.tw/jobbank/custjob/index.php?r=cust&j=4c4a4224345c3f2248423a1d1d1d1d5f2443a363189j99&jobsource=checkc">
                                人才招募
                            </a></li>
                        <li><a href="http://www.pcstore.com.tw/puricom">
                                線上商店
                            </a></li>
                    </ul>
                </div>
                <div class="col-4 col-sm-4 col-md-3 d-none d-sm-block">
                    <ul>
                        <li><a href="privacy">服務條款與隱私政策</a></li>
                    </ul>
                </div>
                <div class="w-100 d-block d-lg-none"></div>
                <div class="col offset-xl-1">
                    <div class="icon">
                        <a href="#"><img src="/images/index/fb.svg" alt="" width="73" height="73"></a>
                        <a href="#"><img src="/images/index/youtube.svg" alt="" width="73" height="73"></a>
                        <a href="http://www.upright-tech.com.tw/">
                            <img src="/images/index/sun.svg" alt="" width="73" height="73">
                        </a>
                        <a href="http://puricom.eu/">
                            <img src="/images/index/EU.svg" alt="" width="73" height="73">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb_private d-block d-sm-none">
        <a href="#">服務條款與隱私政策</a>
    </div>
    <div class="copyright p-0 p-sm-2">Copyright&nbsp;©&nbsp;PURICOM&nbsp;All&nbsp;Rights&nbsp;Reserved. <div class="w-100 d-block d-sm-none"></div> <span>&nbsp;Developed by DigiPack</span></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://puricom.digipack-develop.com/js/app.js"></script>
<script src="https://puricom.digipack-develop.com/js/bootstrap-4-navbar.js"></script>
<script>
    $("#nav_li_item_1").hover(function () {
        $(this).toggleClass( "active" );
    });

    $("#nav_li_item_2").hover(function () {
        $(this).toggleClass( "active" );
    });
    $("#nav_li_item_3").hover(function () {
        $(this).toggleClass( "active" );
    });
    $("#nav_li_item_4").hover(function () {
        $(this).toggleClass( "active" );
    });
    $("#nav_li_item_5").hover(function () {
        $(this).toggleClass( "active" );
    });
    $("#nav_li_item_6").hover(function () {
        $(this).toggleClass( "active" );
    });

    $(window).scroll(function () {
        var scrollTop =  $(window).scrollTop();

        if(scrollTop >150){
            $("#app").addClass("fixed");
            $("#main_nav").addClass("fixed");
        }else{
            $("#app").addClass("fixed");
            $("#main_nav").removeClass("fixed");
        }
    });
</script>
<script>
    $(".search_icon").click(function(){
        $(".search_icon").toggleClass("active");
        $(".search").toggleClass("active");
        $(".search_line").toggleClass("active");
    })
</script>
<script>
    $(".collapse-toggle").click(function () {
        $(".menu-wrap").toggleClass("active");
        $(".menu-wrap-bg").toggle();
        $("body").toggleClass("lock");
    });

    $(".menu-wrap-bg").click(function () {
        $(".menu-wrap").removeClass("active");
        $(".menu-wrap-bg").hide();
        $("body").removeClass("lock");
    });
</script>
<!--子層出現-->
<script>
    //li滑動
    $(".menu-bottom > li > div").click(function(){
        if($(this).hasClass("active")){
            $(this).parent().find(".menu-bottom-sec").slideToggle(600);
            $(this).removeClass("active");
        }
        else {
            $(".menu-bottom > li > div").removeClass("active");
            $(".menu-bottom-sec > li > div").removeClass("active");
            $(".menu-bottom-sec").slideUp(600);
            $(".menu_b").slideUp(600);
            $(this).addClass("active");
            $(this).parent().find(".menu-bottom-sec").slideToggle(600);
        }
    });
    $(".menu-bottom-sec > li > div").click(function(){
        $(this).toggleClass("active");
        $(this).parent().find(".menu_b").slideToggle(600);
    });
</script>


<script>
    $(document).ready(function() {
        // Show or hide the sticky footer button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.go-top').fadeIn(200);
            } else {
                $('.go-top').fadeOut(200);
            }
        });

        // Animate the scroll to top
        $('.go-top').click(function(event) {
            event.preventDefault();

            $('html, body').animate({scrollTop: 0}, 300);
        })
    });
</script>
<script>
    $(function(){
        var len = 65; // 超過50個字以"..."取代
        $(".JQellipsis").each(function(i){
            if($(this).text().length>len){
                $(this).attr("title",$(this).text());
                var text=$(this).text().substring(0,len-1)+"...";
                $(this).text(text);
            }
        });
    });
    $('.search_year').on('click',function () {
        if($(this).data('year') === 'all')
            location.href = '/info_center_truth';
        else
            location.href = '/info_center_truth?year='+$(this).data('year');
    });
    $('#page').change(function () {
        var max = 2;
        var now = 1;
        if($.isNumeric(this.value))
        {
            if(this.value >=1 && this.value <= max &&　this.value != now)
            {
                location.href = '/info_center_truth?page='+this.value;
            }
            else
            {
                this.value = now;
            }
        }
        else
        {
            this.value = now;
        }
    });
</script>
</body>
</html>