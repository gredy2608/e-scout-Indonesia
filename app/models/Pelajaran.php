<?php


class Pelajaran extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'pelajaran';
	protected $fillable = array('nama_pelajaran','tipe','deleted','created_by','updated_by','deleted_by');
}
