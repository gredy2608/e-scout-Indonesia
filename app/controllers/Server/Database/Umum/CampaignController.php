<?php

class CampaignController extends BaseController{

	public function tambah_campaign(){
		$no_ktp_penggagas_campaign = Input::get('no_ktp_penggagas_campaign');
		$nama_penggagas_campaign = Input::get('nama_penggagas_campaign');
		$email_penggagas_campaign = Input::get('email_penggagas_campaign');
		$no_telepon_penggagas_campaign = Input::get('no_telepon_penggagas_campaign');
		$nama_campaign = Input::get('nama_campaign');
		$detail_campaign = Input::get('detail_campaign');
		$id_anak = Input::get('id_anak');

		// save to database
		$campaign_baru = new Campaign();
		$campaign_baru->no_ktp_penggagas_campaign = $no_ktp_penggagas_campaign;
		$campaign_baru->nama_penggagas_campaign = $nama_penggagas_campaign;
		$campaign_baru->email_penggagas_campaign = $email_penggagas_campaign;
		$campaign_baru->no_telepon_penggagas_campaign = $no_telepon_penggagas_campaign;
		$campaign_baru->nama_campaign = $nama_campaign;
		$campaign_baru->detail_campaign = $detail_campaign;
		$campaign_baru->id_anak = $id_anak;

		$result = $campaign_baru->save();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_campaign(){
		$input = array();
		$input['no_ktp_penggagas_campaign'] = Input::get('no_ktp_penggagas_campaign');
		$input['nama_penggagas_campaign'] = Input::get('nama_penggagas_campaign');
		$input['email_penggagas_campaign'] = Input::get('email_penggagas_campaign');
		$input['no_telepon_penggagas_campaign'] = Input::get('no_telepon_penggagas_campaign');
		$input['nama_campaign'] = Input::get('nama_campaign');
		$input['detail_campaign'] = Input::get('detail_campaign');
		$input['id_anak'] = Input::get('id_anak');
		$input['approved'] = Input::get('approved');
		$input['done'] = Input::get('done');

		// save edited data to database
		$id = Input::get('id');
		$campaign = Campaign::find($id);
		$result = $campaign->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_campaign($id){
		$campaign = Campaign::find($id);
		$campaign->deleted_by = Auth::id();
		$campaign->save();
		$result = $campaign->delete();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function get_all_campaign(){
		return Campaign::all();
	}
}