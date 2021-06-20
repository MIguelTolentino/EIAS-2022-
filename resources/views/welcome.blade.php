@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-5">
        <div class="container">
            <div class="header-body text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">              
                        <img src="assets/img/brand/EIAS with letter.png" class="EIAS_icon" alt="">    
                        <h1 class="text-white">{{ __('Electronic Inventory and Accountability System') }}</h1>
                        <form action="">
                            <!-- Navbar items -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="btn btn-success btn-block" href="{{ route('login') }}">
                                        <i class="ni ni-key-25"></i>
                                        <span class="nav-link-inner--text">{{ __('Login') }}</span>
                                    </a>
                                </li>                              
                                <br>
                                <li class="nav-item">
                                    <a class="btn btn-danger btn-block" href="{{ route('register') }}">
                                        <i class="ni ni-circle-08"></i>
                                        <span class="nav-link-inner--text">{{ __('Register') }}</span>
                                    </a>
                                </li>
                                <br>
                                <li class="nav-item">
                                    <a class="btn btn-default btn-block" href="{{ route('home') }}">
                                        <i class="ni ni-planet"></i>
                                        <span class="nav-link-inner--text">{{ __('Guest') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
