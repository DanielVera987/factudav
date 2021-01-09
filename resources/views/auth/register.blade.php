@extends('auth.header')

@section('content')
    <div>
      <div class="login_wrapper">
          <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h1>Register</h1>
                <div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password" required autocomplete="new-password">
                </div>

                <div>
                    <button type="submit" class="btn btn-default submit">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="separator">
                    <p class="change_link">
                      <a href="{{ url('/') }}" class="to_register"> Login </a>
                    </p>
    
                    <div class="clearfix"></div>
                    <br />
    
                    <div>
                      <p>©2020 All Rights Reserved.</p>
                    </div>
                  </div>
            </form>
          </section>
      </div>
    </div>
  </body>
</html>
@endsection