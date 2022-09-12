<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DOT.NET - Digital Agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
  
  <x-navbar/>


  
  <div class="container ">
<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="tab-login" data-mdb-toggle="pill" href="login" role="tab"
      aria-controls="pills-login" aria-selected="false">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="" role="tab"
      aria-controls="pills-register" aria-selected="true">Register</a>
  </li>
</ul>
<!-- Pills navs -->



<div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">

     <form  method="POST" action="/users">
      @csrf
      <div class="text-center mb-3">
        <p>Sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Name input -->
      
      <div class="form-outline mb-4">
        <input name= "name"  type="text" id="registerName" class="form-control" value="{{old('name')}}" required >
        <label class="form-label" for="registerName" >Name</label>
        @error('name')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input  name= "username"  type="text" id="registerUsername" class="form-control" value="{{old('username')}}" required>
        <label class="form-label" for="registerUsername">Username</label>
        @error('username')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input  name="email"type="email" id="registerEmail" class="form-control" value="{{old('email')}}" required >
        <label class="form-label" for="registerEmail">Email</label>
        @error('email')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input  name="password"  type="password" id="registerPassword" class="form-control" value="{{old('password')}}"required >
        <label class="form-label" for="registerPassword">Password</label>
        @error('password')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Repeat Password input -->
      <div class="form-outline mb-4">
        <input  name="password_confirmation" type="password" id="registerRepeatPassword" class="form-control" value="{{old('password_confirmation')}}" required>
        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-left mb-4">
        <input class="form-check-input me-3" type="checkbox" value="" id="registerCheck" checked
          aria-describedby="registerCheckHelpText" />
        <label class="form-check-label" for="registerCheck">
          I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
     
      @if($errors->any())
        <ul>
          @foreach ($errors->all() as $error)
            <li class="text-red-500 text-xs mt-1">{{$error}}</li>
           @endforeach
       </ul>
      @endif


    </form>
  </div>
</div>  
<div class="container signin">
  <p>Already have an account? <a href="login">Sign in</a>.</p>
</div>
   
</body>
</html>

<!-- Pills content -->