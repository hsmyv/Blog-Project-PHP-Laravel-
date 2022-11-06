<x-main>
      @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif


<div class='container col-md-4'>
    <form method="POST" action="{{ route('forget.password.post')}}">
        @csrf

  <h1 class="text-center mb-10"> {{__('Change Password')}} </h1>
        <!-- Password input -->
        <div class="form-outline mb-4">
        <label class="form-label" for="loginName">Email</label>
          <input   name = "email" type="email" id="loginName" class="form-control">


          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>

      @endif
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-3"> {{__('Send Password Reset Link')}}</button>
    </form>
</div>
</x-main>
