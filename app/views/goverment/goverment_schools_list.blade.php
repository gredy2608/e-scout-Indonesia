@extends('layouts.topmenu')
@section('content')

<div id="content">	
	<!-- header -->
	<div id="breadcrumb" class="row" style="margin-top:30px;text-align:left;">		
		<a href="#">Dinas</a>		
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
	<div class="row" style="margin-top:40px;text-align:center;margin-left:auto;margin-right:auto;">
		<h2>Form Pencarian</h2>
		<form style="display:block;">			
			<div class="form-group text-left">
		    	<label for="f_nama_sekolah">Nama Sekolah</label>
		    	<input type="text" class="form-control" id="f_nama_sekolah" placeholder="" />
		  	</div>
		  	<div class="form-group text-left">
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
		        	<th width="30%">Nama Sekolah</th>
		        	<th width="35%">Alamat</th>			        
			        <th width="20%">Telepon</th>
			        <th width="15%">Kelas</th>			        
		      	</tr>
		    </thead>
		    <tbody>
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
		      	</tr>
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
		      	</tr>
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
		      	</tr>
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
		      	</tr>
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
		      	</tr>	      	
		    </tbody>
		 </table>
	</div>	
	
</div>
@stop
