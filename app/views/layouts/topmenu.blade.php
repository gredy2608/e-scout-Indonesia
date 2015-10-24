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
	<!-- style for datetimepicker -->
	<link href="{{ asset('assets/js/datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet">
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
	<!-- javascript for datetimepicker -->
	<script src="{{ asset('assets/js/datetimepicker/jquery.datetimepicker.js') }}"></script>
	<!-- javascript for highcharts -->
	<script src="{{ asset('assets/js/highcharts4/js/highcharts.js') }}"></script>
	<script src="{{ asset('assets/js/highcharts4/js/modules/exporting.src.js') }}"></script>

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

		<!-- <nav class="navbar navbar-default navbar-fixed-top" style="height:50px;border:none; position: relative !important;">
			<div class="container-fluid" style="background-color:#99E5FF;"> 
			    <div class="navbar-header">  
			      <img src="{{ asset('assets/img/logo.png') }}" alt="(logo)" width="40px" height="40px" style="margin-top:5px;" class="pull-left" />			      
			      <a class="navbar-brand" href="{{ URL::to('/home') }}" style="margin-left:0px;" id="title_header">E-Scout</a>			      
			    </div>

			    <div>
			      	<ul class="nav navbar-nav" style="margin-left:20%;">
			        	<li><a href="{{ URL::to('/scout_now') }}" style="height:48px;padding:10px;">Scout Now</a></li> 
			        	<li class="dropdown">
				          	<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="height:48px;padding:10px;">Siapa Kamu?
				          	<span class="caret"></span></a>
				          	<ul class="dropdown-menu">
				            	<li><a href="#">Sekolah</a></li>				            	
				            	<li><a href="#">Dinas</a></li> 
				            	<li><a href="#">Scouter</a></li> 
				          	</ul>
				        </li>
			        	<li><a href="{{ URL::to('/kids_list') }}" style="height:48px;padding:10px;">Anak Berprestasi</a></li>
			        	<li><a href="#" style="height:48px;padding:10px;">Hubungi Kami</a></li> 			        	
			      	</ul>
			    </div> 
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			     </div> 
			  </div> 
			</nav> -->


			<nav class="navbar navbar-material-blue-500 navbar-fixed-top" style=" ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-material-light-blue-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ URL::to('/home') }}">E-Scout</a>
				</div>
				<div class="navbar-collapse collapse navbar-material-light-blue-collapse">
					<ul class="nav navbar-nav">
						<li class=""><a href="{{ URL::to('/scout_now') }}" style="">Scout Now</a></li> 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="">Siapa Kamu? <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Sekolah</a></li>
								<li><a href="#">Dinas</a></li>
								<li><a href="#">Scouter</a></li> 
							</ul>
						</li>
						<li><a href="{{ URL::to('/kids_list') }}" style="">Anak Berprestasi</a></li>

						<li><a href="#" style="">Hubungi Kami</a></li> 
					</ul> 
				</div>
			</nav>


			<div class="container" style="margin-top: 60px;">
				@yield('content')
				<!-- EDIT HERE -->
				<!-- <img src="{{-- asset('assets/img/ykk_logo.jpg') --}}" alt="(logo)" class="img-responsive pull-right" style="margin-top:20px;" /> -->
			</div>						

			<div class="container">
				<!-- footer -->
				<section id="footer" class="row" style="margin-top:40px;text-align:center;">
					<h4>&copy; Schronic 2015</h4>
				</section>
			</div>

			<script>
				$('body').on('click', '#title_header', function(){
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