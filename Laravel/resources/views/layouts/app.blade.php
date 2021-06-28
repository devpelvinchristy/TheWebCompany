<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'THE WEB COMPANY') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: rgb(159,25,50)!important;">
            <div class="container">
            <div class="col-lg-2">
                <div class="row">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff; font-size:28px; ">THE WEB COMPANY </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:#fff; ">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:#fff; ">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color:#fff;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        <li style="margin-top: 9px;"><a href="" style="color:#fff; text-decoration:none; "></a></li>
                    </ul>
                </div>
                </div> 
            </div>
            <div class="col-lg-10">
            <div class="row">
                    <div class="col-lg-4">  
                    <form class="form-horizontal" method="post" action="">
                    <div class="form-group row">
                        <div class="row" style="margin-left:500px;">
                            <h3 style="margin-bottom: -100px;">Add your Product</h3>
                            <a class="btn btn-info"  style="margin-left:220px; width:150px; margin-bottom:100px;" href="{{ route('product.index') }}">Add Your Product</a>
                            </div>
                
                    </div>
                    </form>
                    </div>
                    
                </div>
            </div>
               
                

                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<script>

$(document).ready(function(){
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "",
        method: "POST",
        data: {_token:_token},
        success: function(data){
            alert(data);
        }
    });
});
</script>