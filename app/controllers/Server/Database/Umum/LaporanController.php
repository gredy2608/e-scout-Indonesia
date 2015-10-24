<?php

class LaporanController extends BaseController{

	public function tambah_laporan(){
		$no_ktp_pelapor = Input::get('no_ktp_pelapor');
		$nama_pelapor = Input::get('nama_pelapor');
		$email_pelapor = Input::get('email_pelapor');
		$no_telepon_pelapor = Input::get('no_telepon_pelapor');
		$nama_anak = Input::get('nama_anak');
		$umur_anak = Input::get('umur_anak');
		$sekolah_anak = Input::get('sekolah_anak');
		$alamat_anak = Input::get('alamat_anak');
		$kota_anak = Input::get('kota_anak');
		$keterangan = Input::get('keterangan');

		//save to database
		$laporan_baru = new Laporan();
		$laporan_baru->no_ktp_pelapor = $no_ktp_pelapor;
		$laporan_baru->nama_pelapor = $nama_pelapor;
		$laporan_baru->email_pelapor = $email_pelapor;
		$laporan_baru->no_telepon_pelapor = $no_telepon_pelapor;
		$laporan_baru->nama_anak = $nama_anak;
		$laporan_baru->umur_anak = $umur_anak;
		$laporan_baru->sekolah_anak = $sekolah_anak;
		$laporan_baru->alamat_anak = $alamat_anak;
		$laporan_baru->kota_anak = $kota_anak;
		$laporan_baru->keterangan = $keterangan;

		$result = $laporan_baru->save();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_laporan(){
		$input = array();
		$input['no_ktp_pelapor'] = Input::get('no_ktp_pelapor');
		$input['nama_pelapor'] = Input::get('nama_pelapor');
		$input['email_pelapor'] = Input::get('email_pelapor');
		$input['no_telepon_pelapor'] = Input::get('no_telepon_pelapor');
		$input['nama_anak'] = Input::get('nama_anak');
		$input['umur_anak'] = Input::get('umur_anak');
		$input['sekolah_anak'] = Input::get('sekolah_anak');
		$input['alamat_anak'] = Input::get('alamat_anak');
		$input['kota_anak'] = Input::get('kota_anak');
		$input['keterangan'] = Input::get('keterangan');

		// save edited data to database
		$id = input::get('id');
		$laporan = Laporan::find($id);
		$result = $laporan->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_laporan($id){
		$laporan = Laporan::find($id);
		$laporan->deleted_by = Auth::id();
		$laporan->save();
		$result = $laporan->delete();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function get_all_laporan(){
		return Laporan::all();
	}

}