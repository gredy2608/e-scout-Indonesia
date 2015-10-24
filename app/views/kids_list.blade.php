@extends('layouts.topmenu')
@section('content')

<div id="content" class="container-fluid">	
	<!-- header -->
	<div id="header" class="row" style="margin-top:40px;text-align:center;">		
	<div class="col-sm-10 col-sm-push-1">		
		<h1>Daftar Anak Berprestasi</h1>	
		<p style="">
			Berikut ini daftar anak-anak berprestasi yang telah dikumpulkan Anda semua.	Anda dapat
			mengirimkan permintaan berupa penambahan data anak atau mengoreksi data anak jika terjadi
			kesalahan data. Silahkan klik tombol di bawah ini untuk melakukan permintaan.			
		</p>				
		<!-- <div class="row" style="margin-top:20px;text-align:center;">			
			<a href="#{{-- URL::to('/') --}}">
				<button class="btn btn-success">Laporkan</button>
			</a>
		</div> -->
	</div>	
	</div>	
	<!-- form content -->
	<div class="row" style="">
		<div class="col-sm-10 col-sm-push-1">		

		<h2>Form Pencarian</h2>
		<form style="display:inline-block;">
			<div class="form-group">
		    	<label for="f_nama_anak">Nama Anak</label>
		    	<input type="text" class="form-control" id="f_nama_anak" placeholder="" />
		  	</div>
			<div class="form-group">
		    	<label for="f_nama_sekolah">Nama Sekolah</label>
		    	<input type="text" class="form-control" id="f_nama_sekolah" placeholder="" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_kota">Kota</label>
		    	<input type="text" class="form-control" id="f_kota" placeholder="" />
		  	</div>		  		  
		  	<button type="" class="btn btn-info">Cari</button>
		</form>
	</div>
	</div>
	<!-- table content daftar sekolah -->	
	<!-- <div class="row" style="margin-top:40px;margin-left:auto;margin-right:auto;">
		<table class="table">
		    <thead>
		      	<tr>
		        	<th width="30%">Nama Sekolah</th>
		        	<th width="10%">Umur</th>			        
			        <th width="45%">Prestasi</th>
			        <th width="15%"></th>
		      	</tr>
		    </thead>
		    <tbody>
		      	<tr>
		        	<td>(nama sekolah)</td>
		        	<td>(umur)</td>			        
			        <td>
			        	<ul>
			        		<li>(prestasi)</li>
			        		<li>(prestasi)</li>
			        		<li>(prestasi)</li>
			        	</ul>
			        </td>
			        <td>
			        	<button class="btn btn-info pull-right">
			        		detail info
			        	</button>
			        </td>
		      	</tr>
		      		      	
		    </tbody>
		 </table>
	</div> -->
	<!-- table content daftar siswa -->	
	<div class="row" style="margin-top:40px;margin-left:auto;margin-right:auto;">
		<table class="table">
		    <thead>
		      	<tr>
		        	<th width="30%">Nama Lengkap</th>
		        	<th width="10%">Umur</th>			        
		        	<th width="10%">Kelas</th>			        
			        <th width="40%">Prestasi</th>
			        <th width="10%"></th>
		      	</tr>
		    </thead>
		    <tbody>
		    	@for($i = 0 ; $i < 5 ; $i++)
		      	<tr data-toggle="modal" data-target=".popup_request_kid_detail">
		        	<td>(nama lengkap)</td>
		        	<td>(umur)</td>	
		        	<td>(kelas)</td>
			        <td>
			        	<ul>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        	</ul>
			        </td>
			        <td class="hidden-xs">
			        	<button class="btn btn-info pull-right" >
			        		detail info
			        	</button>
			        </td>
		      	</tr>
				@endfor		      		      
		    </tbody>
		 </table>
	</div>
	
</div>

@include('popup_request_kid_detail')
@include('popup_achievement_detail')

@stop
