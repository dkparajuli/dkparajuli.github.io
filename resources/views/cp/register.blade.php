<html>
<head>
    <title>Registration</title>

    <link href="{{ asset('/css/reg.css') }}" rel="stylesheet">
    </head>
<body>
    
    <div>
        <p class="re">Register</p>
    </div>
    <div>
        
         @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li class="err">{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
        
        
    <form action="/insert" method="post">
    @csrf
        <br>
        <p><input type="text" name="name" class="textbox" placeholder="Full Name" required></p>
        <p><input type="text" name="address" class="textbox" placeholder="Address" required></p>
        <p><input type="text" name="contact" class="textbox" placeholder="Contact No." required ></p>
        <p><input type="email" name="email" class="textbox" placeholder="E-mail" required></p>
        <p> <select class="textbox" name="gender" required>
            <option value="" disabled selected hidden>Select Gender</option>
             <option value="male">Male</option>
             <option value="female">Female</option>
             <option value="others">Others</option>
  
            </select> </p>
        <p><input type="text" name="username" class="textbox" placeholder="Username" required ></p>
        
        <p><input type="password" name="password" class="textbox" placeholder="Password" required ></p>
        <p><input type="password" name="confirm" class="textbox" placeholder="Confirm-Password" required></p>
        
    
        <p>  <input type="submit" class="sub" value="Register"></p>
    
    
    
    </form>
    
    
    </div>
    </body>



</html>