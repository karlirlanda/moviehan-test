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
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

        <div class="main-bg">
            <div class="main-body-wrapper">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/pic/last logo.png')}}"></a>
                </div>
                <div class="login-content-wrapper">
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="login-content-wrapper">
                        <div class="login-content">
                            <h1>Please input your new password here!</h1>                        
                        </div>
                    </div>
                     <!-- Email Address -->
                        <div>
                            <label for="email" :value="__('Email')">
                                <input id="email" type="email" name="email" :value="old('email', $request->email)" value="Please input your email address here" autofocus />
                            </label>                           
                        </div>
                        <!-- Password -->
                        <div>
                            <label for="password" :value="__('Password')">
                                <input id="password" type="password" name="password" required />
                            </label>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" :value="__('Confirm Password')">
                            <input id="password_confirmation" 
                                                type="password"
                                                name="password_confirmation" required />
                            </label>
                        </div>
                        <div>
                            <button>
                                {{ __('Reset Password') }}
                            </button>
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