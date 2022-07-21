<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sidebar Dashboard Template With Sub Menu</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/livestreamcontrol.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::asset('/css/usercontrolstyle.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/Homepage/livestream.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>
        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <div class="header">
                <div class="header-menu">
                    <div class="title"> Admin <span> Settings </span></div>               
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <a href="{{route('user-control')}}"><img src="{{URL::asset('/pic/last logo.png')}}" alt=""></a>
                        <p>Admin</p>
                    </center>
                    <!--account setting end-->
                    <!--user control start-->
                    <li class="item" id="profile">
                        <a href="{{route('user-control')}}" class="menu-btn ">
                            <i class="fas fa-user-circle"></i><span>User Control</span>
                        </a>
                    </li>
                    <!--User control end-->
                    <!--movie control start-->
                    <li class="item" id="messages">
                        <a href="{{route('movie-control')}}" class="menu-btn">
                            <i class="fas fa-film"></i><span>Movie Control</span>
                        </a>
                    </li>
                    <!--movie control end-->
                    <!--Livestream control start-->
                    <li class="item" id="settings">
                        <a href="{{route('stream-control')}}" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Livestream Control</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{route('account-settings')}}" class="menu-btn active">
                            <i class="fa fa-cogs"></i><span>Account Settings</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
                <div class="card">
                    <div class="table">
                        <div class="table_header">
                            <p> Account Settings</p>
                        </div>
                        <!--Table Header end-->
                        <div class="table_section">
                            <table>
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                       <td class="info"></td>
                                        <td class="info">Email Address:</td>
                                        <td class="info">Cokealfonso@redhorse.com </td>
                                        <td  class="control-user">
                                            <button class="button view" type="submit">Change Email</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="info"> </td>
                                        <td class="info">Password:</td>
                                        <td class="info">************</td>
                                        <td  class="control-user">
                                            <button class="button view" type="submit">Change password</button>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <!--Table end-->       
                </div>  
            </div>           
            <!--main container end-->
        </div>
        <!--wrapper end-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
      