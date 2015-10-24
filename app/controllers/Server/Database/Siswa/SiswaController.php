<?php

class SiswaController extends BaseController{

	public function tambah_siswa(){
		$id_akta_lahir = Input::get('id_akta_lahir');
		$NISN = Input::get('NISN');
		$jenis_kelamin = Input::get('jenis_kelamin');
		$alamat = Input::get('alamat_siswa');
		$kota = Input::get('kota_siswa');
		$kode_pos = Input::get('kode_pos_siswa');

		// save to database
		$siswa_baru = new Siswa();
		$siswa_baru->id_akta_lahir = $id_akta_lahir;
		$siswa_baru->NISN = $NISN;
		$siswa_baru->jenis_kelamin = $jenis_kelamin;
		$siswa_baru->alamat = $alamat;
		$siswa_baru->kota = $kota;
		$siswa_baru->kode_pos = $kode_pos;

		$result = $siswa_baru->save();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_siswa(){
		$input = array();
		$input['id_akta_lahir'] = Input::get('id_akta_lahir');
		$input['NISN'] = Input::get('NISN');
		$input['jenis_kelamin'] = Input::get('jenis_kelamin');
		$input['alamat'] = Input::get('alamat_siswa');
		$input['kota'] = Input::get('kota_siswa');
		$input['kode_pos'] = Input::get('kode_pos_siswa');

		// save edited data to database
		$id = Input::get('id');
		$siswa = Siswa::find($id);

		$result = $siswa->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_siswa($id){
        $siswa = Siswa::find($id);
        $siswa->deleted_by = Auth::id();
        $siswa->save();
        $result = $siswa->delete();
        if($result){
            return "Berhasil";
        }else{
            return "Gagal";
        }
    }

    public function get_all_siswa(){
        return Siswa::all();
    }

}
