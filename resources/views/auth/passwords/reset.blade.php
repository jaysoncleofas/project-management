<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <main>
        <div class="container">
          <div class="columns">
            <div class="column is-4 is-offset-4">
              <div class="card mt-5">
                <header class="card-header">
                  <p class="card-header-title">Reset Passwordr</p>
                </header>
                <div class="card-content">
                  <form action="{{route('password.request')}}" method="post">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="field">
                      <label for="" class="label">Email:</label>
                      <div class="control">
                        <input id="email" class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" value="{{ $email ?? old('email')}}">
                      </div>
                      @if ($errors->has('email'))
                        <p class="help is-danger">
                          {{$errors->first('email')}}
                        </p>
                      @endif
                    </div>

                    <div class="field">
                      <label for="" class="label">Password:</label>
                      <div class="control">
                        <input id="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password">
                      </div>
                      @if ($errors->has('password'))
                        <p class="help is-danger">
                          {{$errors->first('password')}}
                        </p>
                      @endif
                    </div>

                    <div class="field">
                      <label for="" class="label">Confirm Password:</label>
                      <div class="control">
                        <input id="password-confirm" class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password_confirmation">
                      </div>
                      @if ($errors->has('password_confirmation'))
                        <p class="help is-danger">
                          {{$errors->first('password_confirmation')}}
                        </p>
                      @endif
                    </div>

                    <div class="field">
                      <div class="control">
                        <button type="submit" class="button is-black">Reset Password</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
              <a class="button is-text mt-2" href="{{route('login')}}">Log in</a>
              <a class="button is-text mt-2" href="{{route('register')}}">Register</a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
