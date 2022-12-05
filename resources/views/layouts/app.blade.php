<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="public/img/logo.png" alt="" class="logo">
                </a>
                <div>
                <ul class="d-flex justify-content-between">
                    <li><a class="nav px-3" href="">О нас</a></li>
                    <li><a class="nav px-3" href="">Каталог</a></li>
                    <li><a class="nav px-3" href="">Где нас найти</a></li>
                </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
          <div class="container">
            <div class=" d-flex flex-row justify-content-between flex-wrap">
              <div class="d-flex pt-3 col-lg-3 col-sm-6 col-12 col-md-5">
                <img src="/public/img/logo.png" alt="logo" class="logo">
                <ul>
                  <li class="text fs-4">Pizza</li>
                  <li><a href="#pizza" class="text">Меню</a></li>
                  <li><a href="feedback" class="text-whi">Отзывы</a></li>
                </ul>
              </div>
              <div class="d-flex pt-3 col-lg-3 col-sm-6 col-12 col-md-5 justify-content-center align-items-center">
                <ul class="ps-0">
                  <li class="text fs-4">Контакты</li>
                  <li class="text">Наша почта: PizzaOmsk@mail.ru</li>
                  <li class="text">Наш номер: 7(950)547-65-87</li>
                </ul>
              </div>
              <div class="d-flex justify-content-center pt-3 align-items-center col-lg-3 col-sm-6 col-12 col-md-5">
                <ul class="d-flex align-items-center justify-content-center">
                  <li><a href="https://vk.com"><img src="/public/img/icons/vk1.png" alt="" width="50px" class="my-2 me-4"></a></li>
                  <li><a href="https://youtube.com"><img src="/public/img/icons/youtube.png" alt="" width="50px"></a></li>
                </ul>
                
              </div>
            </div>
            <div class="d-flex justify-content-center text-white">
              © Pizza 2022 - 2022
            </div>
          </div>
        </footer>
</body>
</html>
