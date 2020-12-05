<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <title>
        {{getSetting()->site_name}} |
        @yield('title')
    </title>
        <script src="{{ asset('js/app.js') }}" defer></script>


    {!!Html::style('/designe/user/css/bootstrap.min.css')!!}
    {!!Html::style('/designe/user/css/owl.carousel.min.css')!!}
    {!!Html::style('/designe/user/css/magnific-popup.css')!!}
    {!!Html::style('/designe/user/css/font-awesome.min.css')!!}
    {!!Html::style('/designe/user/css/themify-icons.css')!!}
    {!!Html::style('/designe/user/css/nice-select.css')!!}
    {!!Html::style('/designe/user/css/flaticon.css')!!}
    {!!Html::style('/designe/user/css/gijgo.css')!!}
    {!!Html::style('/designe/user/css/animate.css')!!}
    {!!Html::style('/designe/user/css/slick.css')!!}
    {!!Html::style('/designe/user/css/slicknav.css')!!}
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    {!!Html::style('/designe/user/css/style.css')!!}
@yield('header')
    <!-- Styles -->
</head>

<body>
 <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{url('home')}}">
                                        <img src="{{asset('/images/'.getsetting()->logo)}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{url('home')}}">ACCUEILL</a></li>
                                            <li><a href="{{url('about')}}">A PROPOS</a></li>
                                            <li><a class="" href="{{url('all-endroits')}}">ENDROITS</a></l/li>
                                            <li><a href="{{url('contact')}}">CONTCT</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li style="margin-right: 0px;padding-right: 0px"><a href="#"> <i class="fa fa-facebook"></i> </a></li>

                                                 @guest
                            <li class="nav-item"  style="margin-right: 0px;padding-right: 0px">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item"  style="margin-right: 0px">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button">
                                     <span class=""><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         {{ Auth::user()->name }}<i class="fa fa-sign-out" aria-hidden="true"></i></a></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

@include('admin.layouts.flash_msg') 


@yield('content')

 <footer class="footer">
        <div class="footer_top" style="margin-bottom: 0px;padding-bottom: 0px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <p>{{getsetting()->slegon}} <br>
                                
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-xl-5 col-md-6 col-lg-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                               Contactez-nous
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">+213{{getsetting()->site_phone}}</a>
                                </li>
                                <li><a href="#">{{getsetting()->site_email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Social Media
                            </h3>
                            <div class="instagram_feed">
                               <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text" style="margin-top: 0px">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droits résérver 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {!!Html::script('/designe/user/js/vendor/modernizr-3.5.0.min.js')!!}
    {!!Html::script('/designe/user/js/vendor/jquery-1.12.4.min.js')!!}
    {!!Html::script('/designe/user/js/popper.min.js"')!!}
    {!!Html::script('/designe/user/js/bootstrap.min.js')!!}
    {!!Html::script('/designe/user/js/owl.carousel.min.js')!!}
    {!!Html::script('/designe/user/js/isotope.pkgd.min.js')!!}
    {!!Html::script('/designe/user/js/ajax-form.js')!!}
    {!!Html::script('/designe/user/js/waypoints.min.js')!!}
    {!!Html::script('/designe/user/js/jquery.counterup.min.js')!!}
    {!!Html::script('/designe/user/js/imagesloaded.pkgd.min.js')!!}
    {!!Html::script('/designe/user/js/scrollIt.js')!!}
    {!!Html::script('/designe/user/js/jquery.scrollUp.min.js')!!}
    {!!Html::script('/designe/user/js/wow.min.js')!!}
    {!!Html::script('/designe/user/js/nice-select.min.js')!!}
    {!!Html::script('/designe/user/js/jquery.slicknav.min.js')!!}
    {!!Html::script('/designe/user/js/jquery.magnific-popup.min.js"')!!}
    {!!Html::script('/designe/user/js/plugins.js')!!}
    {!!Html::script('/designe/user/js/gijgo.min.js')!!}
    {!!Html::script('/designe/user/js/slick.min.js')!!}
    {!!Html::script('/designe/user/js/contact.js')!!}
    {!!Html::script('/designe/user/js/jquery.ajaxchimp.min.js')!!}
    {!!Html::script('/designe/user/js/jquery.form.js')!!}
    {!!Html::script('/designe/user/js/jquery.validate.min.js')!!}
    {!!Html::script('/designe/user/js/mail-script.js')!!}
    {!!Html::script('/designe/user/js/main.js')!!}

     <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
@yield('footer')
</body>
</html>







