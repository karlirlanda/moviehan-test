<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b8b94f6dc2.js" crossorigin="anonymous"></script>
        <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{URL::asset('css/Homepage/header.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Homepage/genre nav.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Homepage/livestream.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Homepage/body.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Homepage/bottom.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Homepage/media queries/homepage media querie.css')}}">
        <title>Hans Movie - Watch TV Shows Online, Watch Movies Online</title>
         <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </head>
    <body>
    <!---Header Content--->
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
    <div class="container">
        <div class="genre-section">
            <div class="genre-section-wrapper">
                <button>Action</button>
                <button>Adventure</button>
                <button>Animated</button>
                <button>Biography</button>
                <button>Comedy</button>
                <button>Crime</button>
                <button>Documentary</button>
                <button>Drama</button>
                <button>Family</button>
                <button>Fantasy</button>
                <button>Film-Noir</button>
                <button>Game Show</button>
                <button>History</button>
                <button>Hollywood</button>
                <button>Horror</button>
                <button>Musical</button>
                <button>Mystery</button>
                <button>News</button>
                <button>Romance</button>
                <button>Sci-Fi</button>
                <button>Sport</button>
                <button>Thriller</button>
                <button>War</button>
                <button>Slice of Life</button>
                <button>Real Life</button>
            </div>
        </div>
            <!---Livestream Section--->
        <div class="livestream-container">
            <video class="bg-video" autoplay muted loop>
                <source src="{{URL::asset('vid/Demon Slayer Trailer.mp4')}}" type="video/mp4">
            </video>
            <div class="livestream-wrapper">
                <div class="livestream-content">
                    <div class="trends">
                       <img class="trend-img" src="{{URL::asset('pic/Homepage/kimetsu no yaiba.png')}}" alt="kimetsu">
                    </div>
                    <div class="livestream-grid">
                        <div class="livestreams">
                            <video-js id="example-video" class="vjs-default-skin" controls preload="auto" autoplay muted disablePictureInPicture data-setup="{}">
                            <source src="http://alpharlive.mmdlive.lldns.net/alpharlive/da0d6106b029413eb79b191898108361/manifest.m3u8?p=36&h=eb52a55d9ee444e619f89c831ece44a9" type="video/x-mpegURL" />
                            </video-js>
                            <br>
                            <p>Livestream One</p>
                        </div>
                        <div class="livestreams">
                            <video-js id="example-video" class="vjs-default-skin" controls preload="auto" autoplay muted disablePictureInPicture data-setup="{}">
                            <source src="http://alpharlive.mmdlive.lldns.net/alpharlive/55bbc1d8a2a64f6f89a7921fc23704a2/manifest.m3u8?p=36&h=c68a6b9a919ee84911ffad55c54458ff" type="video/x-mpegURL" />
                            </video-js>
                            <br>
                            <p>Livestream Two</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!---Body/Thumbnails Section--->
        <div class="body-container">
            <div class="body-wrapper">
                <div class="text-wrapper">
                    <p>Recommended</p>
                </div>
                <div class="body-content">
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/1st/weathering with you.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/1st/a silent voice.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/1st/saekano.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/1st/your name.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/1st/konosuba.png')}}"></a>
                </div>
                <div class="text-wrapper">
                    <p>Action</p>
                </div>
                <div class="body-content">
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/2nd/a day to die.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/2nd/ash and dust.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/2nd/avengers.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/2nd/beast.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/2nd/best years gone.png')}}"></a>
                </div>
                <div class="text-wrapper">
                    <p>Adventure</p>
                </div>
                <div class="body-content">
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/3rd/blowback.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/3rd/bridges.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/3rd/cyber hell.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/3rd/doctor strange.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/3rd/dr dolittle 3.png')}}"></a>
                </div>
                <div class="text-wrapper">
                    <p>Sci-Fi</p>
                </div>
                <div class="body-content">
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/4th/ghost in shell.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/4th/gianluca vacchi mucho mas.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/4th/girl in the picture.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/4th/in search of tomorrow.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/4th/instant karma.png')}}"></a>
                </div>
                <div class="text-wrapper">
                    <p>Sport</p>
                </div>
                <div class="body-content">
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/5th/spider head.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/5th/spider man.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/5th/the batman.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/5th/the last warrior.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/5th/the perfect game.png')}}"></a>
                </div>
                <div class="text-wrapper">
                    <p>Fantasy</p>
                </div>
                <div class="body-content">
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/6th/garcia y garcia.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/6th/mako.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/6th/pinocchio.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/6th/the tale of the king crab.png')}}"></a>
                    <a href="{{route('video-player')}}"><img src="{{URL::asset('pic/Homepage/thumbnails/6th/veneciafrenia.png')}}"></a>
                </div>
            </div>
        </div>
    </div>
        <!---Footer Section--->
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
    var player = videojs('example-video', options);
    player.httpSourceSelector();
  </script>
</html>