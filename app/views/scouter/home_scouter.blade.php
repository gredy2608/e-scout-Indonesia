@extends('layouts.topmenu')
@section('content')

<div id="content">	
	<!-- header -->
	<div id="breadcrumb" class="row" style="margin-top:30px;text-align:left;">		
		<a href="#">Scouter</a>				
	</div>
	<div id="header" class="row" style="margin-top:40px;text-align:center;">		
		<h1>Scouter (NAMA SCOUTER)</h1>	
		<p style="display:block;margin-left:auto;margin-right:auto;width:60%;">
			Selamat datang di halaman utama untuk akun scouter. 
		</p>
		<div class="row" style="margin-top:20px;text-align:center;">			
			<a href="{{ URL::to('/scouter_schools_list') }}">
				<button class="btn btn-success">Lihat Seluruh Sekolah</button>
			</a>
		</div>						
	</div>		
	<!-- anak berprestasi -->
	<div id="anak_berprestasi" class="row" style="margin-top:40px;">
		<h1 style="text-align:center;">Anak Berprestasi</h1>
		@for($i = 0 ; $i < 10 ; $i++)
		<div class="row" style="margin-top:20px;">
			<div class="col-md-3">
				<img src="{{asset('assets/img/default_pp_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			</div>
			<div class="col-md-9">
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
			<a href="{{ URL::to('/scouter_kids_list') }}">
				<button class="btn btn-warning">Lihat Anak Lainnya</button>
			</a>
		</div>
	</div>	
	<!-- kota berprestasi -->
	<div id="kota_berprestasi" class="row" style="margin-top:40px;">
		<h1 style="text-align:center;">Kota Berprestasi</h1>
		@for($i = 0 ; $i < 10 ; $i++)
		<div class="row" style="margin-top:20px;">
			<div class="col-md-5">
				<img src="{{asset('assets/img/default_image_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto;max-width:250px;" />
			</div>
			<div class="col-md-7">
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
