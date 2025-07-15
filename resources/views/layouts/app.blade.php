<!-- views.layouts.app.blade.php -->

<!doctype html>

<html lang="en">
	
<!-- Mirrored from shreethemes.net/jobstock-landing-2.2/jobstock/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2024 09:40:57 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>@yield('title', 'Shop 241')</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('shop/assets/img/favicon.png') }}">
    	<link href="{{ asset('shop/assets/css/styles.css') }}" rel="stylesheet">
    	<link href="{{ asset('shop/assets/css/colors.css') }}" rel="stylesheet">
		
    </head>
	
    <body class="green-theme">
		@include('partials.nav')
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
             @yield('content')			
			
			 @yield('contentQ')	
	
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		
		<!-- Color Switcher -->
		<div class="style-switcher">
			<div class="css-trigger shadow"><a href="#"><i class="fa-solid fa-paintbrush"></i></a></div>
			<div>
				<ul id="themecolors" class="m-t-20">
					<li><a href="javascript:void(0)" data-skin="green-theme" class="green-theme">1</a></li>
					<li><a href="javascript:void(0)" data-skin="red-theme" class="red-theme">2</a></li>
					<li><a href="javascript:void(0)" data-skin="blue-theme" class="blue-theme">3</a></li>
					<li><a href="javascript:void(0)" data-skin="yellow-theme" class="yellow-theme">4</a></li>
					<li><a href="javascript:void(0)" data-skin="purple-theme" class="purple-theme">5</a></li>
					<li><a href="javascript:void(0)" data-skin="orange-theme" class="orange-theme">6</a></li>
					<li><a href="javascript:void(0)" data-skin="brown-theme" class="brown-theme">7</a></li>
					<li><a href="javascript:void(0)" data-skin="cadmium-theme" class="cadmium-theme">8</a></li>			
				</ul>
			</div>
		</div>

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{URL::to('shop/assets/js/jquery.min.js')}}"></script>
		<script src="{{URL::to('shop/assets/js/popper.min.js')}}"></script>
		<script src="{{URL::to('shop/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{URL::to('shop/assets/js/rangeslider.js')}}"></script>
		<script src="{{URL::to('shop/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{URL::to('shop/assets/js/slick.js') }}"></script>
		<script src="{{URL::to('shop/assets/js/counterup.min.js') }}"></script>
		
		 
		<script src="{{URL::to('shop/assets/js/custom.js') }}"></script>
		<script src="{{URL::to('shop/assets/js/cl-switch.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>

<!-- Mirrored from shreethemes.net/jobstock-landing-2.2/jobstock/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2024 09:43:53 GMT -->
</html>
