<!DOCTYPE html>
<html lang="en" style="direction: {{app()->getLocale()=='en'?'ltr' : 'rtl'}}">

<head>
    <title>{{ config('app.name', 'Wallet') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/wallet.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login_util.css">
    <link rel="stylesheet" type="text/css" href="css/login_main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-0">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class=" ">
                        <a class="login100-form-title p-b-49" style="text-decoration:none;" href="/">
                            {{ __('masseges.my_login') }}</a>
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">{{ __('masseges.Email') }}</span>
                        <input placeholder="{{ __('masseges.Email') }}" id="email" type="email"
                            class="input100 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">{{ __('masseges.Password') }}</span>
                        <input placeholder="{{ __('masseges.Password') }}" id="password" type="password"
                            class="input100 @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('masseges.Remember_Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-right p-t-8 p-b-31">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('masseges.Forgot_Your_Password') }}
                            </a>
                        @endif
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>

                            <button type="submit" class="login100-form-btn">
                                {{ __('masseges.my_login') }}
                            </button>
                        </div>

                    </div>
                    <div class="flex-col-c p-t-50">
                        <span class="txt1 p-b-17">
                            OR
                        </span>

                        <a href="/register" class="txt2">
                            {{ __('masseges.Sign_Up') }}
                        </a>
                    </div>
                </form>
                @include('auth/buttonsLanguages')
            </div>
        </div>
    </div>

</body>

</html>
