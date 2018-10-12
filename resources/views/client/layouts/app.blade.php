<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="icon" href="{{ asset('client/images/icon.png') }}">
	<link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('client/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/payment.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="header-left col-md-6 col-sm-12">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('client/images/icon.png') }}" alt="">
                    <h1>Coffee Shop</h1>
                </a>
			</div>
			<div class="header-right col-md-6 col-sm-12">
			  	<ul class="nav navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart') }}">{{ __('Cart') }} <span class="glyphicon glyphicon-shopping-cart"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                    	<li class="nav-item">
                            <a class="nav-link" href="{{ route('cart') }}">{{ __('Cart') }} <span class="glyphicon glyphicon-shopping-cart"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            	<a class="dropdown-item" href="{{ route('editPass') }}">
		                            {{ __('Change password') }}
		                        </a>
                                <br>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
			</div>
		</div>
		@yield('content')	
		<div class="footer">
			<h4>Thanks for visiting Coffee Shop!</h4>
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('client/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
</body>
</html>
