<?php


class Laporan extends Eloquent
{
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'laporan';
	protected $fillable = array('no_ktp_pelapor', 'nama_pelapor', 'email_pelapor','no_telepon_pelapor','nama_anak','umur_anak','sekolah_anak','alamat_anak','kota_anak','keterangan','deleted','created_by','updated_by','deleted_by');
}
