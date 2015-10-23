<?php


class Siswa extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'siswa';
	protected $fillable = array('id_akta_lahir', 'NISN', 'jenis_kelamin','alamat','kota','kode_pos','deleted','created_by','updated_by','deleted_by');
}
