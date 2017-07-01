<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cv Chubut') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Cv Chubut') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Logueate</a></li>
                            <li><a href="{{ url('/register') }}">Registrate</a></li>

                        @else
                          <!-- Authentication Role Buttons -->
                            @if (Entrust::hasRole('administrador'))
                              <li><router-link :to="{ path: '/usuarios' }" class="btn btn-info">Usuarios</router-link></li>
                              <li> <router-link :to="{ path: '/referentes' }" class="btn btn-info">Referentes</router-link></li>
                              <li><router-link :to="{ path: '/oferentes' }" class="btn btn-info">Oferentes</router-link></li>
                              <li> <router-link :to="{ path: '/estudiantes' }" class="btn btn-info">Estudiantes</router-link></li>
                              <li><router-link :to="{ path: '/actividades' }" class="btn btn-info">Actividades</router-link></li>
                              <li></li>
                            @elseif (Entrust::hasRole('secretaria'))
                              <li> <router-link :to="{ path: '/referentes' }" class="btn btn-info">Referentes</router-link></li>
                              <li><router-link :to="{ path: '/oferentes' }" class="btn btn-info">Oferentes</router-link></li>
                              <li> <router-link :to="{ path: '/estudiantes' }" class="btn btn-info">Estudiantes</router-link></li>
                              <li><router-link :to="{ path: '/actividades' }" class="btn btn-info">Actividades</router-link></li>
                              <li></li>
                            @elseif (Entrust::hasRole('estudiante'))
                              <li><router-link :to="{ path: '/actividades' }" class="btn btn-info">Actividades</router-link></li>
                              <li></li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}<ul>{{Auth::user()->roles[0]->display_name}} </u><span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Desconectarse
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')
      
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
