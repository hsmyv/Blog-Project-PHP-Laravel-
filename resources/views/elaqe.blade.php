<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())

        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach

    @endif


   <form action="{{route('formelaqe')}}" method="POST">
        @csrf
        Ad <br>
        <input type="text" name="ad" value="{{old('ad')}}"> <br>
        Soyad <br>
        <input type="text" name="soyad" value="{{old('soyad')}}" > <br>
        Telefon <br>
        <input type="text" name="tel" value="{{old('tel')}}" > <br>
        E-mail <br>
        <input type="text" name="email" value="{{old('email')}}"> <br> <br>

        <button type="sumbit">Gonder</button>
    </form>

    <br>
    <div class= "container">
    <div class = "row">
        <div class="coll md-3">
        </div>
    <div class = "col-md-4">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="0">Passive</option>
            <option value="1">Aktiv</option>
        </select>
    </div>
    </div>
</div>


</body>
</html>
