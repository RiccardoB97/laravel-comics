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
        footer
    </footer>
    <!-- /Site footer -->

</body>
</html>