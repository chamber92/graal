<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'Laravel') }}</title>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}?version={{ config('app.version') }}"></script>
    @stack('scripts')

    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?version={{ config('app.version') }}">
</head>
<body class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-lg navbar-light flex-shrink-0">
        <div class="container">
            <a href="{{ route('welcome') }}" class="navbar-brand">
                <i class="fab fa-laravel text-primary"></i> {{ config('app.name', 'Laravel') }}
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav-dropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar-nav-dropdown" class="collapse navbar-collapse">
                @guest
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        @if(Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    </ul>
                @else
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        {{--crud command hook--}}
                        <li class="nav-item">
                            <a href="{{ route('import-fives') }}" class="nav-link">Import Fives</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('graal-ways') }}" class="nav-link">Graal Ways</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cross-ways') }}" class="nav-link">Cross Ways</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fps-products') }}" class="nav-link">Fps Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('xyg-products') }}" class="nav-link">Xyg Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users') }}" class="nav-link">Users</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#profile-modal">
                                    Profile
                                </button>
                                @livewire('auth.logout')
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    <main class="container flex-shrink-0 py-4">
        {{ $slot }}
    </main>

    @auth
        @livewire('auth.profile')
    @endauth

    <footer class="mt-auto py-3">
        <div class="container">
            <div class="row small text-muted">
                <div class="col">
                    &copy;{{ date('Y') }} <a href="{{ route('welcome') }}" class="text-reset">{{ config('app.name') }}</a>
                </div>
                <div class="col-auto">
                    <ul class="list-inline mb-0">
                        @guest
                            <li class="list-inline-item">
                                <a href="{{ route('login') }}" class="text-reset">Login</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="list-inline-item">
                                    <a href="{{ route('register') }}" class="text-reset">Register</a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
