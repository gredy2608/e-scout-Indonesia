<!DOCTYPE html>
<html lang="en">	

	<title>YKK</title>
	
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

		<!-- javascript -->				
		<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
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
			<div class="container-fluid" style="padding-left:0px;padding-right:0px;">
				<div class="row">
					<div class="col-xs-2">
						<p class="pull-left" style="color:white;margin-top:3px;margin-left:3px;">
							<a href="{{ URL::route('dashboard.m_menu') }}" class="" style="">
								<img src="{{ asset('assets/img/icon_menu.png') }}" alt="menu" style="width:40px;height:40px;border:0" id="btn_menu" />
							</a>
						</p>
					</div>
					<div class="col-xs-8">
						<h4 align="center" class="" style="color:white;margin-left:auto;margin-right:auto;margin-top:13px;"><a href="{{ URL::route('dashboard.m_index') }}" class="" style="color:white;" id="title_header_name">DWICAHAYA_CRM</a></h4>
					</div>
					<div class="col-xs-2">
						<p class="pull-right" style="color:white;margin-top:3px;margin-right:3px;">
							<!-- <a href="{{ URL::route('m_logout') }}" class="" style="" id="btn_logout"> -->
							<a href="#" class="" style="" id="btn_logout">
								<img src="{{ asset('assets/img/icon_logout.png') }}" alt="menu" style="width:40px;height:40px;border:0" />
							</a>
						</p>
					</div>
				</div>
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <!-- <div class="navbar-header"> -->
			      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button> -->
			      	<!-- <a class="navbar-brand navbar-center" href="{{ URL::route('dashboard.m_index') }}">DWICAHAYA_CRM</a> -->
			      	<!-- <p class="" style="color:white;margin-right:10px;margin-left:auto;margin-right:auto;"><a href="{{ URL::route('m_logout') }}" class="navbar-link" style="color:white;">logout</a></p> -->
			    <!-- </div> -->

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			    	 -->
			    	<!-- <p class="" style="color:white;margin-right:10px;margin-left:auto;margin-right:auto;"><a href="{{ URL::route('m_logout') }}" class="navbar-link" style="color:white;">logout</a></p> -->
			    	<!-- <p class=" navbar-center" style="color:white;margin-right:auto;margin-left:auto;"><a href="{{ URL::route('dashboard.m_index') }}" class="navbar-link" style="color:white;">DWICAHAYA_CRM</a></p> -->
			      	<!-- <p class="navbar-text navbar-right" style="color:white;margin-right:10px;"><a href="{{ URL::route('m_logout') }}" class="navbar-link" style="color:white;">logout</a></p> -->
			    <!-- </div> --><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="container-fluid" style="margin-top:50px;">
			@yield('content')
		</div>		

		<!-- POPUP LOGOUT -->
		<div class="modal fade" id="popup_logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		                <h4 class="modal-title" id="popup_logout_title">Logout</h4>
		            </div>
		            <div class="modal-body" id="popup_logout_body" style="height:100px;">
		                <!-- fill with m_logout.blade.php -->
		            </div>          
		        </div>
		    </div>
		</div>

		<script>
			$('body').on('click', '#title_header_name', function(){
				//showloader
            	$('.f_loader_container').removeClass('hidden');
			});

			$('body').on('click', '#btn_menu', function(){
				//showloader
            	$('.f_loader_container').removeClass('hidden');
			});
			
			$('body').on('click', '#btn_logout', function(){
            	//showloader
		        $('.f_loader_container').removeClass('hidden');        
		        $('#popup_logout_body').html("");       
		        $.get('{{URL::route('m_popup_logout')}}' ,function(response){
		            //alert(JSON.stringify(response));
		            $('#popup_logout_body').html(response.view);
		            $('#popup_logout').modal('show');
		        },'json');
			});			
		</script>
		
	</body>

</html>	