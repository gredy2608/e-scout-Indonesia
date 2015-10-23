<div class="modal fade popup_add_kid_achievement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Tambah Prestasi Anak</h4>
			</div>			
			<div class="modal-body">
				<form class="form-horizontal">	
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Nama Acara
						</label>
						<div class="col-xs-6">
							{{ Form::text('nama_acara', Input::old('nama_acara'), array('id' => 'f_nama_acara', 'class'=>'form-control')) }}
						</div>						
					</div>													
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Gelar Juara
						</label>
						<div class="col-xs-6">
							{{ Form::text('gelar_juara', Input::old('gelar_juara'), array('id' => 'f_gelar_juara', 'class'=>'form-control')) }}
						</div>						
					</div>													
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Keterangan
						</label>
						<div class="col-xs-6">
							{{ Form::textarea('keterangan', Input::old('keterangan'), array('id' => 'f_keterangan', 'class'=>'form-control')) }}
						</div>						
					</div>	
					<div class="form-group">
				    	<label class="col-xs-4 control-label" for="f_file">Foto Prestasi</label>
				    	<div class="col-xs-6">
				    		<input type="file" id="f_file" />
				    		<p class="help-block">Silahkan masukkan file berupa foto identitas atau kegiatan sang anak.</p>
				    	</div>				    	
				  	</div>													
				</form>
			</div>
			<div class="modal-footer">												
				<input type="button" id="f_request" class="btn btn-success pull-right" value="Kirim" />				
			</div>
		</div>
	</div>
</div>

<script>
</script>