<?php


class Nilai extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'nilai';
	protected $fillable = array('id_siswa', 'id_sekolah', 'id_pelajaran','nilai','tahun_ajaran','kelas','deleted','created_by','updated_by','deleted_by');
}
