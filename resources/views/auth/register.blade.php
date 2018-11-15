<html>
<head>
    <title>Registration as Customer</title>

    <link href="{{ asset('/css/reg.css') }}" rel="stylesheet">
    </head>
<body>
    
    <div>
        <p class="re">Register As Customer</p>
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
        
        
    <form action="{{ route('register') }}" method="post">
    @csrf
        <br>
        <p><input type="text" name="name" class="textbox" placeholder="Full Name" required></p>
        <p><input type="text" name="address" class="textbox" placeholder="Address" required></p>
        <p><input type="text" name="contact" class="textbox" placeholder="Contact No." required ></p>
        <p><input type="email" name="email" class="textbox" placeholder="E-mail" required></p>

        
        <p><input type="password" name="password" class="textbox" placeholder="Password" required ></p>
        <p><input type="password" name="confirm" class="textbox" placeholder="Confirm-Password" required></p>
        
    
         <button type="submit" class="btnregis">
                                    {{ __('Register') }}
                                </button>
    
    
    
    </form>
    
    
    </div>
    </body>



</html>