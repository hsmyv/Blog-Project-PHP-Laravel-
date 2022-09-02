<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

<div class="container">

    <h1> {{$teacher->muellim}} muellimi duzelt </h1>
    <form action="{{route('muellimyenile', $teacher->id)}}" method="post">
        @csrf
        Muellim: <br>
        <div class="form-group">
            <input type="text" class="form-control" name="muellim" value="{{$teacher->muellim}}"> <br>
        </div>

        Haqqinda: <br>
        <div class="form-group">
            <textarea name="haqqinda" class="form-control">{{$teacher->haqqinda}}</textarea> <br>
        </div>
        Fenn: <br>
        <div class="form-group">
            <input type="text" class="form-control" name="fenn" value="{{$teacher->fenn}}"> <br>
        </div>
        Tel: <br>
        <div class="form-group">
            <input type="text" class="form-control" name="telefon" value="{{$teacher->tel}}"> <br>
        </div>
        Yas: <br>
        <div class="form-group">
            <input type="text" class="form-control" name="yas" value="{{$teacher->yas}}"> <br>
        </div>
        Status <br>
        <div class="form-group">
            <select name ="status" class="form-control">
                <option value="isleyir" @if($teacher->status=="isleyir") selected @endif>Isleyir</option>
                <option value="islemir" @if($teacher->status=="islemir") selected @endif>Islemir</option>
            </select>
        </div>

        <button type="sumbit" class="btn btn-success">Duzelt</button> <br> <br>
    </form>
</div>