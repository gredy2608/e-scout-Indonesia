<?php


class Sekolah extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'Sekolah';
	protected $fillable = array('nama_sekolah','tingkat_pendidikan','kementrian', 'alamat', 'kota','kode_pos','telepon','email','username','password','deleted','created_by','updated_by','deleted_by');



}
