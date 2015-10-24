@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">	
	<!-- header -->
	<div id="breadcrumb" class="row hidden-xs" style="">		
		<a href="#">Scouter</a>				
	</div>
	<div id="header" class="row" style="margin-top:15px;text-align:center;">		
		<h1>Someone Somehow</h1>	
		<p style="display:block;">
			Selamat datang di halaman utama untuk akun scouter. 
		</p>
		<div class="row" style="margin-top:20px;text-align:center;">			
			<a href="{{ URL::to('/scouter_schools_list') }}">
				<button class="btn btn-success">Lihat Seluruh Sekolah</button>
			</a>
		</div>						
	</div>		
	<div class="row"> 
	<div id="mapdiv" style="background-color:#EEEEEE; height: 300px; margin-left: -15px;  margin-right: -15px; "></div> 
	</div>

	<!-- anak berprestasi -->
	<div id="anak_berprestasi" class="row" style="margin-top:40px;">
		<h1 style="text-align:center;">Anak Berprestasi</h1>
		@for($i = 0 ; $i < 10 ; $i++)
		<div class="row" style="margin-top:20px;">
			<div class="col-sm-3">
				<img src="{{asset('assets/img/default_pp_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto;" />
			</div>
			<div class="col-sm-9">
				<ul style="list-style:none;">
					<li>(nama)</li>
					<li>(umur)</li>
					<li>(sekolah?)</li>
					<li>(prestasi)</li>
				</ul>
			</div>
		</div>
		@endfor		
		<div class="row" style="margin-top:20px;text-align:center;">			
			<a class="btn btn-warning" href="{{ URL::to('/scouter_kids_list') }}">
				Lihat Anak Lainnya 
			</a>
		</div>
	</div>	
	<!-- kota berprestasi -->
	<div id="kota_berprestasi" class="row" style="margin-top:40px;">
		<h1 style="text-align:center;">Kota Berprestasi</h1>
		@for($i = 0 ; $i < 10 ; $i++)
		<div class="row" style="margin-top:20px;">
			<div class="col-sm-12">
				<img src="{{asset('assets/img/default_image_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto; max-width: 90vw;" />
			</div>
			<div class="col-sm-12">
				<h4>(Nama Kota)</h4>
				<ul style="list-style:none;">					
					<li>(prestasi)</li>					
					<li>(prestasi)</li>
					<li>(prestasi)</li>
				</ul>
			</div>
		</div>
		@endfor				
	</div>	
</div>

<script>
	$(document).ready(function(){

	});
</script>


@stop
