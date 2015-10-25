@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">	
	<!-- header -->
	<div id="breadcrumb" class="row hidden-xs hidden" style="margin-top:15px;text-align:left;">		
		<a href="#">Sekolah</a>				
	</div>	

	<div class="col-md-2 hidden-xs front-sidebar" style="background: #123; margin-left: -30px;">
		<ul class="list-unstyled">

			<li class="withripple">
				<a href="#">
					Home
				</a>
			</li>
			<li class="withripple">
				<a href="#">
					Tambah Siswa
				</a>
			</li>
			<li class="withripple">
				<a href="#">
					Tambah Nilai
				</a>
			</li>
			<li class="withripple">
				<a href="#">
					Prestasi Siswa
				</a>
			</li> 
		</ul>
	</div>
	<div class="col-md-10 col-md-push-2">
		<div id="header" class="row" style="margin-top:30px;text-align:center;">		
			<h1 style="margin-bottom: 0px;">Echo Nama Sekolah</h1>	
			<p style="display:block;margin-left:auto;margin-right:auto;width:60%;">
				Ranking Sekolah dalam Provinsi. 
			</p>		
			<span class="rank-ring" style="">
				7/15
			</span>		
		</div>	 
		<!-- grafik -->
		<!-- <div id="grafik_prestasi_sekolah" style="margin-top:40px;"></div> -->

		<!-- anak berprestasi -->

		<div id="anak_berprestasi" class="col-md-12" style="margin-top:40px;">
			<h1 style="text-align:center;">Daftar Siswa</h1>
			<table class="table">
				<thead>
					<tr>
						<th>
							Nama
						</th>
						<th>
							Kelas
						</th>
						<th>
							Umur
						</th> 
					</tr>
				</thead>
				<tbody>
					@for($i = 0 ; $i < 10 ; $i++)
					<tr data-toggle="modal" data-target=".popup_request_kid_detail">
						<td>
							<a href="javascript:void(0)">Nama Siswa/i</a>
						</td>
						<td>
							12
						</td>
						<td>
							18
						</td>
					</tr>
					@endfor
				</tbody>
			</table> 
			<div class="row" style="margin-top:20px;text-align:center;">			
				<a href="{{ URL::to('/school_kids_list') }}">
					<button class="btn btn-success">Lihat Seluruh Siswa</button>
				</a>
			</div>
		</div>

		<!-- prestasi sekolah -->
		<div id="prestasi_sekolah" class="row" style="margin-top:40px;">
			<h1 style="text-align:center;">Prestasi yang Diraih</h1>
			<div class="row" style="margin-top:20px;">			
				<div class="col-md-6">
					<p>
						Description Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
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
						Description Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
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
						Description Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.
					</p>
				</div>
				<div class="col-md-6">
					<img src="{{asset('assets/img/default_image_icon.png')}}" 
					style="display:block;margin-left:auto;margin-right:auto;max-width:300px;" />
				</div>
			</div>		
		</div>
	</div>
	@include('school.popup_request_kid_detail')
	@include('popup_achievement_detail')  
	
</div>

<script>
	$(document).ready(function(){
		// lihat ke www.highcharts.com
		$('#grafik_prestasi_sekolah').highcharts({
			chart: {
				type: 'bar'
			},
			title: {
				text: 'Top 10 Murid Sekolah'
			},
			xAxis: {
				categories: ['Echo Siswa 1', 
				'Echo Siswa 2', 
				'Echo Siswa 3',
				'Echo Siswa 4',
				'Echo Siswa 5',
				'Echo Siswa 6',
				'Echo Siswa 7',
				'Echo Siswa 8',
				'Echo Siswa 9',
				'Echo Siswa 10'
				]
			},
			yAxis: {
				title: {
					text: 'Fruit eaten'
				}
			},
			series: [{
				name: 'Prestasi',
				data: [10, 9, 8, 7, 6, 5, 4, 3, 2, 1]
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
