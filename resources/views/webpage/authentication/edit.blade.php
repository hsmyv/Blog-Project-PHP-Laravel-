<x-main>
    @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
       {{ Session::get('message') }}
   </div>
@endif
<div class="container col-md-4">
    <form method="POST" action="{{route('reset.password.post') }}">
        @csrf
  <h1 class="text-center mb-10"> Change Password </h1>
  <!-- Password input -->
  <input type="hidden" name="token" value="{{ $token }}">

  <div class="form-outline mb-4">
    <input   name = "email" type="text" id="loginName" class="form-control" >
    <label class="form-label" for="loginName">Email</label>
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
@endif
  </div>
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input   name = "password" type="password" id="loginName" class="form-control" >
          <label class="form-label" for="loginName">Password</label>
          @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
      @endif
        </div>

        <!-- RepeatPassword input -->
        <div class="form-outline mb-4">
          <input name = "password_confirmation" type="password" id="loginPassword" class="form-control" >
          <label class="form-label" for="loginPassword">Repeat Password</label>
          @if ($errors->has('password_confirmation'))
          <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
      @endif
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-3">Change Password</button>
    </form>
</div>
</x-main>
