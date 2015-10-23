<?php


class Riwayat extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'riwayat_sekolah';
	protected $fillable = array('id_siswa', 'id_sekolah','tingkat_pendidikan','kelas','jurusan','tahun_ajaran','status','deleted','created_by','updated_by','deleted_by');
}
