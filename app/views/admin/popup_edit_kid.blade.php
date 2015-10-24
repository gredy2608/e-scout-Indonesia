<div class="modal fade popup_edit_kid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Kid</h4>
			</div>			
			<div class="modal-body">
				<form class="form-horizontal">	
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Nama
						</label>
						<div class="col-xs-6">
							{{ Form::text('nama', Input::old('nama'), array('id' => 'f_edit_nama', 'class'=>'form-control')) }}
						</div>						
					</div>													
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Alamat
						</label>
						<div class="col-xs-6">
							{{ Form::text('alamat', Input::old('alamat'), array('id' => 'f_edit_alamat', 'class'=>'form-control')) }}
						</div>						
					</div>		
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Umur
						</label>
						<div class="col-xs-6">
							{{ Form::text('umur', Input::old('umur'), array('id' => 'f_edit_umur', 'class'=>'form-control')) }}
						</div>						
					</div>	
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Sekolah
						</label>
						<div class="col-xs-6">
							{{ Form::text('sekolah', Input::old('sekolah'), array('id' => 'f_edit_sekolah', 'class'=>'form-control')) }}
						</div>						
					</div>											
					<!-- <div class="form-group">
						<label class="col-xs-4 control-label">
							Role
						</label>
						<div class="col-xs-6">
							<select class="form-control" id="f_edit_role">
								<option value="">Scouter</option>
								<option value="">Dinas</option>
								<option value="">Sekolah</option>
							</select>							
						</div>						
					</div>																												 -->
				</form>
			</div>	
			<div class="modal-footer">
				<input type="button" id="f_edit_kid" class="btn btn-info pull-right" value="Edit" />				
			</div>		
		</div>
	</div>
</div>

<script>
	
</script>