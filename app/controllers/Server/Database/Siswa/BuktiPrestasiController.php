<?php

class BuktiPrestasiController extends BaseController{


	public function tambah_bukti_prestasi(){
		$id_prestasi = Input::get('id_prestasi');
		$tipe = Input::get('tipe');
		$file = Input::get('file');

		// save to database
		$bukti_prestasi = new Bukti_Prestasi();
		$bukti_prestasi->id_prestasi = $id_prestasi;
		$bukti_prestasi->tipe = $tipe;
		$bukti_prestasi->file = $file;
		$result = $bukti_prestasi->save();

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_bukti_prestasi(){
		$input = array();
		$input['id_prestasi'] = Input::get('id_prestasi');
		$input['tipe'] = Input::get('tipe');
		$input['file'] = Input::get('file');

		// save edited data to database
		$id = Input::get('id');
		$bukti_prestasi = Bukti_Prestasi::find($id);
		$result = $bukti_prestasi->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal"
		}
	}

	public function delete_bukti_prestasi($id){
		$bukti_prestasi = Bukti_Prestasi::find($id);
		$bukti_prestasi->deleted_by = Auth::id();
		$bukti_prestasi->save();
		$result = $bukti_prestasi->delete();

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function get_all_bukti_prestasi(){
		return Bukti_Prestasi::all();
	}

}