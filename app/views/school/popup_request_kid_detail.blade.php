<div class="modal fade popup_request_kid_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Detail Anak</h4>
			</div>
			<div class="modal-body">
				<div class="col-md-6">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-3">
								Nama
							</label>
							<div class="col-md-9">
								<p class="control-static">
									Someone Somehow
								</p>
							</div>
						</div>	

						<div class="form-group">
							<label class="col-md-3">
								Alamat
							</label>
							<div class="col-md-9">
								<p class="control-static">
									Jl. Something No. Sekian
								</p>
							</div>
						</div>	

						<div class="form-group">
							<label class="col-md-3">
								Umur
							</label>
							<div class="col-md-9">
								<p class="control-static">
									18
								</p>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-3">
								Sekolah
							</label>
							<div class="col-md-9">
								<p class="control-static">
									SMA Entah Dimana
								</p>
							</div>
						</div>	
					</div>
				</div>
				<div class="col-md-6">
					<img src="{{asset('assets/img/default_pp_icon.png')}}" height="150px">
				</div>
				<span class="clearfix"></span>
				<h4>Daftar Nilai</h4>
				<table class="table table-bordered table-condensed">
					<thead>
						<tr>
							<th>
								Pelajaran
							</th>
							<th>
								U1
							</th>
							<th>
								U2
							</th>
							<th>
								U3
							</th>
							<th>
								U4
							</th>
							<th>
								U5
							</th>
							<th>
								UTS
							</th>
							<th>
								U6
							</th>
							<th>
								U7
							</th>
							<th>
								U8
							</th>
							<th>
								U9
							</th>
							<th>
								U10
							</th>
							<th>
								UAS
							</th>
						</tr>
					</thead>
					<tbody>
						@for($i=0; $i< 3; $i++)

						<tr>
							<td>
								Matematika
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
							<td>
								90
							</td>
						</tr>
						@endfor
					</tbody>
				</table>
				<span class="clearfix"></span>
				<h4>Daftar Prestasi</h4>
				<table class="table">
					<thead>
						<tr>
							<th>
								Nama Kejuaraan
							</th>
							<th>
								Juara
							</th>
							<th>
								Tanggal
							</th>
						</tr>
					</thead>
					<tbody>
						<tr data-toggle="modal" data-target=".popup_achievement_detail">
							<td>
								<span>Prestasi Bidang X</span>
							</td>
							<td>
								1
							</td>
							<td>
								2012-11-06
							</td>
						</tr>
						<tr data-toggle="modal" data-target=".popup_achievement_detail">
							<td>
								<span>Prestasi Bidang X</span>
							</td>
							<td>
								-
							</td>
							<td>
								2012-09-06
							</td>
						</tr>
						<tr data-toggle="modal" data-target=".popup_achievement_detail">
							<td>
								<span>Prestasi Bidang X</span>
							</td>
							<td>
								2
							</td>
							<td>
								2012-01-06
							</td>
						</tr>
						<tr data-toggle="modal" data-target=".popup_achievement_detail">
							<td>
								<span>Prestasi Bidang X</span>
							</td>
							<td>
								1
							</td>
							<td>
								2012-12-06
							</td>
						</tr>
						<tr data-toggle="modal" data-target=".popup_achievement_detail">
							<td>
								<span>Prestasi Bidang X</span>
							</td>
							<td>
								1
							</td>
							<td>
								2013-11-06
							</td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="modal-fotter">
			</div>
		</div>
	</div>
</div>

<script>
</script>