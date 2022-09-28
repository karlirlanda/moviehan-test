<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/moviecontrolstyle.css')}}">
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
                        <a href="{{route('movie-control')}}" class="menu-btn active">
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
                        <a href="{{route('account-settings')}}" class="menu-btn">
                            <i class="fa fa-cogs"></i><span>Account Settings</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
                <div class="card">
                    <h1>Movie Control Table</h1>
                </div>
                <div class="card">
                    <div class="table">
                        <div class="table_header">
                            <p> Show entries</p>
                            <div>
                                <input placeholder="Search name"/>
                                <button class="add_new btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" id="modalId">
                                <span class="material-symbols-outlined">
                                add
                                </span></button>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form>
                                          <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Thumbnail:</label>
                                            <input type="file" class="form-control" id="recipient-name" onchange="readURL(this)" accept="Image/*">
                                          </div>
                                          <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Title:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                           <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Description:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                           <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Cast:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                           <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Duration:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                           <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Year Release:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                           <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Genre:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                           <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Tags:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                           <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Status:</label>
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
                            </div>
                        </div>
                        <!--Table Header end-->
                    <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Details</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td class="info">1</td>
                                <td class="info"><img src="admin.png"/></td>
                                <td class="info">Movie 1</td>
                                <td class="info"> </td>
                                <td class="info">status</td>
                                <td  class="control-user">
                                    <!---Update Modal----->
                                    <button class="button view" type="submit" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-whatever="@mdo">Update</button>
                                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Thumbnail:</label>
                                                <input type="file" class="form-control" id="recipient-name" onchange="readURL(this)" accept="Image/*">
                                              </div>
                                              <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Title:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                              </div>
                                               <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Description:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                              </div>
                                               <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Cast:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                              </div>
                                               <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Duration:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                              </div>
                                               <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Year Release:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                              </div>
                                               <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Genre:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                              </div>
                                               <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Tags:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                              </div>
                                               <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Status:</label>
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
                                    <!---Delete Modal--->
                                    <button class="button" type="submit" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@mdo">Delete</button>
                                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">Are you sure you want to DELETE?</label>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                                            <button type="button" class="btn btn-primary">Cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!--view modal-->
                                    <button class="button" data-bs-toggle="modal" data-bs-target="#viewModal" data-bs-whatever="@mdo">View</button>
                                    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Movie Description</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="mb-2">
                                                <label for="recipient-name" class="col-form-label">
                                                    <h6>Title:</h6>
                                                    <h6>Video url:</h6>
                                                    <h6>Description:</h6>
                                                    <h6>Year release:</h6>
                                                    <h6>Genre:</h6>
                                                    <h6>Status:</h6>
                                                </label>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="pagination">
                        <div><button class="btn">Previous</button></div>
                        <div>1</div>
                        <div><button class="btn">Next</button></div>
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
      