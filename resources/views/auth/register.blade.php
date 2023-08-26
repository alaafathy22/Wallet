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
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span>
                        <div class="card-header"><a class="login100-form-title p-b-49" style="text-decoration:none;"
                                href="register">{{ __('masseges.Sign_Up') }}</a></div>
                    </span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">{{ __('masseges.reg_name') }}</span>
                        <input id="name" placeholder="{{ __('masseges.reg_name') }}" type="text"
                            class="input100 @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
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
                    <div class="wrap-input100 validate-input p-t-15" data-validate="Password is required">
                        <span class="label-input100">{{ __('masseges.reg_confirm_password') }}</span>
                        <input placeholder="{{ __('masseges.reg_confirm_password') }}" id="password-confirm" type="password"
                            class="input100" name="password_confirmation" required autocomplete="new-password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <div class="p-t-20"></div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                {{ __('masseges.Sign_Up') }}
                            </button>
                        </div>
                    </div>
                    <div class="flex-col-c p-t-50">
                        <span class="txt1 p-b-17">
                            OR
                        </span>
                        <a href="/login" class="txt2">
                            {{__('masseges.my_login')}}
                        </a>
                    </div>
                </form>
                @include('auth/buttonsLanguages')
            </div>
        </div>
    </div>

</body>

</html>
