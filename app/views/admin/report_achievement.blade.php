@extends('layouts.topmenu_sidebar')
@section('content')

<div id="content">
	<!-- header -->
	<div id="header" class="row" style="">
		<div class="col-sm-10 col-sm-push-1">
			<h3>Report Achievement</h3>
			<!-- <p style="">
				Berikut ini daftar anak-anak berprestasi yang telah dikumpulkan Anda semua.	Anda dapat
				mengirimkan permintaan berupa penambahan data anak atau mengoreksi data anak jika terjadi
				kesalahan data. Silahkan klik tombol di bawah ini untuk melakukan permintaan.
			</p>				 -->
			<!-- <div class="row" style="margin-top:20px;text-align:center;">
				<a href="#{{-- URL::to('/') --}}">
					<button class="btn btn-success">Laporkan</button>
				</a>
			</div> -->
		</div>
	</div>
	<!-- table content daftar siswa -->
	<div class="row" style="margin-top:40px;margin-left:auto;margin-right:auto;">
		<table class="table">
		    <thead>
		      	<tr>
		        	<th width="">No KTP</th>
		        	<th width="">Nama</th>
		        	<th width="">Email</th>
		        	<th width="">Nama Anak</th>
		        	<th width="">Umur Anak</th>
							<th width="">Alamat Anak</th>
		        	<th width="">Keterangan</th>
		      	</tr>
		    </thead>
		    <tbody>
					@foreach($list_laporan as $laporan)
					<tr>
						<td>{{$laporan->no_ktp_pelapor}}</td>
						<td>{{$laporan->nama_pelapor}}</td>
						<td>{{$laporan->email_pelapor}}</td>
						<td>{{$laporan->nama_anak}}</td>
						<td>{{$laporan->umur_anak}}</td>
						<td>{{$laporan->alamat_anak}} {{$laporan->kota_anak}}</td>
						<td>{{$laporan->keterangan}} </td>
					</tr>
					@endforeach
		    </tbody>
		 </table>
	</div>
</div>

@include('admin.popup_achievement_detail')

@stop
