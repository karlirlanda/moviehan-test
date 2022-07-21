<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&family=Roboto:wght@900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b8b94f6dc2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{URL::asset('/css/Registration.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/registration media.css')}}">
    </head>
    <body>
        <form method="POST" action="{{ route('register') }}" class="main-bg">
            @csrf  
        <div class="main-bg">
            <div class="main-body-wrapper">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/pic/last logo.png')}}"></a>
                </div>
                <div class="login-content-wrapper">
                    <div class="login-content">
                        <h1>Register</h1>
                        <div class="input-username">
                            <input class="username" for="name" :value="__('Name')" type="text" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="input-email">
                            <input class="email" type="email" for="email" :value="__('Email')" id="email" name="email" placeholder="Email address">
                        </div>
                        <div class="input-password">
                            <input class="password" type="password" for="password" :value="__('Password')" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-password">
                            <input class="password" type="password" for="password_confirmation" :value="__('Confirm Password')" name="password_confirmation" id="password_confirmation" placeholder="Retype-Password">
                        </div>
                        <div class="security-box">
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>
                        <div class="input-sign-in">
                            <input class="sign-in" type="submit" value="Register">
                        </div>
                        <div class="already-have">
                            <a>Already have an account?</a><b><a class="sign-here" href="{{route('login')}}">Login here</a></b>
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
                        <a> Privacy</a>
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