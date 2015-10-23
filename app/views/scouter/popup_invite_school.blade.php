<div class="modal fade popup_invite_school" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Undang Acara</h4>
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
							Tanggal
						</label>
						<div class="col-xs-6">
							{{ Form::text('tanggal', Input::old('tanggal'), array('id' => 'f_tanggal', 'class'=>'form-control')) }}
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
				</form>
			</div>
			<div class="modal-footer">												
				<input type="button" id="f_request" class="btn btn-success pull-right" value="Kirim" />				
			</div>
		</div>
	</div>
</div>

<script>
	jQuery('#f_tanggal').datetimepicker({
		lang:'en',
		i18n:{
			en:{
				months:[
				'Januari','Februari','Maret','April',
				'Mei','Juni','Juli','Agustus',
				'September','Oktober','November','Desember',
				],
				dayOfWeek:[
				"Ming.", "Sen.", "Sel.", "Rab.", 
				"Kam.", "Jum.", "Sab.",
				]

			}
		},
		timepicker:false,
		format: 'Y-m-d',
		yearStart: '1900'
	});
</script>