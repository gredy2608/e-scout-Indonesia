<!DOCTYPE html>
<html lang="en">	

	<title>E-Scout</title>
	
	<head>
		<!-- meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
		<!-- style -->			
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />		 	
		<link href="{{ asset('assets/css/brauch_style.css') }}" rel="stylesheet" />		
		<link href="{{ asset('assets/css/simple-sidebar.css') }}" rel="stylesheet" />
		<!-- style for calendar-->
		<link href="{{ asset('assets/css/fullcalendar.css')}}" rel="stylesheet" />
		<!-- normalize -->
		<link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" />

		<!-- javascript -->				
		<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/lib/bootstrap-material-design/dist/js/material.min.js') }}"></script>	
		<script src="{{ asset('assets/lib/bootstrap-material-design/dist/js/ripples.min.js') }}"></script>	
		<!-- javascript for calendar -->	
		<script src="{{-- asset('assets/lib/jquery.min.js') --}}" ></script> <!-- bagian yg ini error, tapi ga kepake juga -->
		<script src="{{ asset('assets/lib/moment.min.js') }}" ></script>
		<script src="{{ asset('assets/js/fullcalendar.js') }}" ></script>
		
		<!-- loader -->
		<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet">		
	</head>
	
	<body>	
		<!-- loader -->
		<div class="f_loader_container hidden">
			<div class="s_tbl">
				<div class="s_cell">
					<div class="spinner">
						<div class="rect1"></div>
						<div class="rect2"></div>
						<div class="rect3"></div>
						<div class="rect4"></div>
						<div class="rect5"></div>
					</div>
				</div>
			</div>
		</div>
				
		<div class="container">				
			@yield('content')
			<!-- <img src="{{-- asset('assets/img/ykk_logo.jpg') --}}" alt="(logo)" class="img-responsive pull-right" style="margin-top:20px;" /> -->
		</div>		
		
		<div class="container">
			<!-- footer -->
			<section id="footer" class="row" style="margin-top:40px;text-align:center;">
				<h4>&copy; Schronic 2015</h4>
			</section>
		</div>

	</body>

</html>	