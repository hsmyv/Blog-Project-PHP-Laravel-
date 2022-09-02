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

    <h1>@lang('teacher.Muellim elave et')</h1>
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> 
        {{app()->getLocale()}}
      </button>
      <div class="dropdown-menu">        
        <a class = "dropdown item" href="{{URL::toRoute($current = Route::current(),['language'=>'az'] + $current->parameters, true)}}">AZ</a>
        <br> <a class = "dropdown item" href="{{URL::toRoute(Route::current(),['language'=>'en']+ $current->parameters, true)}}">EN</a>
      </div>
    </div>

    <form action="{{route('muellimelave')}}" method="post">
        @csrf
        @lang('teacher.Muellim'): <br>
        <div class="form-group">
            <input type="text" class="form-control" name="muellim"> <br>
        </div>

        @lang('teacher.Haqqinda'): <br>
        <div class="form-group">
            <textarea name="haqqinda" class="form-control"></textarea> <br>
        </div>
        @lang('teacher.Telefon'): <br>
        <div class="form-group">
            <input type="text" class="form-control" name="telefon"> <br>
        </div>
        @lang('teacher.Yas'): <br>
        <div class="form-group">
            <input type="text" class="form-control" name="yas"> <br>
        </div>


        <button type="sumbit" class="btn btn-success">@lang('teacher.Elave et')</button> <br> <br>
    </form>

    @if (session('ugur'))
       {{session('ugur')}}
    @endif

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Muellim</th>
        <th>Haqqinda</th>
        <th>Fenn</th>
        <th>Yas</th>
        <th>tel</th>
        <th>status</th>
        <th>OPT</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($teachers as $teacher)
        <tr>
        <td>{{$teacher->muellim}}</td>
        <td>{{$teacher->haqqinda}}</td>
        <td>{{$teacher->subject}}</td>
        <td>{{$teacher->yas}}</td>
        <td>{{$teacher->tel}}</td>
        <td>{{$teacher->status}}</td>
        <td>
            <a href="{{route('muellimdel',$teacher->id)}}" class="btn btn-danger btn-sm">Sil</a>
            <a href="{{route('muellimduzelt',$teacher->id)}}" class="btn btn-primary btn-sm">Duzelt</a>
        </td>
        </tr>
        @endforeach
      
     
    </tbody>
  </table>



</body>
</html>