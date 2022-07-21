<!DOCTYPE html>
<html>
    <head>
        <script src="https://kit.fontawesome.com/b8b94f6dc2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{URL::asset('css/Video Player/header.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Video Player/player.css')}}">
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
                    <i class="fa-solid fa-sort-down"></i>
                    <img src="{{URL::asset('pic/papa eugene.jpg')}}" alt="profile">
                </div>
            </div>
        </div>
    <!----Body---->
        <div class="video-player-container">
            <div class="video-player">
                <video-js id="my-video" class="vjs-default-skin vjs-big-play-centered" controls preload="auto" muted data-setup="{}">
                <source src="{{URL::asset('vid/Nayeon POP.mp4')}}" type="video/mp4" />
                </video-js>
            </div>
        </div>
        <div class="video-details">
            <div class="video-details-wrapper">
                <h3>Nayeon - "POP" M/V</h3>
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