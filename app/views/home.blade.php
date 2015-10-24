@extends('layouts.topmenu')
@section('content')

<div id="content">
	<!-- header -->
	<div id="header" class="row text-center" style="">
		<img src="{{asset('assets/img/logo.png')}}" style="display:block;margin-left:auto;margin-right:auto;max-width:200px;" />
		<h1 class="text-center">E-Scout</h1>
		<p style="display:block;margin-left:auto;margin-right:auto;" class="col-sm-12">
			E-Scout adalah sebuah aplikasi website yang bertujuan untuk mengumpulkan talenta-telanta muda
			anak bangsa yang tidak terjamah pemerintah. Melalui E-Scout kami mengundang seluruh masyarakat
			Indonesia untuk membantu meningkatkan kualitas SDM kita. Setiap kita dapat melaporkan baik kenalan
			kita ataupun anak jalanan yang memiliki bakat luar biasa. Kami tunggu partisipasi Anda untuk membangun
			Indonesia yang lebih baik.
		</p>
		<span class="clearfix"></span>
		<a class="btn btn-info" href="{{ URL::to('/scout_now') }}" style="margin-left: auto; margin-right: auto;">
			Scout Now!
		</a>
	</div>
	<!-- visi -->
	<div id="visi" class="row text-center" style="">
		<h1>Visi</h1>
		<p>
			Kami ingin menghimpun seluruh masyarakat Indonesia untuk meningkatkan mutu SDM Indonesia yang lebih baik.
		</p>
	</div>
	<!-- misi -->
	<div id="misi" class="row text-center" style="">
		<h1>Misi</h1>
		<ul style="display:inline-block;">
			<li>misi 1</li>
			<li>misi 2</li>
			<li>misi 3</li>
		</ul>
	</div>
	<!-- siapa kamu -->
	<div id="siapa_kamu" class="row text-center" style="">
		<h1>Siapa kamu ?</h1>
		<!-- scouter -->
		<div class="col-md-4">
			<img src="{{asset('assets/img/logo.png')}}"
			style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			<h1><a href="{{ URL::to('/login') }}?tipe=pengawas">Scouter</a></h1>
		</div>
		<!-- siswa -->
		<!-- <div class="col-md-3">
			<img src="{{asset('assets/img/logo.png')}}"
				style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			<h1><a href="#">Anak</a></h1>
		</div> -->
		<!-- sekolah -->
		<div class="col-md-4">
			<img src="{{asset('assets/img/logo.png')}}"
			style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			<h1><a href="{{ URL::to('/login') }}?tipe=sekolah">Sekolah</a></h1>
		</div>
		<!-- dinas -->
		<div class="col-md-4">
			<img src="{{asset('assets/img/logo.png')}}"
			style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			<h1><a href="{{ URL::to('/login') }}?tipe=dinas">Dinas</a></h1>
		</div>
	</div>
	<!-- anak berprestasi -->
	<div id="anak_berprestasi" class="row" style="">
		<h1 style="text-align:center;">Anak Berprestasi</h1>
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
		<div class="row" style="margin-top:20px;text-align:center;">
			<a class="btn btn-warning" href="{{ URL::to('/kids_list') }}">
				Lihat Anak Lainnya
			</a>
		</div>
	</div>
	<!-- sekolah berprestasi -->
	<div id="sekolah_berprestasi" class="row" style="margin-top:40px;">
		<h1 style="text-align:center;">Sekolah - Sekolah</h1>
		<div class="row" style="margin-top:20px;">
			<div class="col-md-3">
				<img src="{{asset('assets/img/default_school_icon.png')}}"
				style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			</div>
			<div class="col-md-9">
				<ul style="list-style:none;">
					<li>(sekolah)</li>
					<li>(kota)</li>
					<li>(akreditasi)</li>
					<li>(prestasi)</li>
				</ul>
			</div>
		</div>
		<div class="row" style="margin-top:20px;">
			<div class="col-md-3">
				<img src="{{asset('assets/img/default_school_icon.png')}}"
				style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			</div>
			<div class="col-md-9">
				<ul style="list-style:none;">
					<li>(sekolah)</li>
					<li>(kota)</li>
					<li>(akreditasi)</li>
					<li>(prestasi)</li>
				</ul>
			</div>
		</div>
		<div class="row" style="margin-top:20px;">
			<div class="col-md-3">
				<img src="{{asset('assets/img/default_school_icon.png')}}"
				style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			</div>
			<div class="col-md-9">
				<ul style="list-style:none;">
					<li>(sekolah)</li>
					<li>(kota)</li>
					<li>(akreditasi)</li>
					<li>(prestasi)</li>
				</ul>
			</div>
		</div>
		<div class="row" style="margin-top:20px;text-align:center;">
			<a class="btn btn-warning" href="{{ URL::to('/schools_list') }}">
				Lihat Sekolah Lainnya
			</a>
		</div>
	</div>
	<!-- hubungi kami -->
	<div id="hubungi_kami" class="row" style="margin-top:40px;text-align:center;">
		<h1>Hubungi Kami</h1>
		<h4>
			<img src="{{asset('assets/img/mail_icon.png')}}"
			style="max-width:25px;" />
			e_scout@mail.com
		</h4>
		<h4>
			<img src="{{asset('assets/img/facebook_icon.png')}}"
			style="max-width:25px;" />
			<a href="#">Facebook</a>
		</h4>
		<h4>
			<img src="{{asset('assets/img/twitter_icon.png')}}"
			style="max-width:25px;" />
			<a href="#">Twitter</a>
		</h4>
		<h4>
			<img src="{{asset('assets/img/instagram_icon.png')}}"
			style="max-width:25px;" />
			<a href="#">Instagram</a>
		</h4>
	</div>
</div>

@stop
