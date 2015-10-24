<?php


class Sumbangan extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'sumbangan';
	protected $fillable = array('no_ktp_penyumbang', 'nama_penyumbang', 'email_penyumbang','no_telepon_penyumbang','no_rekening_penyumbang','bank_tujuan','besar_uang_sumbangan','id_anak','approved','deleted','created_by','updated_by','deleted_by');
}
