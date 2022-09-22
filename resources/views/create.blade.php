<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
<h1> Yeni xeber yarat</h1>
<select name="news" id="">
    <option value="">Xeber sec</option>
    @foreach($news as $n)
        <option value="">{{$n->name}}</option>
    @endforeach
</body>
</html>