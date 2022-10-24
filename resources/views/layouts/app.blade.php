<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title>Maritirukan</title>
	<link href="{{ asset('assets/css/jquery.bxslider.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link href="{{ asset('assets/css/magnific-popup.min.css') }}" rel="stylesheet" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <style>
        /* .widget-boxes .about, .widget-boxes .experience, .widget-boxes .fun{
            background: none;
        }
        .widget-boxes .box-info {
            padding: 0 0 0;
        } */
        .widget-boxes .box{
            display: inline-flex;
        }
        .about h2 {
            font-family: 'Gochi Hand', cursive;
            font-size: 36px;
        }
        .about h3 {
            font-family: 'Gochi Hand', cursive;
            font-size: 27px;
            font-weight: bold;
            /* text-align: left; */
            line-height: 2;
        }
        a.news-img {
            width: 370px;
            height: 166px;
        }

        .news .box a {
            display: block;
            position: relative;
            overflow: hidden;
        }
        .news .box {
            padding: 30px 0.8%;
        }

        .widget-boxes .box {
            display: inline-block;
            width: 370px;
            overflow: hidden;
            padding: 30px 1%;
        }

        .news .box .news-img img {
            width: 100%;
            height: auto;
        }

        img {
            vertical-align: middle;
        }
        .news .box .mask {
            width: 370px;
            height: 166px;
            position: absolute;
            top: 0;
            left: 0;
            /* background: url(../images/bg_news-mask.png) no-repeat; */
        }
        .box-info{
            text-align: center;
        }
        .widget-boxes .box-info p {
            text-align: center;
        }
        .promo {
            position: relative;
            padding: 25px 10px;
        }

        @media only screen and (max-width: 480px)
        {
            .promo {
                display: none;
            }
        }

        @media only screen and (max-width: 900px)
        {
            .promo {
                display: none;
            }
        }

        .widget-boxes .about, .widget-boxes .experience, .widget-boxes .fun{
        background: none;
        }
        .widget-boxes .box-info {
            padding: 0 0 0;
        }
        .widget-boxes .box{
            display: inline-flex;
        }
        .about h2 {
            font-family: 'Gochi Hand', cursive;
            font-size: 36px;
        }
        .about h3 {
            font-family: 'Gochi Hand', cursive;
            font-size: 27px;
            font-weight: bold;
            text-align: left;
            line-height: 2;
        }
    </style>
@yield('css')

</head>
<body>

    <div id="wrapper" class="homepage">
		<div class="wrapper-holder">
			<header id="header">
				<div class="left-part"></div>
				<a id="logo" href="index.html"></a>
				<div class="bar-holder">
					<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a class="{{ Route::currentRouteNamed('home') ? 'active' : '' }}" href="{{route('home')}}">Beranda</a></li>
							<li><a class="{{ Route::currentRouteNamed('howto') ? 'active' : '' }}" href="{{route('howto')}}">Petunjuk Penggunaan</a></li>
							<li><a class="{{ Route::currentRouteNamed('gallery') ? 'active' : '' }}" href="{{route('gallery')}}">Photo</a></li>
							<li><a class="{{ Route::currentRouteNamed('download') ? 'active' : '' }}" href="{{route('download')}}">Download Aplikasi</a></li>
							<li><a class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="{{route('about')}}">Profile</a></li>
						</ul>
					</nav>
				</div>
			</header>
			
			<div class="dvdr"></div>

            @yield('content')
			
		</div>
		<div class="top-blue-border"></div>

        @include("layouts.footer")

			
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.placeholder.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    @yield('js')

</body>
</html>