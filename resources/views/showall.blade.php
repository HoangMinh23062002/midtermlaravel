<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .food {
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
    }
    img{
        width: 100px;
        height: 100px;
    }
    </style>
</head>
<body>
    <div class="container">
    <button><a class="btn btn-primary" href="{{route('minh.index')}}">View All </a></button><a
            class="btn btn-success" href="{{route('minh.create')}}">Create New car</a>
    <h1>-------------------------------------------------rau huu co--------------------------------------</h1>

    @foreach ($foods as $food)
        @csrf
        
        <div>
                <div class="food">
                    <div>
                        <a><img src="/images/{{$food->image}}" alt=""></a>
                    </div>
                    <div>
                        <div>{{$food->name}}</div>
                        <div>{{$food->description}}</div>
                    </div>
                    <div>----------------------------------------------------</div>
                    <div>
                        <h4>{{$food->amount}}VND</h4>
                    </div>
                    <a href="{{route('minh.show',$food->id)}}"><button >view Detail</button></a>

                </div>
            </div>
            @endforeach
            <h1>-------------------------------------------------thuc pham kho--------------------------------------</h1>
            @foreach ($food2 as $food)
            @csrf
            <div>
                <div class="food">
                    <div>
                        <a><img src="/images/{{$food->image}}" alt=""></a>
                    </div>
                    <div>
                        <div>{{$food->name}}</div>
                        <div>{{$food->description}}</div>
                    </div>
                    <div>----------------------------------------------------</div>
                    <div>
                        <h4>{{$food->amount}}VND</h4>
           
                    </div>
             <a href="{{route('minh.show',$food->id)}}"><button >view Detail</button></a>
                </div>
            </div>
            @endforeach
            <h1>-------------------------------------------------hoa qua--------------------------------------</h1>
            @foreach ($food3 as $food)
            @csrf
            <div>
                <div class="food">
                    <div>
                        <a><img src="/images/{{$food->image}}" alt=""></a>
                    </div>
                    <div>
                        <div>{{$food->name}}</div>
                        <div>{{$food->description}}</div>
                    </div>
                    <div>----------------------------------------------------</div>
                    <div>
                        <h4>{{$food->amount}}VND</h4>
           
                    </div>
             <a href="{{route('minh.show',$food->id)}}"><button >view Detail</button></a>
                </div>
            </div>
            @endforeach


    </div>
</body>
</html>