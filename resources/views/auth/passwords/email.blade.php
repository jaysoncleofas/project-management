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
        <div class="continer">
          <div class="columns">
            <div class="column is-4 is-offset-4">
              @include('include.notification')
              <div class="card mt-5">
                <header class="card-header">
                  <p class="card-header-title">Reset Password</p>
                </header>
                <div class="card-content">
                  <form action="{{route('password.email')}}" method="post">
                    @csrf

                    <div class="field">
                      <label for="" class="label">Email:</label>
                      <div class="control">
                        <input id="email" class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" value="{{old('email')}}">
                      </div>
                      @if ($errors->has('email'))
                        <p class="help is-danger">
                          {{$errors->first('email')}}
                        </p>
                      @endif
                    </div>

                    <div class="field">
                      <div class="control">
                        <button type="submit" class="button is-black">Send Password Reset Link</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div><!--card-->
              <a class="button is-text mt-2" href="{{route('login')}}">Log in</a>
              <a class="button is-text mt-2" href="{{route('register')}}">Register</a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
