<html>
<head>
    <title>Login</title>

    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
    </head>
<body> 
    <form action="/logg" method="post">
@csrf
    
    <img class="img" src="{{ asset('/images/login.png') }}">
        <br>
        
    
   <p> <input type="text" placeholder="Username" class="tex" required name="user"></p>
       
       
      <p>  <input type="password" placeholder="Password" class="tex" required name="pass"></p>
        <input type="submit" value="Login" class="logbutton">
        <p ><a href="/signup" class="regis">Not Registered??? </a></p>
        
    
    </form>
    
    

    
    </body>



</html>