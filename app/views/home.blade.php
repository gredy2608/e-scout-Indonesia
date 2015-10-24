@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">
	<!-- header -->
	<div id="header" class="row text-center" style="margin-top: 60px;">
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
		<a class="btn btn-material-deep-orange-A700" href="{{ URL::to('/scout_now') }}" style="margin-left: auto; margin-right: auto;">
			Scout Now!
		</a>
	</div>
	<!-- visi -->
	<div id="visi" class="col-md-6 text-center" style="margin-top: 60px;">
		<h1>Visi</h1>
		<p>
			Kami ingin menghimpun seluruh masyarakat Indonesia untuk meningkatkan mutu SDM Indonesia yang lebih baik.
		</p>
	</div>
	<!-- misi -->
	<div id="misi" class="col-md-6 text-center" style="margin-top: 60px;">
		<h1>Misi</h1>
		<ul style="display:inline-block;">
			<li>Collaboratively administrate empowered markets via plug-and-play networks.</li>
			<li>Dynamically procrastinate B2C users after installed base benefits.</li>
			<li>Dramatically visualize customer directed convergence without revolutionary ROI.</li>
		</ul>
	</div>
	<span class="clearfix"></span>
	<!-- siapa kamu -->
	<div id="siapa_kamu" class="row text-center" style="margin-top: 60px;">
		<h1>Siapa kamu ?</h1>
		<!-- scouter -->
		<div class="col-md-4">
			<img src="{{asset('assets/img/scouter.png')}}"
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
			<img src="{{asset('assets/img/sekolah.png')}}"
			style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			<h1><a href="{{ URL::to('/login') }}?tipe=sekolah">Sekolah</a></h1>
		</div>
		<!-- dinas -->
		<div class="col-md-4">
			<img src="{{asset('assets/img/dinas.png')}}"
			style="display:block;margin-left:auto;margin-right:auto;max-width:150px;" />
			<h1><a href="{{ URL::to('/login') }}?tipe=dinas">Dinas</a></h1>
		</div>
	</div>
	<!-- anak berprestasi -->
	<div id="anak_berprestasi" class="col-md-6" style="margin-top: 60px;">
		<h1 style="text-align:center;">Anak Berprestasi</h1>
		 
		<div class="row" style="margin-top:20px;text-align:center;">
			<a class="btn btn-warning" href="{{ URL::to('/kids_list') }}">
				Lihat Anak Lainnya
			</a>
		</div>
	</div>
	<!-- sekolah berprestasi -->
	<div id="sekolah_berprestasi" class="col-md-6" style="margin-top:60px;">
		<h1 style="text-align:center;">Sekolah</h1>
		 
		<div class="row" style="margin-top:20px;text-align:center;">
			<a class="btn btn-warning" href="{{ URL::to('/schools_list') }}">
				Lihat Sekolah Lainnya
			</a>
		</div>
	</div>
	<span class="clearfix"></span>
	<!-- hubungi kami -->
	<div id="hubungi_kami" class="row" style="margin-top:40px;text-align:center;">
		<h1>Hubungi Kami</h1>
		<span>
			<img src="{{asset('assets/img/mail_icon.png')}}"
			style="max-width:25px;" />
			e_scout@mail.com
		</span>
		<span>
			<img src="{{asset('assets/img/facebook_icon.png')}}"
			style="max-width:25px;" />
			<a href="#">Facebook</a>
		</span>
		<span>
			<img src="{{asset('assets/img/twitter_icon.png')}}"
			style="max-width:25px;" />
			<a href="#">Twitter</a>
		</span>
		<span>
			<img src="{{asset('assets/img/instagram_icon.png')}}"
			style="max-width:25px;" />
			<a href="#">Instagram</a>
		</span>
	</div>
</div>

@stop
