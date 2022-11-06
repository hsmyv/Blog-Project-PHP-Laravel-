<x-main>
  <div class="container col-md-5">
<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3 " id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="login" role="tab"
      aria-controls="pills-login" aria-selected="false">{{__('Login')}}</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="" role="tab"
      aria-controls="pills-register" aria-selected="true">{{__("Register")}}</a>
  </li>
</ul>
<!-- Pills navs -->



<div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
     <form  method="POST" action="{{route('createuser')}}">
      @csrf
      <div class="text-center mb-1">
        <p>{{__("Sign up with")}}:</p>
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

      <p class="text-center">{{__("or")}}:</p>

      <!-- Name input -->

      <div class="form-outline mb-3 ">
        <input name= "name"  type="text" id="registerName" class="form-control" value="{{old('name')}}" required >
        <label class="form-label" for="registerName" >{{__("Name")}}</label>
        @error('name')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Username input -->
      <div class="form-outline mb-3">
        <input  name= "username"  type="text" id="registerUsername" class="form-control" value="{{old('username')}}" required>
        <label class="form-label" for="registerUsername">{{__("Username")}}</label>
        @error('username')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Email input -->
      <div class="form-outline mb-3">
        <input  name="email"type="email" id="registerEmail" class="form-control" value="{{old('email')}}" required >
        <label class="form-label" for="registerEmail">Email</label>
        @error('email')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Password input -->
      <div class="form-outline mb-3">
        <input  name="password"  type="password" id="registerPassword" class="form-control" value="{{old('password')}}"required >
        <label class="form-label" for="registerPassword">{{__("Password")}}</label>
        @error('password')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Repeat Password input -->
      <div class="form-outline mb-3">
        <input  name="password_confirmation" type="password" id="registerRepeatPassword" class="form-control" value="{{old('password_confirmation')}}" required>
        <label class="form-label" for="registerRepeatPassword">{{__("Repeat password")}}</label>
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
    @enderror
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-left mb-3">
        <input  class="form-check-input me-3" type="checkbox" value="" required id="registerCheck" checked
          aria-describedby="registerCheckHelpText" />
        <label class="form-check-label" for="registerCheck">
          {{__("I have read and agree to the terms")}}
        </label>
      </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-2">{{__("Sign up")}}</button>

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
<div class="text-center ">
  <p>{{__("Already have an account")}}?<a href="{{route('showlogin')}}">{{__("Sign in")}}</a></p>
</div>
  </div>
</x-main>
