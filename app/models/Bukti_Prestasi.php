<?php


class Bukti_Prestasi extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'bukti_prestasi';
	protected $fillable = array('id_prestasi', 'tipe', 'file','deleted','created_by','updated_by','deleted_by');
}
