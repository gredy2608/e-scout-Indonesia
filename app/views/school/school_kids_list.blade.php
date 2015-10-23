@extends('layouts.topmenu')
@section('content')

<div id="content">	
	<!-- header -->
	<div id="breadcrumb" class="row" style="margin-top:30px;text-align:left;">		
		<a href="#">Sekolah</a>		
		/
		<a href="#">Daftar Anak</a>
	</div>
	<div id="header" class="row" style="margin-top:40px;text-align:center;">		
		<h1>Sekolah (NAMA SEKOLAH)</h1>	
		<!-- <p style="display:block;margin-left:auto;margin-right:auto;width:60%;">
			Selamat datang di halaman utama untuk akun sekolah. 
		</p>				
		<div class="row" style="margin-top:20px;text-align:center;">			
			<a href="{{ URL::to('/school_kids_list') }}">
				<button class="btn btn-success">Lihat Seluruh Siswa</button>
			</a>
		</div> -->
	</div>	
	<!-- form content -->
	<div class="row" style="margin-top:40px;width:50%;text-align:center;margin-left:auto;margin-right:auto;">
		<h2>Pengisian Nilai Siswa</h2>
		<form style="display:inline-block;">			
		  	<div class="form-group">
		    	<!-- <label for="f_file">File</label> -->
		    	<input type="file" id="f_file" />
		    	<p class="help-block">Silahkan masukkan file excel berisi daftar nilai sesuai format yang sudah ada.</p>
		  	</div>		  	
		  	<button type="" class="btn btn-success">Kirim</button>
		</form>		
	</div>
	<!-- form content -->
	<div class="row" style="margin-top:40px;width:50%;text-align:center;margin-left:auto;margin-right:auto;">
		<h2>Pencarian Anak</h2>
		<form style="display:inline-block;">
			<div class="form-group">
		    	<label for="f_nama_anak">Nama Anak</label>
		    	<input type="text" class="form-control" id="f_nama_anak" placeholder="" />
		  	</div>
			<div class="form-group">
		    	<label for="f_kelas">Kelas</label>
		    	<input type="text" class="form-control" id="f_kelas" placeholder="" />
		  	</div>		  	
		  	<button type="" class="btn btn-info">Cari</button>
		</form>
	</div>	
	<!-- table content daftar siswa -->	
	<div class="row" style="margin-top:40px;margin-left:auto;margin-right:auto;">
		<table class="table">
		    <thead>
		      	<tr>		      		
		        	<th width="25%">Nama Lengkap</th>		        			        		       
		        	<th width="13%">Kelas</th>
			        <th width="12%">Rata-Rata</th>
			        <th width="35%">Prestasi</th>
			        <th width="15%"></th>
		      	</tr>
		    </thead>
		    <tbody>
		    	@for($i = 0 ; $i < 5 ; $i++)
		      	<tr>
		        	<td>(nama lengkap)</td>
		        	<td>(kelas)</td>	
		        	<td>(nilai rata-rata)</td>			        
		        	<td>
			        	<ul>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        	</ul>
			        </td>
			        <td>
			        	<button class="btn btn-info pull-right" data-toggle="modal" data-target=".popup_add_kid_achievement">
			        		tambah prestasi
			        	</button>
			        </td>
		      	</tr>
		      	@endfor    
		    </tbody>
		 </table>
	</div>
	
</div>

@include('school.popup_add_kid_achievement')
@include('school.popup_achievement_detail')

@stop
