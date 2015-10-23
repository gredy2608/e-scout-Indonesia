<?php


class Sekolah extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'Sekolah';
	protected $fillable = array('nama_sekolah','tingkat_pendidikan', 'alamat', 'kota','kode_pos','telepon','username','password','deleted','created_by','updated_by','deleted_by');



}
