<?php


class Event extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'event';
	protected $fillable = array('nama_event', 'tingkat_perlombaan', 'alamat_lokasi','kota','tanggal_pelaksaan','deskripsi','deleted','created_by','updated_by','deleted_by');
}
