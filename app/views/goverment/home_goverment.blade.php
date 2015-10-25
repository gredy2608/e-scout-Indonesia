@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">
	<!-- header -->
	<div id="breadcrumb" class="row hidden-xs hidden" style="margin-top:15px;text-align:left;">
		<a href="#">Dinas</a>
	</div>
	<div id="header" class="row" style="margin-top:30px;text-align:center;">
		<h1>Dinas (NAMA DINAS)</h1>
		<p style="display:block;margin-left:auto;margin-right:auto;">
			Selamat datang di halaman utama untuk akun dinas.
		</p>
		
	</div>

	<!-- <div class="row" style="margin-top:40px;text-align:center;margin-left:auto;margin-right:auto;"> -->
		<div class="col-md-6">
			<h3>Penambahan/Perubahan Data Anak</h3>
			<form style="display:inline-block;" class="import_excel_student_form">
				<div class="form-group">
					<!-- <label for="f_file">File</label> -->
					<input type="file" id="f_file" />
					<p class="help-block">Silahkan masukkan file excel berisi daftar anak sesuai format yang sudah ada.</p>
				</div>
				<button type="submit" class="btn btn-success">Kirim</button>
			</form>
		</div>
		<div class="col-md-6">
			<h3>Penambahan/Perubahan Data Sekolah</h3>
			<form style="display:inline-block;" class="import_excel_school_form">
				<div class="form-group">
					<!-- <label for="f_file">File</label> -->
					<input type="file" id="f_file_sekolah" />
					<p class="help-block">Silahkan masukkan file excel berisi daftar sekolah sesuai format yang sudah ada.</p>
				</div>
				<button type="submit" class="btn btn-success">Kirim</button>
			</form>
		</div> 
	<!-- </div> -->

	<div class="row" style="margin-top:40px;text-align:center;">
		<a href="{{ URL::to('/goverment_schools_list') }}">
			<button class="btn btn-info">Lihat Data Seluruh Sekolah</button>
		</a>
	</div>
	<div class="row">
		<div id="mapdiv" style="background-color:#EEEEEE; height: 300px; margin-left: -15px;  margin-right: -15px; "></div>
	</div>
	<!-- grafik -->
	<!--<div id="grafik_prestasi_sekolah" style="margin-top:40px;">
	<!-- input grafik nya ada di javascript di bawah -->
	<!--</div>
	<!-- anak berprestasi -->
	<div class="col-md-6">
		<div id="anak_berprestasi" class="row" style="margin-top:40px;">
			<h1 class="text-center">Anak Berprestasi</h1>
			<table class="table">
				<thead>
					<tr>
						<th>

						</th>
						<th>
							Nama
						</th>
						<th>
							Alamat
						</th>
						<th>
							Sekolah
						</th>
						<th>
							T. Lahir
						</th>
						<th class="hidden-xs"> 
						</th>
					</tr>
				</thead>
				<tbody>
					@for($i = 0 ; $i < 10 ; $i++)
					<tr>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							<img src="{{asset('assets/img/default_pp_icon.png')}}"
							style="display:block;margin-left:auto;margin-right:auto;max-height:50px;" />
						</td>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							<a href="javascript:void(0)">Someone Lastname</a>
						</td>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							Jl. Random 999
						</td>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							Sekolah Random 9
						</td>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							1999-05-24
						</td>
						<td class="hidden-xs">
							<button type="button" class="btn btn-success"  data-toggle="modal" data-target=".popup_request_kid_detail">
								Detail
							</button>
						</td>
					</tr>

					@endfor

				</tbody>
			</table>	

			@for($i = 0 ; $i < 10 ; $i++)
			<!-- <div class="row" style="margin-top:20px;">
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
			</div> -->
			@endfor
		</div>
	</div>
	<div class="col-md-6">
		<div id="anak_tidak_sekolah" class="row" style="margin-top:40px;">
			<h1 class="text-center">Anak Tidak Sekolah</h1>

			<table class="table">
				<thead>
					<tr>
						<th>
							
						</th>
						<th>
							Nama
						</th>
						<th>
							Alamat
						</th> 
						<th>
							T. Lahir
						</th>
						<th class="hidden-xs"> 
						</th>
					</tr>
				</thead>
				<tbody>
					@for($i = 0 ; $i < 10 ; $i++)
					<tr>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							<img src="{{asset('assets/img/default_pp_icon.png')}}"
							style="display:block;margin-left:auto;margin-right:auto;max-height:50px;" />
						</td>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							<a href="javascript:void(0)">Someone Lastname</a>
						</td>
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							Jl. Random 999
						</td> 
						<td data-toggle="modal" data-target=".popup_request_kid_detail">
							1999-05-24
						</td>
						<td class="hidden-xs">
							<button type="button" class="btn btn-success"  data-toggle="modal" data-target=".popup_request_kid_detail">
								Detail
							</button>
						</td>
					</tr>

					@endfor

				</tbody>
			</table>
			@for($i = 0 ; $i < 10 ; $i++)
			<!-- <div class="row" style="margin-top:20px;">
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
			</div> -->
			@endfor
		</div>
	</div>
</div>

@include('popup_request_kid_detail')
@include('popup_achievement_detail')

<script>

	var map;

	AmCharts.ready(function() {
		map = new AmCharts.AmMap();


		map.balloon.color = "#000000";

		var dataProvider = {
			mapVar: AmCharts.maps.indonesiaHigh,
			getAreasFromMap:true,
			areas: [
			{
		        	// "id":"ID-JK",
		        	// "color": "#000000"
		        },
		        @foreach($ranking_kota as $kota)
		        {
		        	"id":"{{$kota->id}}",
		        	"title":"{{$kota->title}}",
		        	"color": "hsl({{100-($kota->ranking * 4)}}, 100%, 77%)"
		        },
		        @endforeach


		        {
		        	"id":"TL",
		        	"title":"Timor-Leste",
		        	"color": "#eeeeee"
		        },
		        {
		        	"id":"MY-12",
		        	"title":"Sabah",
		        	"color": "#eeeeee"
		        },
		        {
		        	"id":"MY-13",
		        	"title":"Sarawak",
		        	"color": "#eeeeee"
		        },
		        {
		        	"id":"BN",
		        	"title":"Brunei Darussalam",
		        	"color": "#eeeeee"
		        }
		        ]
		    };

		    map.dataProvider = dataProvider;

		    map.areasSettings = {
		    	autoZoom: true,
		    	color: "#DD2C00",
		    	selectedColor: "#CC0000"
		    };

		    map.smallMap = new AmCharts.SmallMap();

		    map.write("mapdiv");

		});


</script>
<script>
	$(document).ready(function(){
		// lihat ke www.highcharts.com
		/*$('#grafik_prestasi_sekolah').highcharts({
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
		});*/
});
</script>


@stop
