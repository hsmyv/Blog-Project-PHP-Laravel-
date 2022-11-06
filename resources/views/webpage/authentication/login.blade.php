<x-main>
  <div class="container col-md-5">
<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="" role="tab"
        aria-controls="pills-login" aria-selected="true">{{__('Login')}}</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="register" role="tab"
        aria-controls="pills-register" aria-selected="false">{{__("Register")}}</a>

    </li>
  </ul>
  <!-- Pills navs -->


  <!-- Pills content -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      <form method="POST" action=""{{route('login') }}">
      @csrf
        <div class="text-center mb-3">
          <p>{{__("Sign in with")}}:</p>
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

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input name = "email" type="email" id="loginName" class="form-control" value="{{old('email')}}" required >
          <label class="form-label" for="loginName">Email</label>
          @error('email')
          <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
      @enderror
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input name = "password" type="password" id="loginPassword" class="form-control" value="{{old('password')}}" required >
          <label class="form-label" for="loginPassword">{{__('Password')}}</label>
          @error('password')
          <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
      @enderror
        </div>

        <!-- 2 column grid layout -->
        <div class="row mb-4">
          <div class="col-md-6 d-flex justify-content-left">
            <!-- Checkbox -->
            <div class="form-check mb-3 mb-md-0">
              <input name="remember_me"class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
              <label class="form-check-label" for="loginCheck"> {{__('Remember me')}} </label>
            </div>
          </div>

          <div class="col-md-6 d-flex justify-content-right">
            <!-- Simple link -->
            <a href="{{route('forget.password.get')}}">{{__('Forgot password?')}}</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-3">{{__("Sign in")}}</button>
        <!-- Register buttons -->
        <div class="text-left">
          <p>{{__("Not a member?")}}<a href="{{route('showregister')}}">{{__("Register")}}</a></p>
        </div>
      </form>
    </div>
  </div>
</x-main>
