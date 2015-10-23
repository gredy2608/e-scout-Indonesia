<?php

class EventController extends BaseController{

	public function tambah_event(){
		$nama_event = Input::get('nama_event');
		$tingkat_perlombaan = Input::get('tingkat_perlombaan');
		$alamat_lokasi = Input::get('alamat_lokasi');
		$kota = Input::get('kota');
		$tanggal_pelaksanaan = Input::get('tanggal_pelaksanaan');
		$deskripsi = Input::get('deskripsi');

		$event_baru = new Event();
		$event_baru->nama_event = $nama_event;
		$event_baru->tingkat_perlombaan = $tingkat_perlombaan;
		$event_baru->alamat_lokasi = $alamat_lokasi;
		$event_baru->kota = $kota;
		$event_baru->tanggal_pelaksanaan = $tanggal_pelaksanaan;
		$event_baru->deskripsi = $deskripsi;
		$result = $event_baru->save();

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_event(){
		$input = array();
		$input['nama_event'] = Input::get('nama_event');
		$input['tingkat_perlombaan'] = Input::get('tingkat_perlombaan');
		$input['alamat_lokasi'] = Input::get('alamat_lokasi');
		$input['kota'] = Input::get('kota');
		$input['tanggal_pelaksanaan'] = Input::get('tanggal_pelaksanaan');
		$input['deskripsi'] = Input::get('deskripsi');

		// save edited data to database
		$id = Input::get('id');
		$event = Event::find($id);
		$result = $event->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_event($id){
		$event = Event::find($id);
		$event->deleted_by = Auth::id();
		$event->save();
		$result = $event->delete();

		if($result){
			return "Berhasil";
		}else{
			return "Gagal"
		}
	}

	public function get_all_event(){
		return Event::all();
	}

}