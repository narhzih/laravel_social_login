<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>Social Login with Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2 class="text-center mt-5 font-weight-bolder">SOCIAL LOGIN WITH LARAVEL</h2>
    <div class="buttons text-center">
      @if(\Illuminate\Support\Facades\Auth::user())
          <buttton class="btn btn-success"> You're already logged in</buttton>
      @else
            <a href="{{route('login-github')}}" class="btn btn-secondary">Github</a>
            <a href="{{route('login-facebook')}}" class="btn btn-primary">Facebook</a>
      @endif
    </div>
</div>
</body>
</html>
