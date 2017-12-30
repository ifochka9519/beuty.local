
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ДобраГора</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ДобраГора - прикраси ручної роботи" />
    <meta name="keywords" content="smartda, добрагора, прикраси, україна, ручна робота, буковина" />
    <meta name="author" content="smartda.inf.ua" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Salvattore -->
    <link rel="stylesheet" href="css/salvattore.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-offcanvass">
    <a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Меню <i class="icon-cross"></i> </a>
    <h1 class="fh5co-logo"><a class="navbar-brand" href="{{route('index')}}">ДобраГора</a></h1>
    <ul>
        <li class="active"><a href="{{route('index')}}">Головна</a></li>
        {{--<li><a href="{{route('about')}}">Про майстра</a></li>--}}
        <li><a href="{{route('necklace')}}">Намисто</a></li>
        <li><a href="{{route('earrings')}}">Сережки</a></li>
        <li><a href="{{route('bracelets')}}">Браслет</a></li>
        <li><a href="{{route('pricing')}}">Набори</a></li>
        <li><a href="{{route('contact')}}">Контакти</a></li>
    </ul>
   {{-- <h3 class="fh5co-lead">Соціальні мережі</h3>
    <p class="fh5co-social-icons">
        <a href="#"><i class="icon-twitter"></i></a>
        <a href="#"><i class="icon-facebook"></i></a>
        <a href="#"><i class="icon-instagram"></i></a>
        <a href="#"><i class="icon-dribbble"></i></a>
        <a href="#"><i class="icon-youtube"></i></a>
    </p>--}}
</div>

<header id="fh5co-header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Меню <i class="icon-menu"></i></a>
                <div class="navbar-brand" ><a href="{{route('index')}}"><img src="images/logo2.png" alt=""></a></div>
            </div>
        </div>
    </div>
</header>

@yield('content')



<footer id="fh5co-footer">

    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                {{--<p class="fh5co-social-icons">
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                    <a href="#"><i class="icon-dribbble"></i></a>
                    <a href="#"><i class="icon-youtube"></i></a>
                </p>--}}
                <p><small>&copy; SMART. Digital Age. All Rights Reserved. <br>Designed by: <a href="http://smartda.inf.ua/" target="_blank">SMARTDA.inf.ua</a> </small></p>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Salvattore -->
<script src="js/salvattore.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>




</body>
</html>
