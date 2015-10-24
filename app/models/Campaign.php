<?php


class Campaign extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'campaign';
	protected $fillable = array('no_ktp_penggagas_campaign', 'nama_penggagas_campaign', 'email_penggagas_campaign','no_telepon_penggagas_campaign','nama_campaign','detail_campaign','id_anak','approved','done','deleted','created_by','updated_by','deleted_by');
}
