@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">	
	<!-- header -->
	<div id="breadcrumb" class="row hidden-xs" style="margin-top:15px;text-align:left;">		
		<a href="#">Dinas</a>		
	</div>
	<div id="header" class="row" style="margin-top:30px;text-align:center;">		
		<h1>Dinas (NAMA DINAS)</h1>	
		<p style="display:block;margin-left:auto;margin-right:auto;">
			Selamat datang di halaman utama untuk akun dinas. 
		</p>				
		<!-- form content -->
		<div class="row" style="margin-top:40px;text-align:center;margin-left:auto;margin-right:auto;">
			<h2>Penambahan Data Anak</h2>
			<form style="display:inline-block;">			
				<div class="form-group">
					<!-- <label for="f_file">File</label> -->
					<input type="file" id="f_file" />
					<p class="help-block">Silahkan masukkan file excel berisi daftar anak sesuai format yang sudah ada.</p>
				</div>		  	
				<button type="" class="btn btn-success">Kirim</button>
			</form>		
		</div>
		<div class="row" style="margin-top:40px;text-align:center;">			
			<a href="{{ URL::to('/goverment_schools_list') }}">
				<button class="btn btn-info">Lihat Data Seluruh Sekolah</button>
			</a>
		</div>
	</div>	
	<div class="row"> 
		<div id="mapdiv" style="background-color:#EEEEEE; height: 300px; margin-left: -15px;  margin-right: -15px; "></div> 
	</div>
	<!-- grafik -->
	<div id="grafik_prestasi_sekolah" style="margin-top:40px;">
		<!-- input grafik nya ada di javascript di bawah -->		
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
	</div>	
</div>

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
		        {
		        	"id":"ID-AC",
		        	"title":"Aceh",
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-BA",
		        	"title":"Bali", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-BB",
		        	"title":"Bangka Belitung", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-BE",
		        	"title":"Bengkulu", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-BT",
		        	"title":"Banten", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-GO",
		        	"title":"Gorontalo", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-JA",
		        	"title":"Jambi", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-JB",
		        	"title":"Jawa Barat", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-JI",
		        	"title":"Jawa Timur", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-JK",
		        	"title":"Jakarta Raya", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-JT",
		        	"title":"Jawa Tengah", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-KB",
		        	"title":"Kalimantan Barat", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-KI",
		        	"title":"Kalimantan Timur", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-KR",
		        	"title":"Kepulauan Riau", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-KS",
		        	"title":"Kalimantan Selatan", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-KT",
		        	"title":"Kalimantan Tengah", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-KU",
		        	"title":"Kalimantan Utara", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-LA",
		        	"title":"Lampung", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-MA",
		        	"title":"Maluku", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-MU",
		        	"title":"Maluku Utara", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-NB",
		        	"title":"Nusa Tenggara Barat", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-NT",
		        	"title":"Nusa Tenggara Timur", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-PA",
		        	"title":"Papua", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-PB",
		        	"title":"Papua Barat", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-RI",
		        	"title":"Riau", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-SA",
		        	"title":"Sulawesi Utara", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-SB",
		        	"title":"Sumatera Barat", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-SG",
		        	"title":"Sulawesi Tenggara", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-SN",
		        	"title":"Sulawesi Selatan", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-SR",
		        	"title":"Sulawesi Barat", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-SS",
		        	"title":"Sumatera Selatan", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-ST",
		        	"title":"Sulawesi Tengah", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-SU",
		        	"title":"Sumatera Utara", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },
		        {
		        	"id":"ID-YO",
		        	"title":"Yogyakarta", 
		        	"color": "hsl(129, 80%, 77%)" 
		        },


		        {
					"id":"TL",
					"title":"Timor-Leste",
		        	"color": "#EEEEEE" 
				},
				{
					"id":"MY-12",
					"title":"Sabah",
		        	"color": "#EEEEEE" 
				},
				{
					"id":"MY-13",
					"title":"Sarawak",
		        	"color": "#EEEEEE" 
				},
				{
					"id":"BN",
					"title":"Brunei Darussalam",
		        	"color": "#EEEEEE" 
				}
		        ]
		    };

		    map.dataProvider = dataProvider;

		    map.areasSettings = {
		    	autoZoom: true,
		    	color: "hsl(129, 80%, 77%)",
		    	selectedColor: "#CC0000"
		    };

		    map.smallMap = new AmCharts.SmallMap();

		    map.write("mapdiv");

		});


</script> 
<script>
	$(document).ready(function(){
		// lihat ke www.highcharts.com
		$('#grafik_prestasi_sekolah').highcharts({
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
