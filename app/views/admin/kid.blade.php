@extends('layouts.topmenu_sidebar')
@section('content')

<div id="content">	
	<!-- header -->
	<div id="header" class="row" style="">		
		<div class="col-sm-10 col-sm-push-1">		
			<h3>Kid</h3>
			<button class="btn btn-success pull-right" data-toggle="modal" data-target=".popup_add_kid">
        		Add New
        	</button>
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
		        	<th width="">Alamat</th>
		        	<th width="">Umur</th>
		        	<th width="">Sekolah</th>
		        	<th width="" class="hidden-xs"></th>					
		      	</tr>
		    </thead>
		    <tbody>
		    	@for($i = 0 ; $i < 5 ; $i++)
		      	<tr>
		        	<td>(nama)</td>
		        	<td>(alamat)</td>
		        	<td>(umur)</td>
		        	<td>(sekolah)</td>
		        	<td class="hidden-xs">			        	
			        	<button class="btn btn-danger pull-right" data-toggle="modal" data-target=".popup_delete_kid">
			        		Delete
			        	</button>
			        	<button class="btn btn-info pull-right" data-toggle="modal" data-target=".popup_edit_kid">
			        		Edit
			        	</button>
			        </td>
		      	</tr>
				@endfor		      		      
		    </tbody>
		 </table>
	</div>	
</div>

@include('admin.popup_add_kid')
@include('admin.popup_edit_kid')
@include('admin.popup_delete_kid')

@stop