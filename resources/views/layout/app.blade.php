<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
  <title>Subscription - $title</title>
  <meta content="Login" property="og:title">
  <meta content="Login" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('/css/subscriptions.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon">
    @livewireStyles
</head>
<body>
 <nav class="navbar section-arround">
    <div data-animation="default" data-collapse="tiny" data-duration="400" data-easing="ease-out-sine" data-easing2="ease-in-sine" role="banner" class="_w-full w-nav">
      <div class="container w-container">
        <div class="nav-wrapper">
          <a data-w-id="59272fd4-568f-8073-9565-42376a623ac2" href="index.html" aria-current="page" class="brand w-nav-brand w--current"><img src="images/sheep2_black.svg" loading="lazy" alt="" class="logo"></a>
          <nav role="navigation" class="nav-links w-nav-menu">
            <a href="{{ url('/') }}" aria-current="page" class="w-nav-link w--current">Home</a>
            @auth
            <form method="POST" class="w-nav-link" action="{{ url('accounts/logout') }}">
            @csrf
            <input type="submit" value="Logout" class="w-nav-link"></input>
            </form>
            @else
            <a href="{{ url('/login') }}" class="w-nav-link">Login</a>
            @endauth
          </nav>
          <div class="mobile-menu-btn w-nav-button">
            <div class="hamburger w-embed"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
              </svg></div>
          </div>
        </div>
      </div>
    </div>
  </nav>
@yield("content")
@livewireScripts
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66a3ce2c2e50de662ec44dd6" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('/js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>
