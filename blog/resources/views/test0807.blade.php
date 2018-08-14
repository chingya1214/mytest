<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <script scr="{{asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
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