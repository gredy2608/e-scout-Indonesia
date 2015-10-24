@extends('layouts.topmenu')
@section('content')

<div id="content">
	<!-- header -->
	<div id="header" class="row gradient-violet" style="padding-bottom: 15px;">
		<h1 class="text-center">Scout Now!</h1>
		<p class="col-sm-10 col-sm-push-1" style="display:block;margin-left:auto;margin-right:auto;">
			Disinilah tugas kita sebagai warga negara yang baik melakukan tugasnya. Pada formulir di bawah ini
			kita dapat melaporkan anak muda bangsa kita yang memiliki talenta luar biasa. Siapa saja anak yang
			Anda rasa memiliki potensi yang besar, dapat langsung dilaporkan kepada kami. Isinya formulir di
			bawah ini dengan sebenar-benarnya demi kemajuan anak bangsa yang lebih baik. Merdeka !!
		</p>
	</div>
	<!-- form content -->
	<div class="row" style="padding-top: 20px;">
		<form class="col-sm-10 col-sm-push-1" id="laporan_form" style="display:inline-block;">
			<div class="form-group">
				<label for="subjek">Subjek</label>
				<div class="radio radio-primary">
					<label>
						<input type="radio" name="subjek" value="0" checked="">
						Anak Putus Sekolah
					</label>
				</div>
				<div class="radio radio-primary" style="margin-top: 14px;">
					<label>
						<input type="radio" name="subjek" value="1">
						Anak Berprestasi
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="f_no_ktp">Nomor KTP</label>
				<input type="text" class="form-control" name="no_ktp" placeholder="Nomor KTP" id="f_no_ktp" />
			</div>
		  	<div class="form-group">
		    	<label for="f_nama">Nama Lengkap</label>
		    	<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" id="f_nama"/>
		  	</div>
		  	<div class="form-group">
		    	<label for="f_email">Email</label>
		    	<input type="email" class="form-control" name="email" id="f_email" placeholder="saya@mail.com" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_no_telepon">Nomor Telepon</label>
		    	<input type="text" class="form-control" name="no_telp" id="f_no_telepon" placeholder="" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_nama_anak">Nama Anak</label>
		    	<input type="text" class="form-control" name="nama_anak" id="f_nama_anak" placeholder="" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_umur_anak">Umur Anak</label>
		    	<input type="number" class="form-control" name="umur_anak" id="f_umur_anak" placeholder="" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_umur_anak">Alamat Anak</label>
		    	<input type="text" class="form-control" name="alamat_anak" id="f_umur_anak" placeholder="" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_sekolah_anak">Sekolah Anak</label>
		    	<input type="text" class="form-control" name="sekolah_anak" id="f_sekolah_anak" placeholder="" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_kota_anak">Kota Anak</label>
		    	<input type="text" class="form-control" name="kota_anak" id="f_kota_anak" placeholder="" />
		  	</div>
		  	<div class="form-group">
		    	<label for="f_keterangan">Keterangan</label>
		    	<textarea class="form-control" rows="6" id="f_keterangan" name="keterangan" placeholder=""></textarea>
		  	</div>
		  	<div class="form-group">
		    	<label for="f_file">File</label>
		    	<input type="file" id="f_file" />
		    	<p class="help-block">Silahkan masukkan file berupa foto identitas atau kegiatan sang anak.</p>
		  	</div>
		  	<button type="submit" class="btn btn-success" style="margin-right: auto; margin-left: auto; display: block;">Laporkan</button>
		</form>
	</div>

</div>
<script>
	$('body').on('submit','#laporan_form',function(e){
		e.preventDefault();
		$data = $(this).serialize();
		$.post("{{URL::to('/laporan')}}",$data,function(response){
			alert(response);
			location.reload();
		})
	});
</script>
@stop
