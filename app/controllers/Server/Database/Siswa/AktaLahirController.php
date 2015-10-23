<?php

class AktaLahirController extends BaseController{

	public function tambah_akta_lahir(){
		$kode_akta_lahir = Input::get('kode_akta_lahir');
		$nama = Input::get('nama');
		$tanggal_lahir = Input::get('tanggal_lahir');

		// save to database
		$akta_lahir = new Akta();
		$akta_lahir->kode_akta_lahir = $kode_akta_lahir;
		$akta_lahir->nama = $nama;
		$akta_alhir->tanggal_lahir = $tanggal_lahir;

		$result = $akta_lahir->save();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_akta_lahir(){
		$input = array();
		$input['kode_akta_lahir'] = Input::get('kode_akta_lahir');
		$input['nama'] = Input::get('nama');
		$input['tanggal_lahir'] = Input::get('tanggal_lahir');

		// save edited data to database
		$id = Input::get('id');
		$akta_lahir = Akta::find($id);
		$result = $akta_lahir->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_akta_lahir($id){
		$akta_lahir = Akta::find($id);
		$akta_lahir->deleted_by = Auth::id();
		$akte_lahir->save();
		$result = $akte_lahir->delete();

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public get_all_akta_lahir(){
		return Akta::all();
	}

}