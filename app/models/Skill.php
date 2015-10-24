<?php


class Skill extends Eloquent
{
		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];
		protected $table = 'akta_lahir';
		protected $fillable = array('id_siswa', 'skill','deleted','created_by','updated_by','deleted_by');
}
