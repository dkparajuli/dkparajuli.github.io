<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
<!--
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
-->

    <!-- Styles -->
<!--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ asset('/css/nav.css') }}" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    
    <ul class="hornav">
     <li>
      <a  href="dashboard"><strong>CAVS: Care Pets and Promotes Agricultre</strong>&nbsp; </a></li>
      <li class="liss"><input type="search" placeholder="Search Item here" class="search">
        <button class="searchbutton" >Search</button></li>
        <li class="liss"><a href=""></a></li>
         <li class="liss">
      

              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

             
  
      <li class="liss"><a href="#"> About</a></li>
      <li class="liss"><a href="help">Help</a></li>
      <li class="liss"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
</li>
    </ul>
  </div>
</nav>
    
</body>
</html>
