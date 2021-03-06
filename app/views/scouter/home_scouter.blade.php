@extends('layouts.topmenu')
@section('content')

<div id="content" class="col-sm-12">	
	<!-- header -->
	<div id="breadcrumb" class="row hidden-xs hidden" style="margin-top: 15px;">		
		<a href="#">Scouter</a>				
	</div>
	<div class="col-md-2 hidden-xs front-sidebar hidden" style="background: #123; margin-left: -30px;">
	fsdfdsfds
	</div>
	<!-- <div class="col-md-12"> -->
		<div id="header" class="row" style="margin-top:30px;text-align:center;">		
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
	<!-- 	<div class="row"> 
		<div id="mapdiv" style="background-color:#EEEEEE; height: 300px; margin-left: -15px;  margin-right: -15px; "></div> 
		</div> -->

		<!-- anak berprestasi -->
		<div class="container">
		<div id="anak_berprestasi" class="row" style="margin-top:40px;">
			<h1 style="text-align:center;">Daftar Siswa Indonesia</h1>
			
				<table class="table">
					<thead>
						<tr>
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
								Tanggal Lahir
							</th>
							<th class="hidden-xs"> 
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($list_siswa_berprestasi_tidak_sekolah->prestasi as $siswa_no)
						<tr>
							<td data-toggle="modal" data-target=".popup_request_kid_detail">
								<a href="javascript:void(0)">{{Akta::find($siswa_no->id->id_akta_lahir)->nama}}</a>
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

						@endforeach

					</tbody>
				</table>	
			<div class="row" style="margin-top:20px;text-align:center;">			
				<a class="btn btn-warning" href="{{ URL::to('/scouter_kids_list') }}">
					Lihat Anak Lainnya 
				</a>
			</div>
		</div>	
		</div>	
		<!-- kota berprestasi -->
		<!-- <div id="kota_berprestasi" class="row" style="margin-top:40px;">
			<h1 style="text-align:center;">Kota Berprestasi</h1>
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
		</div> -->	
	<!-- </div> -->
</div>

@include('popup_request_kid_detail')
@include('popup_achievement_detail')

<script>
	$(document).ready(function(){

	});
</script>


@stop
