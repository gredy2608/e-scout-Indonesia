@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">
	<!-- header -->
	<div id="breadcrumb" class="row hidden-xs" style="margin-top:15px;text-align:left;">
		<a href="#">Umum</a>
	</div>
	<div id="header" class="row" style="margin-top:30px;text-align:center;">
		<h1>Umum</h1>
		<p style="display:block;margin-left:auto;margin-right:auto;width:60%;">
			Selamat datang di halaman utama untuk akun umum.
		</p>
		<div class="row" style="margin-top:20px;text-align:center;">
			<span class="clearfix"></span>
			<a class="btn btn-material-deep-orange-A700" href="{{ URL::to('/scout_now') }}" style="margin-left: auto; margin-right: auto;">
				Scout Now!
			</a>
		</div>
	</div>
	<!-- grafik -->
	<!-- <div id="grafik_prestasi_umum" style="margin-top:40px;"> -->
		<!-- input grafik nya ada di javascript di bawah -->
	<!-- </div> -->
	<div class="row">
		<!-- anak berprestasi -->
		<div id="anak_berprestasi" class="col-md-4" style="margin-top:40px;">
			<h1 style="text-align:center;">Siswa/i Bersekolah-Berprestasi</h1>
			<table class="table">
				<tbody>
					@foreach($list_siswa_berprestasi->prestasi as $siswa)
					<tr data-toggle="modal" data-target=".popup_request_kid_detail">
						<td>
							<a href="javascript:void(0)">{{Akta::find($siswa->id->id_akta_lahir)->nama}}</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="text-center" style="width: 100%; display: block;">
				<a class="btn btn-warning" href="{{ URL::to('/kids_list') }}" style="margin-left: auto; margin-right: auto;">
					Lihat Anak Lainnya
				</a>
			</div>
		</div>
		<!-- anak berprestasi -->
		<div id="anak_berprestasi" class="col-md-4" style="margin-top:40px;">
			<h1 style="text-align:center;">Siswa/i Tidak Bersersekolah-Berprestasi</h1>
			<table class="table">
				<tbody>
					@foreach($list_siswa_berprestasi_tidak_sekolah->prestasi as $siswa_no)
					<tr data-toggle="modal" data-target=".popup_request_kid_detail">
						<td>
							<a href="javascript:void(0)">{{Akta::find($siswa_no->id->id_akta_lahir)->nama}}</a>
						</td>
					</tr>

					@endforeach

				</tbody>
			</table>
			<div class="text-center" style="width: 100%; display: block;">
				<a class="btn btn-warning" href="{{ URL::to('/kids_list') }}" style="margin-left: auto; margin-right: auto;">
					Lihat Anak Lainnya
				</a>
			</div>
		</div>
		<!-- prestasi sekolah -->
		<div id="prestasi_sekolah" class="col-md-4" style="margin-top:40px;">
			<h1 style="text-align:center;">Sekolah Berprestasi</h1>
			<table class="table">
				<tbody>
					@foreach($list_sekolah_berprestasi as $sekolah)
						<tr data-toggle="modal" data-target=".popup_request_kid_detail">
							<td>
								<a href="javascript:void(0)">{{Sekolah::find($sekolah->id)->nama_sekolah}}</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center" style="width: 100%; display: block;">
				<a class="btn btn-warning" href="{{ URL::to('/schools_list') }}" style="margin-left: auto; margin-right: auto;">
					Lihat Sekolah Lainnya
				</a>
			</div>
		</div>
	</div>

</div>

@include('popup_request_kid_detail')
@include('popup_achievement_detail')

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
