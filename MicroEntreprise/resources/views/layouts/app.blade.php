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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('organisation.index') }}">organisations</a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mission.index') }}">missions</a>
                        </li>
                </ul>
            </div>
    </div>
    <span class="navbar-text">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded-circle img img-fluid"
                      alt="{{ $user->name }}" width="60px" height="60px"
                      src="{{ $user->avatar }}" data-holder-rendered="true">
              </a>
              <div>{{ $user->name }}</div>
              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href=""><i class="fas fa-user"></i> Mon
                      profil</a>
                  <a class="dropdown-item text-danger" href=""><i
                          class="fas fa-power-off"></i> Déconnexion</a>
              </div>
          </li>
      </ul>
  </span>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
