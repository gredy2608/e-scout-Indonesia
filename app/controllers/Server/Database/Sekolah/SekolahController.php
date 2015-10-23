<?php

class SekolahController extends BaseController{

    public function tambah_sekolah(){
        $nama_sekolah = Input::get('nama_sekolah');
        $tingkat_pendidikan = Input::get('tingkat_pendidikan');
        $alamat = Input::get('alamat_sekolah');
        $kota = Input::get('kota_sekolah');
        $kode_pos = Input::get('kode_pos_sekolah');
        $telepon_sekolah  = Input::get('telepon_sekolah');
        $username_sekolah = Input::get('username');
        $password_sekolah = Input::get('password');
        $created_by = 1;
        /*$created_by = Auth::id();
        $updated_by = Auth::id();*/

        // save to database
        $sekolah_baru = new Sekolah();
        $sekolah_baru->nama_sekolah = $nama_sekolah;
        $sekolah_baru->tingkat_pendidikan = $tingkat_pendidikan;
        $sekolah_baru->alamat = $alamat;
        $sekolah_baru->kota = $kota;
        $sekolah_baru->kode_pos = $kode_pos;
        $sekolah_baru->telepon = $telepon_sekolah;
        $sekolah_baru->username = $username_sekolah;
        $sekolah_baru->password = Hash::make($password_sekolah);
        $sekolah_baru->created_by = 1;

        $result = $sekolah_baru->save();

        if($result){
          return "Berhasil";
        }
        else{
          return "Gagal";
        }
    }

    public function edit_sekolah(){
        $input = array();
        $input['nama_sekolah'] = Input::get('nama_sekolah');
        $input['tingkat_pendidikan'] = Input::get('tingkat_pendidikan');
        $input['alamat'] = Input::get('alamat_sekolah');
        $input['kota'] = Input::get('kota_sekolah');
        $input['kode_pos'] = Input::get('kode_pos_sekolah');
        $input['telepon'] = Input::get('telepon_sekolah');
        $input['username'] = Input::get('username');
        $input['password'] = Hash::make(Input::get('password'));

        // save edited data to database
        $id = Input::get('id');
        $sekolah = Sekolah::find($id);
        $result = $sekolah->update($input);

        if($result){
          return "Berhasil";
        }
        else{
          return "Gagal";
        }
    }

    public function delete_sekolah($id){
        $sekolah = Sekolah::find($id);
        $sekolah->deleted_by = Auth::id();
        $sekolah->save();
        $result = $sekolah->delete();
        if($result){
            return "Berhasil";
        }else{
            return "Gagal";
        }
    }

    public function get_all_sekolah(){
        return Sekolah::all();
    }


}
