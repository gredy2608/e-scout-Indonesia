<?php


class Prestasi extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'prestasi';
	protected $fillable = array('id_event', 'id_siswa', 'nama_event','keterangan_menang','keterangan','tanggal','tipe','deleted','created_by','updated_by','deleted_by');
}
