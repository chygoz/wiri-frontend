

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/
      apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favico
      n/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favi
      con/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Youtube iframe embed &amp; API control </title>
  
  
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
  
<style>
.vcenter {
  align-items: center;
  align-items: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  justify-content: center;
  justify-content: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  display: flex;
  display: -webkit-flex;
  -webkit-display: flex;
  -moz-display: flex;
  -ms-display: flex;
  height: 600px;
}

section.video-promo-hero {
  position: relative;
  height: 600px;
  background: #000;
  overflow: hidden;
}
section.video-promo-hero.playing-video .video-promo-hero-bg {
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -o-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
}
section.video-promo-hero .video-promo-hero-bg {
  background: url("http://joekang.co/assets/image-hosting/hero-video-poster.jpg") no-repeat 50% 100%;
  background-size: cover;
  height: 100%;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  position: relative;
  z-index: 10;
}
section.video-promo-hero .video-promo-hero-bg a.video-promo-watch {
  display: flex;
  display: -webkit-flex;
  -webkit-display: flex;
  -moz-display: flex;
  -ms-display: flex;
  align-items: center;
  align-items: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  font-size: 45px;
  color: #ffffff;
  text-transform: uppercase;
  text-align: center;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
section.video-promo-hero .video-promo-hero-bg a.video-promo-watch i {
  -webkit-transform: rotate(0deg) scale(1);
  -moz-transform: rotate(0deg) scale(1);
  -ms-transform: rotate(0deg) scale(1);
  transform: rotate(0deg) scale(1);
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  transition: all 0.5s;
}
section.video-promo-hero .video-promo-hero-bg a.video-promo-watch:hover {
  text-decoration: none;
  font-size: 48px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
section.video-promo-hero .video-promo-hero-bg a.video-promo-watch:hover i {
  -webkit-transform: rotate(120deg) scale(1);
  -moz-transform: rotate(120deg) scale(1);
  -ms-transform: rotate(120deg) scale(1);
  transform: rotate(120deg) scale(1);
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  transition: all 0.5s;
}
section.video-promo-hero .video-promo-video-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
section.video-promo-hero .video-promo-video-wrapper a.video-promo-video-close {
  color: #ffffff;
  z-index: 20000;
  position: absolute;
  top: 10px;
  left: 30px;
  font-size: 4rem;
  opacity: 1;
  font-weight: lighter;
  line-height: 50px;
  margin: 0;
  padding: 0;
}
section.video-promo-hero .video-promo-video-wrapper a.video-promo-video-close:hover {
  color: #ffffff;
}
section.video-promo-hero .video-promo-video-wrapper .video-promo-youtube-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
section.video-promo-hero .video-promo-video-wrapper .video-promo-youtube-wrapper .video-container {
  width: 100%;
  height: 100%;
  text-align: center;
}
section.video-promo-hero .video-promo-video-wrapper .video-promo-youtube-wrapper .video-container #youtube-promo-video {
  width: 100%;
  height: 100%;
}
section.video-promo-hero .video-promo-play-button {
  font-size: 80px;
  margin-right: 26px;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <html>
  <body>
    <section class="video-promo-hero">
      <div class="video-promo-hero-bg">
        <div class="row vcenter">
          <div class="col-md-12 vcenter"><a class="video-promo-watch" id="play-button" href="#"><i class="fa fa-play-circle video-promo-play-button"></i>Watch The Promo Video</a></div>
        </div>
      </div>
      <div class="video-promo-video-wrapper"><a class="close video-promo-video-close" id="pause-button" href="#">x</a>
        <div class="video-promo-youtube-wrapper">
          <div class="video-container">
            <iframe id="youtube-promo-video" src="https://www.youtube.com/embed/khoxFt3MERI?enablejsapi=1&amp;html5=1" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
    <script src="https://cpwebassets.codepen.io/assets/co
    mmon/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script id="rendered-js" >
var youtubePlayer;
function onYouTubeIframeAPIReady() {
  youtubePlayer = new YT.Player('youtube-promo-video');
}

$.getScript("https://www.youtube.com/player_api");

$(".video-promo-watch").on("click", function (e) {
  e.preventDefault();
  $(".video-promo-hero").addClass("playing-video");
  setTimeout(function () {
    youtubePlayer.playVideo();
  }, 900);
});

$(".video-promo-video-close").on("click", function (e) {
  e.preventDefault();
  $(".video-promo-hero").removeClass("playing-video");
  youtubePlayer.pauseVideo();
});
//# sourceURL=pen.js
    </script>

  

</body>

</html>
 
