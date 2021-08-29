<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.8.55/css/materialdesignicons.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/buefy/dist/buefy.min.css">
</head>
<body>
    <div id="app">
        <div class="container">

            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/') }}">
                        <img src="{{asset('images/logos/imagiczen.png')}}" alt="{{ config('app.name') }}" style="width:auto;max-height:85px!important;">
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu">

                    <div class="navbar-end">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <div class="navbar-item">
                                        <div class="buttons">
                                            <a class="button is-light is-fullwidth" href="{{ route('login') }}">
                                                <strong>Iniciar Sesión</strong>
                                            </a>
                                        </div>
                                    </div>
                                @endif

                                {{-- @if (Route::has('register'))
                                    <div class="navbar-item">
                                        <div class="buttons">
                                            <a class="button is-primary "  href="{{ route('register') }}">
                                                Registrate
                                            </a>
                                        </div>
                                    </div>
                                @endif --}}
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">

                                    <a class="navbar-link">
                                        Cuenta
                                    </a>


                                    <div class="navbar-dropdown">

                                        <a  class="navbar-item">
                                            {{ Auth::user()->name }}
                                        </a>

                                        <hr class="navbar-divider">

                                        <a class="navbar-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <a class="navbar-item">
                                            Proximamente..
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                </div>
                            @endguest

                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach( el => {
                    el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                    });
                });
            }

        });
    </script>
</body>
</html>
