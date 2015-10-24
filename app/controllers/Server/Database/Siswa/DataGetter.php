<?php
class DataGetter extends BaseController{

	public function getSiswaBySchool($id_sekolah){
		$siswa = DB::select("SELECT * FROM siswa JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
							WHERE riwayat_sekolah.id_sekolah = '$id_sekolah' AND riwayat_sekolah.status = 0");
		return Response::json($siswa);
	}
	
	public function getSiswaByCity($city){
		
		$siswa = DB::select("SELECT * FROM siswa JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
							JOIN sekolah ON sekolah.id_sekolah = riwayat_sekolah.id_sekolah
							WHERE riwayat_sekolah.status = 0 AND sekolah.kota= '$city' ");
		return Response::json($siswa);
	}
	
	public function getPrestasiBySiswa($id_siswa){
		$siswa = DB::select("SELECT * FROM siswa JOIN prestasi ON prestasi.id_siswa = siswa.id WHERE siswa.id= '$id_siswa'");
		return Response::json($siswa);
	}
	
	public function getDetailPrestasiBySiswa($id_prestasi,$id_siswa){
		$siswa = DB::select("SELECT * FROM siswa JOIN prestasi ON prestasi.id_siswa = siswa.id WHERE siswa.id= '$id_siswa' AND prestasi.id = '$id_prestasi'");
		return Response::json($siswa);
	}
	
	
}


?>