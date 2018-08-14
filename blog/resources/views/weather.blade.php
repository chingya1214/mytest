<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <script scr="{{asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
        }
        .container{
            margin-top: 80px;
         }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <button type="button" id="search" class="btn btn-primary">更新資料</button>
            <button type="button" id="last1" class="btn btn-primary">上個城市</button>
            <button type="button" id="next1" class="btn btn-primary">下個城市</button>
            <button type="button" id="last2" class="btn btn-primary">上個鄉鎮</button>
            <button type="button" id="next2" class="btn btn-primary">下個鄉鎮</button>
        </div>

    </div>
    <div class="row">
        <div class="col-7">
            <div class="card mt-3">
                <div class="card-header">
                    <h1>城市名稱</h1>
                </div>
                <div class="card-body">
                    <h3>鄉鎮名稱</h3>
                    <p>郵遞區號</p>
                </div>
        </div>

        </div>

    </div>


</div>



<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    var country = 0;
    var town = 0;



    $('#search').on('click',function () {
        $.ajax({
            url:"https://works.ioa.tw/weather/api/all.json",
            type:"GET",
            dataType:"json",
            success:function (data) {
                console.log(data[country]);
                $('.card-header h1').html(data[country].name);
                $('.card-body h3').html(data[country].towns[town].name);
                $('.card-body p').html(data[country].towns[town].postal);
            }
        })
    });

    $('#last1').on('click',function () {
        country++;
        getData();

    });

    $('#next1').on('click',function () {
        country--;
        town=0;
    });

    $('#last2').on('click',function () {
        town++;
    });

    $('#next2').on('click',function () {

    })
</script>
</body>
</html>
