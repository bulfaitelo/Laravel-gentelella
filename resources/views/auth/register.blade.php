<!DOCTYPE html>
<html lang="en">
    @section('htmlheader_title', 'Login')
    @include('gentelella.layouts.partials.htmlheader')

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        {{--  Create Acount  --}}
        <div id="register" class="animate active form registration_form">
                <section class="login_content">
                  <form method="POST" action="{{ route('register') }}">
                      @csrf
                    <h1>Create Account</h1>
                    <div>                
                      <input id="name" placeholder="User Name"  type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div>                
                      <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div>
                      <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                          @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div>
                          <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-default submit">
                          Register
                      </button>               
                    </div>
      
                    <div class="clearfix"></div>
      
                    <div class="separator">
                      <p class="change_link">Already a member ?
                        <a href="#signin" class="to_register"> Log in </a>
                      </p>
      
                      <div class="clearfix"></div>
                      <br />
      
                      <div>
                        <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                      </div>
                    </div>
                  </form>
                </section>
              </div>
        {{--  login  --}}
        <div id="login" class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf

              <h1>Login Form</h1>
              <div>
                <input id="email" type="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>
              <div>
              <button type="submit" class="btn btn-default submit">
                  Login
              </button>                
                <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>       
      </div>
    </div>
  </body>
</html>

