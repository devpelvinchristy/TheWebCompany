<!DOCTYPE html>
<html>
<head>
<title>The Web Company</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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
                        <div class="col-8"> 
                        <input type="text" name="searchproduct" class="form-control" placeholder="Enter Product" style="margin-left: 110px;">
                        </div>
                        <div class="col-4"> 
                        <button type="submit" name="" class="btn btn-primary" style="margin-left: 120px;">Search</button> 
                        </div> 
                
                
                    </div>
                    </form>
                    </div>
                    
                </div>
            </div>
               
                

                
            </div>
        </nav>
<div class="container">

@yield('content')
</div>
</body>
</html>