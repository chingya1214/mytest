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
@foreach($id_list as $id)
<button type="button" id="search" class="btn btn-primary" data-id="{{$id}}">{{$id}}</button>
@endforeach

<div class="row">
    <div class="col-7">
        <div class="card mt-3">
            <div class="card-header">
                <h1>城市名稱</h1>
            </div>
            <div class="card-body">
                <p>郵遞區號</p>
            </div>
        </div>
    </div>
</div>



<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.btn.btn-primary').on('click',function () {
        var id = $(this).data('id');
        $.ajax({
            url:"/json/"+id,
            type:"GET",
            dataType:"json",
            success:function (data) {
                console.log(data);
                $('.card-header h1').html(data.title);
                $('.card-body p').html(data.main);
            }
        })
    });
</script>
</body>
</html>
