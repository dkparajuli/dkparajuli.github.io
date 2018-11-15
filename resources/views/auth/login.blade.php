<html>
<head>
    <title>Customer Login</title>
   <link href="{{ asset('/css/cuslogin.css') }}" rel="stylesheet">
    </head>


<body>


                         
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="regislogin">Customer Login</p>
 <img class="img" src="{{ asset('/images/login.png') }}">
                        <div class="form-group row">
                          

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your E-mail">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="err">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br><br><br><br>
                        <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="err">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                  <p>   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                        </label></p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <p> <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button></p> 
<!--
                                 <p> <button  class="btne">
                                     <a class="btne" href="{{ route('register') }}">Register as Customer</a>
                                      {{ __('Register as Customer') }}
                                </button></p> 
-->

<!--
                               <p> <a class="btne" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                   </a></p>
-->
                            </div>
                        </div>
                    </form>
    </body>
</html>
