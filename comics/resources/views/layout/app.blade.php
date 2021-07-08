<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link style.css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1d47f7a9f5.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'Laravel-comics')</title>
</head>
<body>
    <!-- Site header -->
    <header id="site_header">
        <div class="blue_bar">
            <div class="container">
                <a href="#">DC POWER™ VISA®</a>
                <a href="#">ADDITIONAL DC SITES <i class="fas fa-sort-down"></i></a>
            </div>
        </div>
        <div class="container">
            <!-- Navbar -->
            <nav>
                    <div class="logo">
                        <img src="../images/dc-logo.png" alt="">
                    </div>
                    <ul>
                        <li><a href="#">characters</a></li>
                        <li><a href="{{route('comics')}}">comics</a></li>
                        <li><a href="#">movies</a></li>
                        <li><a href="#">tv</a></li>
                        <li><a href="#">games</a></li>
                        <li><a href="#">collectibles</a></li>
                        <li><a href="#">videos</a></li>
                        <li><a href="#">fans</a></li>
                        <li><a href="#">news</a></li>
                        <li><a href="#">shop <i class="fas fa-sort-down"></i></a></li>
                    </ul>
                </nav>
            <!-- /Navbar -->
        </div>
        <div class="jumbotron">

        </div>
    </header>
    <!-- /Site header -->
    <!-- Site main -->
    <main id="site_main">
        @yield('content')
    </main>
    <!-- /Site main -->
    <!-- Site footer -->
    <footer id="site_footer">
        <div class="links">
            <div class="container">
                <div class="link_cols">
                    <div class="col">
                        <h2>DC COMICS</h2>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>

                        <h2>SHOP</h2>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h2>DC</h2>
                        <ul>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy (New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshop</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h2>SITES</h2>
                        <ul>
                            <li>
                                <a href="#">DC</a>
                                <a href="#">MAD Magazine</a>
                                <a href="#">DC Kids</a>
                                <a href="#">DC Universe</a>
                                <a href="#">DC Power Visa</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="logo_bg">
                    
                </div>
                <div class="rights">
                    <p>All site content TM and <i class="far fa-copyright"></i> 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.</p>  </span>
                    <p><a href="#">Cookies settings</a></p>
                </div>
            </div>
        </div>
        <div class="socials">
            <div class="container">
                <a href="#" class='button'>SIGN-UP NOW!</a>
                <div class="social-links">
                        <a href="#">FOLLOW US</a>
                        <a href="#"><img src="../images/footer-facebook.png" alt=""></a>
                        <a href="#"><img src="../images/footer-twitter.png" alt="" alt=""></a>
                        <a href="#"><img src="../images/footer-youtube.png" alt="" alt=""></a>
                        <a href="#"><img src="../images/footer-pinterest.png" alt="" alt=""></a>
                        <a href="#"><img src="../images/footer-periscope.png" alt="" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Site footer -->

</body>
</html>