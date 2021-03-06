@extends('layouts.topmenu')
@section('content')

<div id="content">	
	<!-- header -->
	<div id="breadcrumb" class="row hidden" style="margin-top:30px;text-align:left;">		
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
	<div class="row" style="margin-top:40px;text-align:center;">
		<div class="col-sm-12">
			<h2>Pengisian Nilai Siswa</h2>
			<form style="display:block;">			
			  	<div class="form-group">
			    	<!-- <label for="f_file">File</label> -->
			    	<input type="file" id="f_file" />
			    	<p class="help-block">Silahkan masukkan file excel berisi daftar nilai sesuai format yang sudah ada.</p>
			  	</div>		  	
			  	<button type="" class="btn btn-success">Kirim</button>
			</form>		
		</div>
	</div>
	<!-- form content -->
	<div class="row" style="margin-top:40px;text-align:center; ">
		<div class="col-sm-12">
			<h2>Pencarian Anak</h2>
			<form style="display:block;">
				<div class="form-group text-left">
			    	<label for="f_nama_anak" class="text-left">Nama Anak</label>
			    	<input type="text" class="form-control" id="f_nama_anak" placeholder="" />
			  	</div>
				<div class="form-group text-left">
			    	<label for="f_kelas" class="text-left">Kelas</label>
			    	<input type="text" class="form-control" id="f_kelas" placeholder="" />
			  	</div>		  	
			  	<button type="" class="btn btn-info">Cari</button>
			</form>
		</div>	
	</div>	

	<!-- table content daftar siswa -->	
	<div class="row" style="margin-top:40px;margin-left:auto;margin-right:auto;">
	<button type="button" class="btn btn-success">Tambah Siswa</button>

		<table class="table">
		    <thead>
		      	<tr>		      		
		        	<th width="">Nama Lengkap</th>		        			        		       
		        	<th width="">Kelas</th>
			        <th width="">Rata-Rata</th>
			        <th class="hidden-xs" width="">Prestasi</th>
			        <th width=""></th>
		      	</tr>
		    </thead>
		    <tbody>
		    	@for($i = 0 ; $i < 5 ; $i++)
		      	<tr>
		        	<td data-toggle="modal" data-target=".popup_request_kid_detail">(nama lengkap)</td>
		        	<td data-toggle="modal" data-target=".popup_request_kid_detail">(kelas)</td>	
		        	<td data-toggle="modal" data-target=".popup_request_kid_detail">(nilai rata-rata)</td>			        
			        <td class="hidden-xs">
			        	<ul>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        		<li><a href="#" data-toggle="modal" data-target=".popup_achievement_detail">(prestasi)</a></li>
			        	</ul>
			        </td>
			        <td> 
			        	<a href="javascript:void(0)" class="glyphicon glyphicon-plus" data-toggle="modal" data-target=".popup_add_kid_achievement"></a>
			        </td>
		      	</tr>
		      	@endfor    
		    </tbody>
		 </table>
	</div>
	
</div>

@include('school.popup_add_kid_achievement') 


@include('popup_request_kid_detail')
@include('popup_achievement_detail')


@stop
