<div class="modal fade popup_request_kid_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Permintaan Detail Anak</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">	
					<div class="form-group">
						<label class="col-xs-4 control-label">
							Email Anda
						</label>
						<div class="col-xs-4">
							{{ Form::text('email', Input::old('email'), array('id' => 'f_email', 'class'=>'form-control')) }}
						</div>
						<div class="col-xs-2">
							<input type="button" id="f_request" class="btn btn-success" value="Kirim" />				
						</div>						
					</div>													
				</form>
			</div>
		</div>
	</div>
</div>

<script>
</script>