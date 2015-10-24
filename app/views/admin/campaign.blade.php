@extends('layouts.topmenu_sidebar')
@section('content')

<div id="content">
	<!-- header -->
	<div id="header" class="row" style="">
		<div class="col-sm-10 col-sm-push-1">
			<h3>Campaign</h3>
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
		        	<th width="">Nama Kampanye</th>
		        	<th width="">Nama Anak</th>
		        	<th width="">Nama Penggagas Kampanye</th>
		        	<th width="">E-mail Penggagas</th>
							<th width="">Detail Kampanye</th>
		      	</tr>
		    </thead>
		    <tbody>
					@foreach($list_campaign as $campaign)
					<tr>
						<td width="">{{$campaign->nama_campaign}}</td>
						<td width="">{{Akta::find($campaign->id_anak)->nama}}</td>
						<td width="">{{$campaign->nama_penggagas_campaign}}</td>
						<td width="">{{$campaign->email_penggagas_campaign}}</td>
						<td width="">{{$campaign->detail_campaign}}</td>
					</tr>
					@endforeach
		    </tbody>
		 </table>
	</div>
</div>

@stop
