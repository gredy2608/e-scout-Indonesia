<?php

class SkillController extends BaseController{

	public function tambah_skill(){
		$id_siswa = Input::get('id_siswa');
		$skill = Input::get('skill');

		// save data to database
		$skill_baru = new Skill();
		$skill_baru->id_siswa = $id_siswa;
		$skill_baru->skill = $skill;

		$result = $skill_baru->save();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function edit_skill(){
		$input = array();
		$input['id_siswa'] = Input::get('id_siswa');
		$input['skill'] = Input::get('skill');

		// save edited data to database
		$id = Input::get('id');
		$skill = Skill::find($id);
		$result = $skill->update($input);

		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function delete_skill($id){
		$skill = Skill::find($id);
		$skill->deleted_by = Auth::id();
		$skill->save();
		$result = $skill->delete();
		if($result){
			return "Berhasil";
		}else{
			return "Gagal";
		}
	}

	public function get_all_skill(){
		return Skill::all();
	}

}