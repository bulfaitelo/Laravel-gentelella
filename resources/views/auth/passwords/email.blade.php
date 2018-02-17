<!DOCTYPE html>
<html lang="en">
    @section('htmlheader_title', 'Login')
    @include('gentelella.layouts.partials.htmlheader')

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        {{--  login  --}}
        <div class="animate form login_form">
          <section class="login_content">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

              <h1>Reset Password</h1>
              <div>
                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>                           
              <div>
                <div class="form-group row mb-0">
                  <div class="col-md-12 offset-md-4">
                      <button type="submit" class="btn btn-default submit">
                          Send Password Reset Link
                      </button>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

             
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