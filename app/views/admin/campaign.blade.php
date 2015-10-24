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
		        	<th width="">Nama</th>		        	
		        	<th width="">Kuota</th>		        	
		        	<th width="">Tanggal</th>		        	
		        	<th width="">Jam</th>
					<th width="">Tempat</th>
		      	</tr>
		    </thead>
		    <tbody>
		    	@for($i = 0 ; $i < 5 ; $i++)
		      	<tr>
		        	<td width="">(Nama)</td>		        	
		        	<td width="">(Kuota)</td>		        	
		        	<td width="">(Tanggal)</td>		        	
		        	<td width="">(Jam)</td>
					<td width="">(Tempat)</td>     			        
		      	</tr>
				@endfor		      		      
		    </tbody>
		 </table>
	</div>
</div>

@stop