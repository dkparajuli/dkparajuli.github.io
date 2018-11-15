<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="{{ asset('/css/nav.css') }}" rel="stylesheet" />
    
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    
    <ul class="hornav">
     <li>
      <a  href="#"><strong>CAVS: Care Pets and Promotes Agricultre</strong>&nbsp; </a></li>
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

             
        <li class="liss"><a href="#">Notification</a></li>
      <li class="liss"><a href="#">About</a></li>
      <li class="liss"><a href="#">Help</a></li>
      <li class="liss"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
</li>
    </ul>
  </div>
</nav>
@include('cp.verticalnav')  
        
           
          
</body>
</html>