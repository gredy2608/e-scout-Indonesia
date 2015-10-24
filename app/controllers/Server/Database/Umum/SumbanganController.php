<?php

class SumbanganController extends BaseController{

	public function tambah_sumbangan(){
		$no_ktp_penyumbang = Input::get('no_ktp_penyumbang');
		$nama_penyumbang = Input::get('nama_penyumbang');
		$email_penyumbang = Input::get('email_penyumbang');
		$no_telepon_penyumbang = Input::get('no_telepon_penyumbang');
		$no_rekening_penyumbang = Input::get('no_rekening_penyumbang');
		$bank_tujuan = Input::get('bank_tujuan');
		$besar_uang_sumbangan = Input::get('besar_uang_sumbangan');
		$id_anak = Input::get('id_anak');

		// save data to database
		$sumbangan_baru = new Sumbangan();
		$sumbangan_baru->no_ktp_penyumbang = $no_ktp_penyumbang;
		$sumbangan_baru->nama_penyumbang = $nama_penyumbang;
		$sumbangan_baru->email_penyumbang = $email_penyumbang;
		$sumbangan_baru->no_telepon_penyumbang = $no_telepon_penyumbang;
		$sumbangan_baru->no_rekening_penyumbang = $no_rekening_penyumbang;
		$sumbangan_baru->bank_tujuan = $bank_tujuan;
		$sumbangan_baru->besar_uang_sumbangan = $besar_uang_sumbangan;
		$sumbangan_baru->id_anak = $id_anak;

		$result = $sumbangan_baru->save();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_sumbangan(){
		$input = array();
		$input['no_ktp_penyumbang'] = Input::get('no_ktp_penyumbang');
		$input['nama_penyumbang'] = Input::get('nama_penyumbang');
		$input['email_penyumbang'] = Input::get('email_penyumbang');
		$input['no_telepon_penyumbang'] = Input::get('no_telepon_penyumbang');
		$input['no_rekening_penyumbang'] = Input::get('no_rekening_penyumbang');
		$input['bank_tujuan'] = Input::get('bank_tujuan');
		$input['besar_uang_sumbangan'] = Input::get('besar_uang_sumbangan');
		$input['id_anak'] = Input::get('id_anak');
		$input['approved'] = Input::get('approved');
		$input['done'] = Input::get('done');

		// save edited data to database
		$id = Input::get('id');
		$sumbangan = Sumbangan::find($id);
		$result = $sumbangan->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_sumbangan($id){
		$sumbangan = Sumbangan::find($id);
		$sumbangan->deleted_by = Auth::id();
		$sumbangan->save();
		$result = $sumbangan->delete();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function get_all_sumbangan(){
		return Sumbangan::all();
	}

}