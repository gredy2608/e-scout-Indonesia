@extends('layouts.topmenu')
@section('content')

<div class="container">

	<div class="row" style="margin-top:100px;">
		<!-- <div class="col-lg-6 col-lg-push-3"> -->
		<!-- <div class="col-lg-8 col-lg-push-2"> -->
		<div class="col-sm-12">
			<div class="s_tbl s_set_height_window">
				<div class="s_cl">
					<!-- <h2>E-SCOUT</h2>		 -->
					<!-- <div style="width:50%;margin-left:auto;margin-right:auto;">
						<img src="{{ asset('assets/img/logo.png') }}" alt="(logo)" class="img-responsive" style="max-width:150px;display:block;margin-left:auto;margin-right:auto;" />
					</div> -->
					<div class="panel panel-primary" style="margin-top:20px;width:50%;margin-left:auto;margin-right:auto;">
						<div class="panel-heading">
							<h3 class="panel-title">Login</h3>
						</div>
						<div class="panel-body">
							{{ Form::open(array('url' => '/signin', 'class'=>'form-horizontal')) }}
							<div class="form-group">
								<label class="control-label col-sm-4">Username</label>
								<div class="col-sm-6">
									{{ Form::text('username', Input::old('username'), array('placeholder' => 'username', 'class' => 'form-control login-input', 'id' => 'f_username', 'style' => '')) }}
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4">Password</label>
								<div class="col-sm-6">
									{{ Form::password('password', array('placeholder' => 'password', 'class' => 'form-control login-input', 'id' => 'f_password', 'style' => ''), Input::old('password')) }}
								</div>
							</div>
							<!-- <div class="form-group">
								<label class="control-label col-lg-4"> </label>
								<div class="col-lg-6">
									{{-- Form::checkbox('remember_me', 'yes', null, ['style' => 'margin-top: 8px;']) --}}
									Remember me
								</div>
							</div> -->
							<div class="form-group">
								<label class="control-label col-sm-4"></label>
								<div class="col-sm-6">
									{{ Form::submit('Login', array('class' => 'btn btn-success', 'id' => 'btn_login')) }}
								</div>
							</div>
							{{ Form::token() }}
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		//removeloader
        $('.f_loader_container').addClass('hidden');

		//message gagal login, berhasil logout
        @if($alert = Session::get('message'))
            alert("{{ $alert }}");
        @endif

        $('body').on('click', '#btn_login', function(){
        	//showloader
            $('.f_loader_container').removeClass('hidden');
        });
	});


</script>

@stop
