<!DOCTYPE html>
<html>
    <head>
        <script src="https://kit.fontawesome.com/b8b94f6dc2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{URL::asset('css/Video Player/header.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Video Player/player.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Homepage/header.css')}}">
        <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
        <title>Hans Movie</title>
    </head>
    <body>
    <!----Header---->
        <div class="header-container">
            <div class="header-wrapper">
                <div class="header-logo-wrapper">
                    <a href="{{route('dashboard')}}"><img src="{{URL::asset('pic/Homepage/last logo.png')}}" alt="Hans Logo"></a>
                </div>
                <div class="header-search-wrapper">
                    <input type="search" name="search" placeholder="Search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="header-profile-wrapper">
                <i class="fa-solid fa-bell"></i>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                    <div class="dropdown-content" aria-labelledby="dropdownMenuButton1" style="padding-bottom: 10px;">
                        <div class="desc"><a href="{{route('dashboard')}}">Dashboard</a></div>
                        <div class="desc"><a href="{{route('user-settings')}}">Settings</a></div>
                        <div class="desc">
                        <form class="desc-form"style="color: white;" action="{{route('logout')}}" method="POST">
                            @csrf
                            <button style="font-size: 18px; margin-left: 5%; background-color: transparent; border: none; cursor:pointer;" >
                                Logout
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!----Body---->
        <div class="video-player-container">
            <div class="video-player">
                <video-js id="my-video" class="vjs-default-skin vjs-big-play-centered" controls preload="auto" muted data-setup="{}">
                <source src="https://movie-han-movies.s3.ap-northeast-1.amazonaws.com/movies/Konosuba/Konosuba.m3u8" type="video/x-mpegURL" />
                </video-js>
            </div>
        </div>
        <div class="video-details">
            <div class="video-details-wrapper">
                <div class="title-like">
                    <h3>Nayeon - "POP" M/V</h3>
                    <div class="like-container">
                       <button><i class="fa-solid fa-heart"></i></button>
                    </div>
                </div>
                <h4>Twice</h4>
                <h5>Genre: Pop, Music & Colorful</h5>
                <h5>Released: June 24, 2022</h5>
                <p>Plot summary:</p>
                <h5>Nayeon is member of Kpop Girl group named Twice, she is the oldest and have a nickname called "Fake Maknae" in Twice that have 9 members. She is the first member to launch/produce the first album for Twice.</h5>
            </div>
        </div>
    </body>
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/videojs-contrib-quality-levels@2.1.0/dist/videojs-contrib-quality-levels.js"></script>
    <script src="https://unpkg.com/videojs-http-source-selector/dist/videojs-http-source-selector.js"></script>
    <script type="text/javascript">
  	      var options = {
      plugins: {
        httpSourceSelector:
        {
          default: 'auto'
        }
      }
    };
    var player = videojs('my-video', options);
    player.httpSourceSelector();
        var options = {
      plugins: {
        httpSourceSelector:
        {
          default: 'auto'
        }
      }
    };
    var player = videojs('example-video', options);
    player.httpSourceSelector();
  </script>
</html>