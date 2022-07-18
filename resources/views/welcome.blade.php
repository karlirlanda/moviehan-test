<!DOCTYPE html>
<html>
    <!-- <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&family=Roboto:wght@900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('/css/Landingpage.css')}}">
    </head>
    <body>
        <div class="main-body">
            <div class="main-body-wrapper">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}"><img class="logo" src="{{URL::asset('/pic/last logo.png')}}"></a>
                </div>
                <div class="sign-in-wrapper">
                    <a href="{{route('login')}}"><input class="submit" type="submit" value="Login"></a>
                </div>
                <div class="text-wrapper">
                    <p class="text"><b>Get your popcorn and watch unlimited movie and more.</b></p>
                    <p class="text2">Watch anywhere you are. We got you !</p>
                    <p class="text2">Ready to watch? Sign up now! Click<a href="{{route('register')}}"><b>HERE</b></a></p>
                </div>
                <div class="bottom-text-wrapper">
                    <div class="bottom-text">
                        <p>Enjoy on your TV.</p><a>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blue-ray players, and more.</a>
                    </div>
                    <div class="bottom-video">
                        <div class="video-loop">
                            <video src="{{URL::asset('/vid/iPhone.mp4')}}" autoplay muted loop></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body> -->
    <head>
  <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
</head>

<body>
  <video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="1280"
    height="720"
    data-setup="{}">
    <source src="https://movie-han-movies.s3.ap-northeast-1.amazonaws.com/WWY-Quality/WWY1080.mp4" type="video/mp4" />
    <source src="https://movie-han-movies.s3.ap-northeast-1.amazonaws.com/WWY-Quality/WWY1080.mp4" type="video/webm" />
  </video>
</body>
</html>