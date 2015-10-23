<?php


class Akta extends Eloquent
{
		use SoftDeletingTrait;
		protected $dates = ['deleted_at'];
		protected $table = 'akta_lahir';
		protected $fillable = array('kode_akta_lahir', 'nama', 'tanggal_lahir','deleted','created_by','updated_by','deleted_by');
}
