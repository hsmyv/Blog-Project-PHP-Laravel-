<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Ana Sehife</title>
</head>
</body>
    <h1>ana sehife</h1>
    @foreach ($adlar as $ad)
        {{$ad}} <br>
    @endforeach

    
    <a href="{{route('muellim')}}">Muellim sehifesi</a>
</body>
</html>
