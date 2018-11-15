<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
        <title>CAVS</title>

    </head>
       
    <body>
        
        <h1 class="firstheading">Welcome to</h1>
        <h1 class="secondheading">Care Animal Veterinary System </h1>
        
        <p class="regis">Registered Customer??</p>
        <a class="signin" href="{{route('login')}}">Customer Login</a>
        
        <p class="unregis">Unregistered Customer??</p>
        <a class="signup" href="{{route('register')}}">Register as Customer</a>
        
       
       
        
    </body>
    

</html>
