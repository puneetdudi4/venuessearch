<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Hotels Venues</title>
	
	
	<!-- Font Awesome Css -->
	<link rel="stylesheet" href="{{asset('front_end/css/all.min.css') }}">
	<!-- Bootstrap version 4.4.1 -->
	<link rel="stylesheet" href="{{asset('front_end/css/bootstrap-4.4.1.min.css') }}" />
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('front_end/css/animate.css') }}">
	<!-- magnific popup versison 1.1.0 -->
	<link rel="stylesheet" href="{{asset('front_end/css/magnific-popup-1.1.0.css') }}">
	<!-- Nice Select  -->
	<link rel="stylesheet" href="{{asset('front_end/css/nice-select-1.0.css') }}">
	<!-- meanmenu version 2.0.7 -->
	<link rel="stylesheet" href="{{asset('front_end/css/meanmenu-2.0.7.min.css') }}">
	<!-- Slick Version 1.9.0 -->
	<link rel="stylesheet" href="{{asset('front_end/css/slick-1.9.0.css') }}" />
	<!-- datetimepicker -->
	<link rel="stylesheet" href="{{asset('front_end/css/bootstrap-datepicker.css') }}" />
	<!-- jQuery Ui for price range slide -->
	<link rel="stylesheet" href="{{asset('front_end/css/jquery-ui.min.css') }}">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('front_end/css/style.css?v=1') }}" />
	<!-- Responsive Css -->
	<link rel="stylesheet" href="{{asset('front_end/css/responsive.css?v=1') }}" />
	
	<style>
.web_text
	{
/*font-size: 50px;
    color: darkgoldenrod;
    margin-bottom: 10px;
    display: block;
   background: #efecec9c;
    width: 66%;
    margin-left: 15%;
    line-height: 60px;
    border-radius: 10px;
    font-weight: 600;
    text-align: center;
    font-family: initial;
    color: #6d6a6a ! important ;*/
	
	font-size: 50px;
    color: darkgoldenrod;
    margin-bottom: 10px;
    display: block;
    background: #efecec9c;
    width: 55%;
    margin-left: 22.5%;
    line-height: 60px;
    border-radius: 10px;
    font-weight: 600;
    text-align: center;
    font-family: initial;
    color: #6d6a6a ! important;
	
	}
	.header-menu-area {
    background-color: #efecec9c ! important;
}
	.header-menu-area {
    background-color: #efecec9c ! important;
}
	
	a {
    color: #888181 ! important;
	}
	.slider-text
	{
	margin-top:-10%;
	}
	.label_color
	{
	color:#e6cb69;
	}
	.color_darkgoldenrod
	{
	color: #888181 ! important;
	
	font-size: 41px;
    color: darkgoldenrod;
    font-weight: bolder;
    /*border-bottom: 2px solid goldenrod;*/
    padding-bottom: 13px;
   /* width: 50%;
	margin-left:25%; */
    font-family: Roboto Slab;
    
	
	}
	
	.product-head
 {   
   background: #efecec9c;
    padding: 10px 20px;
     color: #888181 ! important;
    font-size: 19px;
    font-weight: 800;
    border-radius: 10px 10px 0px 0px;
	}
	.white
	{
	/*color: white !important;*/
	
	color: #888181 ! important;
	font-size: 24px;
	}
	
	.nopadding {
   padding: 0px 10px !important;
   margin: 0 !important;
}
 .width_95
 {
  width:100% ! important;
 }
 
 .nice-select .option
 {
	 color: #000 !important;
 }
 
 .nav-item .dropdown-menu
 {
	 background-color:#efecec9c !important;
	 border: solid 1px #efecec9c;
 }
 
 .logo
 {
	 margin:0px;
 }
 .dropdown-item
 {
     margin-left:0px ! important;
 }
 .dropdown-item:hover
 {
 background-color:#000 !important;
 }
 
 
  .nice-select:after {
    border-bottom: 0;
    border-right: 0;
    content: '\f107';
    display: block;
    height: 0;
    margin-top: 0;
    pointer-events: none;
    position: absolute;
    right: 10px ! important;
    top: 0;
    -webkit-transform-origin: 66% 66%;
    transform-origin: 66% 66%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
    font-family: 'Font Awesome 5 Pro';
    height: 100%;
    color: #888181;
}
.search_padding
{
	padding-left:5px ! important;
	
	padding-right:5px ! important;
}

.nice-select {
    background-color: #efecec9c ! important;
    border: 1px solid #d8d4c9 ! important;
    color: #3e3737 ! important;
    font-size: 16px ! important;
}

.nice-select.open .list {
    opacity: 1;
    pointer-events: auto;
    width: 220px ! important;
    -webkit-transform: scale(1) translateY(0);
    -ms-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
}

.nice-select.open .list li.focus {
	display:none ! important;
}
	</style>
	
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- preloader -->
	<div class="loader" id="preLoader">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<!-- Header Start -->
	<header>
		<!--<div class="header-top-area section-bg">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-xl-4 col-lg-7 offset-xl-3 col-md-6">
						<ul class="top-contact-info list-inline">
							<li><i class="far fa-map-marker-alt"></i>Silver Tower, Business Bay, Dubai, UAE </li>
							<li><i class="far fa-phone"></i>+97144356739
</li>
						</ul>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-6">
					
					
						<div class="top-right text-right">
							<ul class="top-menu list-inline d-inline">
								<li><a href="#">ABOUT US</a></li>
								
								@if(Auth::guard('merchant')->user())
											<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								       Hi, Hi, {{ Auth::guard('merchant')->user()->company_name }}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								 <a href="#">Hotel Profile</a>
								 
								  <form action="{{ url('/merchant/logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link">
                                                            Logout
                                                        </button>
                                                    </form>

								</div>
							  </li>
						
								@elseif(Auth::guard('web')->user())
								
								<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								       Hi, {{ Auth::guard('web')->user()->name }}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								 <a href="{{ url('user/profile') }}">User Profile</a>
								 
								  <form action="{{ url('/user/logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link">
                                                            Logout
                                                        </button>
                                                    </form>

								</div>
							  </li>
								
								@elseif(!Auth::guard('web')->user() && @guest)
								<li><a href="{{ url('/user/login') }}">SIGN IN</a></li>
							   <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  REGISTER
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="{{ url('/customer/register') }}">Customer</a>
								  <a class="dropdown-item" href="{{ url('/hotel/register') }}">Hotel/Merchant</a>
								  <a class="dropdown-item" href="{{ url('/supplier/register') }}">Supplier</a>
								 
								</div>
							  </li>
							  
							  @endif
								
							   <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  EN
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="#">EN</a>
								  <a class="dropdown-item" href="#">AR</a>
								  <a class="dropdown-item" href="#">ES</a>
								 
								</div>
							  </li>
									
									
							</ul>
							
						</div>
				


				</div>
				</div>
			</div>
		</div>-->
		
		
		<div class="header-menu-area">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-xl-3 col-lg-3 col-md-4 col-7">
						<div class="logo">
							<a href="{{ url('/') }}"><img src="{{asset('front_end/img/logo.png')}}" style="width:50%; margin-left:20%" alt="Hotels Venues"></a>
						</div>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-8 col-5">
					
					
						
							
							<div class="menu-right-area text-right">
							
							<nav class="main-menu">
								<ul class="list-inline">
								
								<li><a href="{{ url('/aboutus') }}">ABOUT US</a></li>  
								
								@if(Auth::guard('merchant')->user())
											<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="{{ url('/merchant/hotel/add_hotel') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								        Hi, {{ Auth::guard('merchant')->user()->company_name }}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								 <a href="{{ url('/merchant/hotel/add_hotel') }}">Hotel Profile</a>
								 
								  <form action="{{ url('/merchant/logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link">
                                                            Logout
                                                        </button>
                                                    </form>

								</div>
							  </li>
						
								@elseif(Auth::guard('web')->user())
								
								<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								       Hi, {{ Auth::guard('web')->user()->name }}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								 <a href="{{ url('user/profile') }}">User Profile</a>
								 
								  <form action="{{ url('/user/logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link">
                                                            Logout
                                                        </button>
                                                    </form>

								</div>
							  </li>
								
								@elseif(!Auth::guard('web')->user() && @guest)
								<li><a href="{{ url('/user/login') }}">SIGN IN</a></li>
							   <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  REGISTER
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="{{ url('/customer/register') }}">Customer</a>
								  <a class="dropdown-item" href="{{ url('/hotel/register') }}">Hotel/Merchant</a>
								  <a class="dropdown-item" href="{{ url('/supplier/register') }}">Supplier</a>
								 
								</div>
							  </li>
							  
							  @endif
								
							   <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  AED
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="#">AED</a>
								  <a class="dropdown-item" href="#">USD</a>
								 
								 
								</div>
							  </li>
									
									
							</ul>
						</nav>	
						</div>
				

						<div class="menu-right-area text-right">
							
							<nav class="main-menu">
								<ul class="list-inline">
								
								<li class="active-page"><a href="{{ url('/') }}">Home</a></li>
								
								<li class="have-submenu "><a href="#">Supplier List</a>
								
								<ul class="submenu">
										
										<?php
							$suppliermenus = \App\SupplierType::getAllApprovedSupplierType();
							foreach($suppliermenus as $suppliermenu)
							{
							?>
								<li><a href="/getsupplierlist/{{ $suppliermenu->title }}">{{ $suppliermenu->title }} </a></li>
							<?php
                            }
                            ?>	
							</ul>
								
								</li>
								
								<li ><a href="{{ url('/hotels') }}">Hotel List</a></li>
								<?php
								
								$event_social = \App\EventType::getAllApprovedEventType_type('Social');
								$event_corporate = \App\EventType::getAllApprovedEventType_type('Corporate');
								
								
								?>
									<li class="have-submenu ">
										<a href="#">Social </a>
										
										<ul class="submenu">
										  @foreach($event_social as $i=>$value)
											<li><a href="{{ url('/eventtypes/'.$value->id) }}"> {{ $value->title }}</a></li>
                                        @endforeach
										</ul>
									</li>
									<li class="have-submenu">
										<a href="#">Corporate</a>
										<ul class="submenu">
									   @foreach($event_corporate as $i=>$value)
											<li><a href="{{ url('/eventtypes/'.$value->id) }}"> {{ $value->title }}</a></li>
                                        @endforeach
										</ul>
									</li>
									
									
									<li class="have-submenu">
										<a href="#">English</a>
										<ul class="submenu">
											<li><a href="#">Arabic</a></li>
											
										</ul>
									</li>
								
									 
						
								</ul>
							</nav>
						
							
							
						
							
							
						</div>
					</div>
					
					
				</div>
				<div class="mobilemenu"></div>
			</div>
		</div>
	</header>
	<!-- Header End -->
	<!-- Main Wrap start -->
	


