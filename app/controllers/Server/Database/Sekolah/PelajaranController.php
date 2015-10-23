<?php

class PelajaranController extends BaseController{

	public function tambah_pelajaran(){
		$nama_pelajaran = Input::get('nama_pelajaran');
		$tipe = Input::get('tipe');

		// save to database
		$pelajaran_baru = new Pelajaran();
		$pelajaran_baru->nama_pelajaran = $nama_pelajaran;
		$pelajaran_baru->tipe = $tipe;

		$result = $pelajaran_baru->save();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_pelajaran(){
		$input = array();
		$input['nama_pelajaran'] = Input::get('nama_pelajaran');
		$input['tipe'] = Input::get('tipe');

		// save edited data to database
		$id = Input::get('id');
		$pelajaran = Pelajaran::find($id);
		$result = $pelajaran->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_pelajaran($id){
		$pelajaran = Pelajaran::find($id);
		$pelajaran->deleted_by = Auth::id();
		$pelajaran->save();
		$result = $pelajaran->delete();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function get_all_pelajaran(){
		return Pelajaran::all();
	}

}