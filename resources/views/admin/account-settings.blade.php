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
                                            <button class="button view" type="submit" data-bs-toggle="modal" data-bs-target="#emailModal" data-bs-whatever="@mdo">Change Email</button>
                                                <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Change Email</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-2">
                                                                    <label for="recipient-name" class="col-form-label">Old Email:</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="recipient-name" class="col-form-label">New Email:</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="recipient-name" class="col-form-label">Confirm Email:</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Submit</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td class="info"> </td>
                                        <td class="info">Password:</td>
                                        <td class="info">************</td>
                                        <td  class="control-user">
                                            <button class="button view" type="submit" data-bs-toggle="modal" data-bs-target="#passwordModal" data-bs-whatever="@mdo">Change password</button>
                                                <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <div class="mb-2">
                                                                    <label for="recipient-name" class="col-form-label">Old Password:</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="recipient-name" class="col-form-label">New Password:</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="recipient-name" class="col-form-label">Confirm Password:</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Submit</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td  class="control-user">
                                            <form action="{{route('logout')}}" method="POST">@csrf<button class="button view" type="submit">Log out</button></form>
                                        </td>
                                    </tr>
                                    <tr></tr>       
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
      