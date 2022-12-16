@php
    require_once(app_path().'/includes/constants.php');
    require_once(app_path().'/includes/login.php');
    $dictionary = $dict[$_SESSION['language']];
@endphp
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <?php
    if ($_SESSION['theme'] == THEME::$DARK) {
        echo '<link rel="stylesheet" type="text/css" href="http://localhost:27/styles/dark-style_login.css">';
    }
    else if ($_SESSION['theme'] == THEME::$LIGHT){
        echo '<link rel="stylesheet" type="text/css" href="http://localhost:27/styles/style_login.css">';
    }
    ?>
</head>
<body>
<header class="header">
    <img src="http://localhost:27/content/logo.png" class="logo">
    <h2 class="mytitle"><a class="home" href="{{ route ('home') }}">Testing students</a></h2>
    <nav class="menu">
        <ul>
            @if (Route::has('login'))
                @auth
                    <li class = "headmenu"><a  class="menua" href="{{ route ('profile') }}"><?php echo $dictionary->PROFILE?></a></li>
                    <li class = "headmenu"><a  class="menua" href="{{ route ('tests') }}"><?php echo $dictionary->TESTS?></a></li>
                    <li class = "headmenu"><a  class="menua" href="{{ route ('logout') }}"><?php echo $dictionary->LOGOUT?></a></li>
                @else
                    <li class = "headmenu"><a  class="menua" href="{{ route ('home')}}"><?php echo $dictionary->MAIN?></a></li>
                    <li class = "headmenu"><a  class="menua" href="{{ route ('reviews') }}"><?php echo $dictionary->REVIEWS?></a></li>
                    <li class = "headmenu"><a  class="menua" href="{{ route ('about') }}"><?php echo $dictionary->ABOUTUS?></a></li>
                @endauth
            @endif
        </ul>
    </nav>
</header>
<div class="margin"></div>
    <main class="py-4">
        @yield('login')
    </main>
</body>
</html>

