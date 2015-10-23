@extends('layouts.topmenu')
@section('content')

<div id="content">	
	<!-- header -->
	<div id="breadcrumb" class="row" style="margin-top:30px;text-align:left;">		
		<a href="#">Scouter</a>		
		/
		<a href="#">Daftar Sekolah</a>
	</div>
	<div id="header" class="row" style="margin-top:40px;text-align:center;">		
		<h1>Daftar Sekolah</h1>	
		<p style="display:block;margin-left:auto;margin-right:auto;width:60%;">
			Berikut ini daftar sekolah-sekolah yang telah dikumpulkan oleh kami. Anda dapat
			melihat sekolah mana saja yang menjadi bagian dari sistem ini. 
			Silahkan klik tombol di bawah ini untuk melakukan pencarian sekolah.			
		</p>				
		<!-- <div class="row" style="margin-top:20px;text-align:center;">			
			<a href="#{{-- URL::to('/') --}}">
				<button class="btn btn-success">Laporkan</button>
			</a>
		</div> -->
	</div>	
	<!-- form content -->
	<div class="row" style="margin-top:40px;width:50%;text-align:center;margin-left:auto;margin-right:auto;">
		<h2>Form Pencarian</h2>
		<form style="display:inline-block;">			
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
	<!-- 
		NOTE :
		dari daftar kelas di table ini, kalau di klik
		sambungin langsung ke halaman kids_list
		munculin semua daftar anaknya
		dengan filter : namasekolah, kota, kelas 
	-->
	<!-- table content daftar sekolah -->	
	<div class="row" style="margin-top:40px;margin-left:auto;margin-right:auto;">
		<table class="table">
		    <thead>
		      	<tr>
		        	<th width="25%">Nama Sekolah</th>
		        	<th width="30%">Alamat</th>			        
			        <th width="20%">Telepon</th>
			        <th width="15%">Kelas</th>			        
			        <th width="10%"></th>			        
		      	</tr>
		    </thead>
		    <tbody>
		    	@for($i = 0 ; $i < 10 ; $i++)
		      	<tr>
		        	<td>(nama sekolah)</td>
		        	<td>(alamat)</td>			        
		        	<td>(telepon)</td>
			        <td>
			        	<ul>
			        		<li> <a href="#">10</a> </li>
			        		<li> <a href="#">11</a> </li>
			        		<li> <a href="#">12</a> </li>
			        	</ul>
			        </td>			        
			        <td>
			        	<button class="btn btn-info pull-right" data-toggle="modal" data-target=".popup_invite_school">
			        		undang acara
			        	</button>
			        </td>
		      	</tr>		      	
		      	@endfor
		    </tbody>
		 </table>
	</div>	
	
</div>

@include('scouter.popup_invite_school')

@stop
