<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b8b94f6dc2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{URL::asset('css/Profile/header.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Profile/body.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Profile/bottom.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Profile/media queries/profile media queries.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <title>Hans - Account</title>
    </head>
    <body>
        <div class="header-container">
            <div class="header-wrapper">
                <a href="{{route('dashboard')}}">
                    <img class="logo" src="{{URL::asset('/pic/last logo.png')}}" alt="" style="width:30%;height:30%;">
                </a>
            </div>
            <div class="header-profile">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
                      <li><a class="dropdown-item" href="{{route('user-settings')}}">Settings</a></li>
                      <form action="{{route('logout')}}" method="POST">@csrf<li><button class="dropdown-item">Logout</button></li></form>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body-container">
            <div class="body-wrapper">
                <div class="title">
                    <p>Account</p>
                    <br>
                </div>
                <hr>

                <div class="account-info">
                    <div class="user-info">
                        <strong>USER INFORMATION</strong>
                    </div>
                    <div class="account-details">
                        <!-- <p>(Username/Email)</p> -->
                        <strong>CHANGE PASSWORD</strong>
                        <!-- <button class="button view" type="submit" data-bs-toggle="modal" data-bs-target="#passwordModal" data-bs-whatever="@mdo">Change password</button>
                        
                        <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                
                                </div>
                            </div>
                        </div> -->

                        <div class="modal-body">
                            <form action="{{route('userupdate-Password')}}" method="POST">

                                @csrf

                                <div>
                                    <label class="mt-3">Old Password</label>
                                    <input class="form-control" type="password" name="user_old_password" id ="useroldPasswordInput">

                                </div>

                                <div>
                                    <label>New Password</label>
                                    <input class="form-control" type="password" name="user_new_password" id ="usernewPasswordInput">
                                </div>

                                <div>
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password" name="user_new_password_confirmation" id ="userconfirmNewPasswordInput">
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input type="submit" class="btn btn-secondary mt-3">
                                    <!-- <button class="button view mt-3" type="submit" data-bs-toggle="modal" data-bs-target="#passwordModal" data-bs-whatever="@mdo">Submit</button>
                                    <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                                                
                    </div> 
                </div>
            </div>
                        
                                                    


        <div class="bottom-container">
            <div class="body-container-wrapper">
                <div class="social-media">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
                <div class="bottom-nav">
                    <a href="#">Help Center</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Cookie Preferences</a>
                    <a href="#">Privacy</a>
                    <a href="#">Media Center</a>
                    <a href="#">Corporate Information</a>
                    <a href="#">Audio</a>
                    <a href="#">Subtitles</a>
                    <a href="#">Gift Cards</a>
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </body>
</html>