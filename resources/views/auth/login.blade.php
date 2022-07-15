<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&family=Roboto:wght@900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('/css/Loginpage.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/queries/login media.css')}}">
    </head>
    <body>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{route('login')}}" class="main-bg">
            @csrf
        <div class="main-bg">
            <div class="main-body-wrapper">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/pic/last logo.png')}}"></a>
                </div>
                <div class="login-content-wrapper">
                    <div class="login-content">
                            <h1>Login</h1>
                        <div class="input-email">
                            <input class="email" for="email" :value="__('Email')"  id="email" type="email" name="email" placeholder="Email address">
                        </div>
                        <div class="input-password">
                            <input class="password" for="password" :value="__('Password')" id="password" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-sign-in">
                            <input class="sign-in" type="submit" value="Sign In">
                        </div>
                        <div class="check-box-input">
                            <input class="check-box" type="checkbox" value="true" checked>
                            <span class="remember-me">Remember me</span>
                            <a class="need-help" href="{{route('password.request')}}">Forgot my password</a>
                        </div>
                        <div class="new-in-moviehan">
                            <p class="new-in">New in Movie-Han?</p><a class="sign-up-now" href="{{route('register')}}"><b>Register</b></a><a>now</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="bottom-wrapper">
                <div class="bottom-div">
                    <div class="question-nav">
                        <a>Questions? Contact us</a>
                    </div>
                    <div class="navs">
                        <a>FAQ</a>
                        <a>Help Center</a>
                        <a>Terms of Use</a>
                        <a>Privacy</a>
                    </div>
                    <div class="navs">
                        <a>Cookie Preferences</a>
                        <a>Corporate Information</a>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>
</html>