<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
     <style>
    body {
          background-image: url({{asset ('ion.png') }});
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;

         }
    </style>
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
                     <img src="/img/ion.png" width="50dp" height="50dp"  > 
                    
                    <a class="navbar-brand" href="{{ url('/') }}">
                       {{ config('app.name', 'Laravel') }}
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    @if (Auth::check())
                           <th><li><a href="{{url('/home')}}">Home</a></li></th> 
                           @endif 

                           @role('admin')    
                           <th><li><a href="{{route('kamera.index')}}">Kamera</a></li></th> 
                           <th><li><a href="{{route('sewa.index')}}">Detail Sewa</a></li></th> 
                           <th><li><a href="{{route('kembali.index')}}">Pengembalian</a></li></th>
                           <th><li><a href="{{route('user.index')}}">Karyawan</a></li></th>   
                        @endrole

                         @role('member')    
                           <th><li><a href="{{route('kamera.index')}}">Kamera</a></li></th> 
                           <th><li><a href="{{route('sewa.index')}}">Detail Sewa</a></li></th> 
                           <th><li><a href="{{route('kembali.index')}}">Pengembalian</a></li></th>  
                        @endrole
                    </ul>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                              <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

     <footer class="row">
        @include('layouts.footer')
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>

    @yield('scripts')
</body>
</html>