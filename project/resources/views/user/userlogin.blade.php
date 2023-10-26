@extends('template')
@section("main")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>login</title>
</head>
<body>
  <div class="row" style="width:100% ;padding-left:10%;padding-top:10vh ">
   @if(Session::has("fail"))
   <div class="alert alert-primary" role="alert">
    {{Session::get("fail")}}
  </div>
   @endif
    <div class="container">
        <form id="login-form" class="login-form" method="POST" action="/userlogin">
          @csrf
          <h1>Welcome To Handidrive</h1>
          <div class="form-group">
            <input type="text" placeholder="Enter your Email" name="email"required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
              </div>
            <button type="submit"class="btn1">Sign In</button>
            <br>
              <a style="text-decoration: none" class="link" href="/">You don't have an account yet?</a>
              <a style="text-decoration: none" href="/trainee_register"><button type="button"class="btn2">Sign Up</button></a>
          </form>
    </div>
  </div>
</body>
</html>
@endsection