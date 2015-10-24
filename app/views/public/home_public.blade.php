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
	<div class="row">
		<!-- anak berprestasi -->
		<div id="anak_berprestasi" class="col-md-4" style="margin-top:40px;">
			<h1 style="text-align:center;">Siswa/i Bersekolah-Berprestasi</h1>
			<table class="table">
				<tbody>
					@for($i = 0 ; $i < 10 ; $i++)
					<tr>
						<td>
						Nama Siswa/i
						</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
		<!-- anak berprestasi -->
		<div id="anak_berprestasi" class="col-md-4" style="margin-top:40px;">
			<h1 style="text-align:center;">Siswa/i Tidak Bersersekolah-Berprestasi</h1>
			<table class="table">
				<tbody>
					@for($i = 0 ; $i < 10 ; $i++)
					<tr>
						<td>
						Nama Siswa/i
						</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
		<!-- prestasi sekolah -->
		<div id="prestasi_sekolah" class="col-md-4" style="margin-top:40px;">
			<h1 style="text-align:center;">Sekolah Berprestasi</h1> 
			<table class="table">
				<tbody>
					@for($i = 0 ; $i < 10 ; $i++)
					<tr>
						<td>
						Nama Sekolah
						</td>
					</tr>
					@endfor
				</tbody>
			</table>		
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
