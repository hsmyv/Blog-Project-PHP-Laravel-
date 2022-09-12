<form action="{{route("login")}}" method="POST">
    @csrf
    <input type= "text" name="email">
    <input type= "text" name="password">
    <button type = "submit"> giris </button>
</form>

@if(Auth::guard('customers')->check())
    {{Auth::guard('customers')->user()->name}}
    
    {{Auth::guard('customers')->user()->password}}
    {{Auth::guard('customers')->user()->email}}
@endif
