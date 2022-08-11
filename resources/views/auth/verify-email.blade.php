<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&family=Roboto:wght@900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('/css/Resetpass.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/queries/login media.css')}}">
    </head>
    <body>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="main-bg">
            <div class="main-body-wrapper">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/pic/last logo.png')}}"></a>
                </div>
                <div class="login-content-wrapper">
                    <div class="login-content">
                        <h1>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</h1>                        
                        
                        @csrf
                        <div class="input-sign-in">
                            <form class="input-logout" method="POST" action="{{ route('logout') }}">
                                <button class="verify-btn">Resend Email Verification</button>
                                <button class="log-out-btn">Logout</button>
                            @csrf
                            </form>
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
    </body>
</html>