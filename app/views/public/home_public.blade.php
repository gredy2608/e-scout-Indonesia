@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">	
	<!-- header -->
	<div id="breadcrumb" class="row" style="margin-top:30px;text-align:left;">		
		<a href="#">Umum</a>				
	</div>	
	<div id="header" class="row" style="margin-top:40px;text-align:center;">		
		<h1>Umum</h1>	
		<p style="display:block;margin-left:auto;margin-right:auto;width:60%;">
			Selamat datang di halaman utama untuk akun umum. 
		</p>				
		<div class="row" style="margin-top:20px;text-align:center;">			
			<a href="{{ URL::to('/school_kids_list') }}">
				<button class="btn btn-success">Lihat Seluruh Siswa</button>
			</a>
		</div>
	</div>	
	<!-- grafik -->
	<div id="grafik_prestasi_umum" style="margin-top:40px;">
		<!-- input grafik nya ada di javascript di bawah -->		
	</div>
	<!-- prestasi sekolah -->
	<div id="prestasi_sekolah" class="row" style="margin-top:40px;">
		<h1 style="text-align:center;">Prestasi yang Diraih</h1>
		<div class="row" style="margin-top:20px;">			
			<div class="col-md-6">
				<p>
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)					
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
				</p>
			</div>
			<div class="col-md-6">
				<img src="{{asset('assets/img/default_image_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto;max-width:300px;" />
			</div>
		</div>
		<div class="row" style="margin-top:20px;">			
			<div class="col-md-6">
				<p>
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)					
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
				</p>
			</div>
			<div class="col-md-6">
				<img src="{{asset('assets/img/default_image_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto;max-width:300px;" />
			</div>
		</div>
		<div class="row" style="margin-top:20px;">			
			<div class="col-md-6">
				<p>
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)					
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
					(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)(deskripsi prestasi)
				</p>
			</div>
			<div class="col-md-6">
				<img src="{{asset('assets/img/default_image_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto;max-width:300px;" />
			</div>
		</div>		
	</div>
	<!-- anak berprestasi -->
	<div id="anak_berprestasi" class="row" style="margin-top:40px;">
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
	</div>
	
</div>

<script>
	$(document).ready(function(){
		// lihat ke www.highcharts.com
		$('#grafik_prestasi_umum').highcharts({
			 chart: {
	            type: 'bar'
	        },
	        title: {
	            text: '(statistik prestasi sekolah)'
	        },
	        xAxis: {
	            categories: ['Apples', 'Bananas', 'Oranges']
	        },
	        yAxis: {
	            title: {
	                text: 'Fruit eaten'
	            }
	        },
	        series: [{
	            name: 'Jane',
	            data: [1, 0, 4]
	        }, {
	            name: 'John',
	            data: [5, 7, 3]
	        }]
			// title: {
			// 	text: 'Laporan Perkembangan Anggota Gereja',
			// 	x: -20 //center
			// },
			// subtitle:{
			// 	text: $from+" sampai "+$to,
			// 	x: -20
			// },
			// xAxis: {
			// // tanggal
			// 	categories: response[1]
			// },
			// yAxis: {
			// 	title: {
			// 		text: 'Banyak Anggota'
			// 	},
			// 	plotLines: [{
			// 		value: 0,
			// 		width: 1,
			// 		color: '#808080'
			// 	}]
			// },
			// tooltip: {
			// 	valueSuffix: ' jiwa'
			// },
			// legend: {
			// 	layout: 'vertical',
			// 	align: 'right',
			// 	verticalAlign: 'middle',
			// 	borderWidth: 0
			// },
			// series: $arr_anggota,
			// exporting : {
			// 	sourceHeight:768,
			// 	sourceWidth:1366
			// }
		});
	});
</script>


@stop
