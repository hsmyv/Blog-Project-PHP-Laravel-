<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="section" id="login">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <form class="user" method="POST" action="{{route('login-sumbit')}}">
                        @csrf
                        <h4 class="mb-4">Login</h4>
                            <div class="form-row">
                                <div class="form-group col-sm-4"> 
                                    <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Name">
                                </div> 
                                <div class="form-group col-sm-4">
                                    <input type="password" class="form-control text-white rounded-0 bg-transparent" name="password" placeholder="Password">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-12 mb-0">
                                    <button type="submit" class="btn btn-primary rounded w-md mt-3">Login</button>
                                    
                                </div> 
                                @if(session('danger'))
                                <div class="text-danger">{{session('danger')}} </div>     
                                @endif              
                            </div>                          
                    </form>
                </div>
    
            </div>
        <div>    
    </section>
</body>
</html>