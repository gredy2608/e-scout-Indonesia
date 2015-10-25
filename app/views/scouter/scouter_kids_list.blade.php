@extends('layouts.topmenu')
@section('content')

<div id="content">	
	<!-- header -->
	<div id="breadcrumb" class="row hidden" style="margin-top:30px;text-align:left;">		
		<a href="#">Scouter</a>		
		/
		<a href="#">Daftar Anak</a>
	</div>
	<div id="header" class="row" style="margin-top:40px;text-align:center;">		
		<h1>Daftar Anak Berprestasi</h1>	
		<p style="display:block;margin-left:auto;margin-right:auto;width:60%;">
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
	<!-- form content -->
	<div class="row" style="margin-top:40px;text-align:center;margin-left:auto;margin-right:auto;">
		<h2>Form Pencarian</h2>
		<form class="col-md-4 col-md-push-4" style="display:block;">
			<div class="form-group text-left">
		    	<label class="text-left" for="f_nama_anak">Nama Anak</label>
		    	<input type="text" class="form-control" id="f_nama_anak" placeholder="" />
		  	</div>
			<div class="form-group text-left">
		    	<label class="text-left" for="f_nama_sekolah">Nama Sekolah</label>
		    	<input type="text" class="form-control" id="f_nama_sekolah" placeholder="" />
		  	</div>
			<div class="form-group text-left">
		    	<label class="text-left" for="f_kota">Kota</label>
		    	<input type="text" class="form-control" id="f_kota" placeholder="" />
		  	</div>		  		  
		  	<button type="" class="btn btn-info">Cari</button>
		</form>
	</div>	
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
		    	@for($i = 0 ; $i < 10 ; $i++)
		      	<tr>
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
			        <td>
			        	<button class="btn btn-info pull-right" data-toggle="modal" data-target=".popup_invite_kid" style="margin:5px;">
			        		undang acara
			        	</button>
			        	<button class="btn btn-info pull-right" data-toggle="modal" data-target=".popup_add_kid_achievement" style="margin:5px;">
			        		tambah prestasi
			        	</button>
			        </td>
		      	</tr>		      		    
		      	@endfor  
		    </tbody>
		 </table>
	</div>
	
</div>

@include('scouter.popup_invite_kid')
@include('scouter.popup_add_kid_achievement')
@include('scouter.popup_achievement_detail')

@stop
