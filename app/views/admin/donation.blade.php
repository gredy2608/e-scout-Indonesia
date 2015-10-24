@extends('layouts.topmenu_sidebar')
@section('content')

<div id="content">
	<!-- header -->
	<div id="header" class="row" style="">
		<div class="col-sm-10 col-sm-push-1">
			<h3>Donation</h3>
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
		        	<th width="">No Rekening</th>
		        	<th width="">Nama</th>
		        	<th width="">Donasi</th>
					<th width="">Tanggal Transaksi</th>
		      	</tr>
		    </thead>
		    <tbody>
					@foreach($list_donasi as $donasi)
					<tr>
						<td>{{$donasi->no_rekening_penyumbang}}</td>
						<td>{{$donasi->nama_penyumbang}}</td>
						<td>Rp. {{$donasi->besar_uang_sumbangan}},00</td>
						<td>{{$donasi->created_at}}</td>
					</tr>
					@endforeach
		    </tbody>
		 </table>
	</div>
</div>

@stop
