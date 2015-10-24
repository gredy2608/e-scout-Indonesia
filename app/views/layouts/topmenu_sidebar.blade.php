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
		<!-- style for datepicker -->		
		<link href="{{ asset('assets/js/datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet" />
		<!-- style for colorpicker -->
		<link href="{{ asset('assets/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />
		<!-- normalize -->
		<link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" />

		<!-- javascript -->				
		<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/lib/bootstrap-material-design/dist/js/material.min.js') }}"></script>	
		<script src="{{ asset('assets/lib/bootstrap-material-design/dist/js/ripples.min.js') }}"></script>	
		<!-- javascript for tinymce -->
		<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>
		<!-- javascript for calendar -->	
		<script src="{{-- asset('assets/lib/jquery.min.js') --}}" ></script> <!-- bagian yg ini error, tapi ga kepake juga -->
		<script src="{{ asset('assets/lib/moment.min.js') }}" ></script>
		<script src="{{ asset('assets/js/fullcalendar.js') }}" ></script>
		<!-- javascript for datepicker -->
		<script src="{{ asset('assets/js/datetimepicker/jquery.datetimepicker.js') }}"></script>
		<!-- javascript colorpicker -->
		<script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>		
		
		<!-- loader -->
		<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" />		
		<script type="text/javascript">
		$(document).on('ready', function(){
			$.material.init();
		});
		</script>	
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
			
		<nav class="navbar navbar-default navbar-fixed-top" style="height:50px;">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button> -->

			      <!-- EDIT HERE -->
			      <!-- <img src="{{ asset('assets/img/new_png_logo_1.png') }}" alt="(logo)" width="48px" height="48px" class="pull-left" /> -->
			      <a class="navbar-brand" href="{{-- URL::route('dashboard.index') --}}" style="margin-left:0px;" id="title_header">E-Scout</a>			      
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    	<!-- EDIT HERE -->
			      	<p class="navbar-text navbar-right" style="color:white;margin-right:10px;">Hi, <a href="{{-- URL::route('profile.index') --}}" id="username_header" class="navbar-link" style="color:white;">{{--Session::get('name')--}}</a> | <a href="{{-- URL::route('logout') --}}" class="navbar-link" id="btn_logout" style="color:white;">logout</a></p>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		</nav>

		<div id="wrapper" style="margin-top:50px;">
			<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<!-- List sidebar di sini -->
					<!-- <li><a href="#">Dashboard</a></li> -->
					<!-- class list-group-item -->

					<!-- EDIT HERE -->
					<li><a href="{{-- url('customerList') --}}" class="s_sidebar_menu">menu sidebar 1</a></li>
					<!-- <li><a href="{{ url('activityHeader') }}" class="s_sidebar_menu">Aktivitas</a></li>
					<li><a href="{{ url('transaction') }}" class="s_sidebar_menu">Transaksi</a></li>
					<li><a href="{{ url('events') }}" class="s_sidebar_menu">Agenda</a></li>
					<li><a href="{{ url('lookup') }}" class="s_sidebar_menu">Lookup</a></li>
					<li><a href="{{ url('report') }}" class="s_sidebar_menu">Laporan</a></li> -->

					<!-- <li><a href="{{-- url('account') --}}" class="">Account</a></li>					
					<li><a href="{{-- url('customerAttr') --}}" class="">CustomerAttr</a></li>					
					<li><a href="{{-- url('activityLine') --}}" class="">ActivityLine</a></li>					
					<li><a href="{{-- url('profile') --}}" class="">Profile</a></li>
					<li><a href="{{-- url('transaction') --}}" class="">Transaction</a></li>
					<li><a href="{{-- url('news') --}}" class="">News</a></li> -->
				</ul>
			</div>
			<!-- /#sidebar-wrapper -->
			<!-- Page Content -->
			<div id="page-content-wrapper">
				<!-- <div class="container"> -->
					@yield('content')	                	       
				<!-- </div>	            -->
				<!-- EDIT HERE -->
				<img src="{{-- asset('assets/img/ykk_logo.jpg') --}}" alt="(logo)" class="img-responsive pull-right" style="margin-top:20px;" />
	        </div>
		</div>

		<script>
			$('body').on('click', '#title_header', function(){
				//showloader
            	$('.f_loader_container').removeClass('hidden');
			});
			$('body').on('click', '#username_header', function(){
				//showloader
            	$('.f_loader_container').removeClass('hidden');
			});
			$('body').on('click', '#btn_logout', function(){
				//showloader
            	$('.f_loader_container').removeClass('hidden');
			});
		</script>
		
	</body>

</html>	

<script>
	$('body').on('click', '.s_sidebar_menu', function(){
		//show loader
		$('.f_loader_container').removeClass('hidden');
	});
</script>