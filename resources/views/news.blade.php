<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Document</title>
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class = "container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($news as $value)
            <tr>
                <td>{{$value->name}}</td>
                    <td>
                    @if ($value->type == "image")
                        <img src="{{asset($value->file)}}" width="250" height="250" alt="">
                    @elseif($value->type == "video")
                        <video src="{{asset($value->file)}}" width="100" height="100" ></video>
                    @endif
                    </td>
                <td>
                    <a href = "{{route('destroy', $value->id)}}" class = "btn btn-sm btn-danger">Sil</a>
                    <a href = "{{route('download', $value->id)}}" class = "btn btn-sm btn-success">Yukle</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    @if($errors->any())
    <div class= "alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
    Xeber Yukle
    <form  action="{{route('store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class = "form--group">
    name
    <input type="text" name="name" class="form-control" autocomplete="off">
    </div>
    file
    <div class = "form group">
        <input type="file" name="file" class="form-control-file border">
    </div>
    <button type="submit" class="btn btn-success btn-block">Yarat</button>
   
    </form>


    
<body class = "antialiased">
    <br>
    <div class = "container">
     
    <form  action="{{route('mail')}}" method="POST">
    @csrf
    <div class = "form--group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" class="form-control" id="subject">
    </div>
    <div class = "form group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class = "form group">
        <label for="email">Body</label>  
        <textarea name="body" id="" cols="30" rows="10" id ="body" class="form control"></textarea>
    </div>
    <button type="sumbit" class="btn btn-primary">Sumbit</button>
</form>
</div>
 </html>

</body>