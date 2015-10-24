<?php
class ReportGenerator extends BaseController{



	public function getAllTopSchool(){
		$sekolah = DB::select("SELECT * FROM sekolah");
		$sum =array();
		for($i=0;$i<count($sekolah);$i++){
			$sum[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = '$sekolah[$i]->id'");
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'
										GROUP BY prestasi.id_siswa");
				$sum[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
		}
		
		$prestasiBaru = array_sort($sum, 'prestasi', SORT_DESC);
		
		
	}

	public function getTopSchoolByCity($city){
		$sekolah = DB::select("SELECT * FROM sekolah WHERE kota = '$city'");
		$sum=array();
		for($i=0;$i<count($sekolah);$i++){
		$sum[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = '$sekolah[$i]->id'");
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'
										GROUP BY prestasi.id_siswa");
				$sum[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
		}
		
		$prestasiBaru = array_sort($sum, 'prestasi', SORT_DESC);
		
		
	}
	
	public function getAllTopGrowthSchool($year){
		$year2=$year-1;
		$sekolah = DB::select("SELECT * FROM sekolah");
		$sum1 =array();
		$sum2 =array();
		$diff= array();
		for($i=0;$i<count($sekolah);$i++){
			
			$sum1[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$sum2[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = '$sekolah[$i]->id'");
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year2'
										GROUP BY prestasi.id_siswa");
				$sum1[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
			
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
				$sum2[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
			
			$diff[$i]=array('id'=>$sekolah[$i],'selisih'=>$sum2[$i]['prestasi']-$sum1[$i]['prestasi']);
		}
		$selisihBaru = array_sort($diff, 'selisih', SORT_DESC);
		
	}	
	
	public function getAllTopGrowthSchoolByCity($year,$city){
	
		$year2=$year-1;
		$sekolah = DB::select("SELECT * FROM sekolah WHERE kota = '$city'");
		$sum1 =array();
		$sum2 =array();
		$diff= array();
		for($i=0;$i<count($sekolah);$i++){
			$sum1[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$sum2[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = '$sekolah[$i]->id'");
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year2'
										GROUP BY prestasi.id_siswa");
				$sum1[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
			
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
				$sum2[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
			
			$diff[$i]=array('id'=>$sekolah[$i],'selisih'=>$sum2[$i]['prestasi']-$sum1[$i]['prestasi']);
		}
		
		$selisihBaru = array_sort($diff, 'selisih', SORT_DESC);
		
	}
	
	public function getAllTopGrowthStudentBySchool($id_sekolah){
	
		$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = '$id_sekolah'");
		$sum1 =array();
		$sum2 =array();
		$diff= array();
		
			for($j=0;$j<count($siswa);$j++){
				$sum1[$j] = array('id'=>$siswa[$j]->id,'prestasi'=>'0');
			
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year2'
										GROUP BY prestasi.id_siswa");
				$sum1[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
			
			for($j=0;$j<count($siswa);$j++){
				$sum2[$j] = array('id'=>$siswa[$j]->id,'prestasi'=>'0');
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
				$sum2[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
			
			for($j=0;$j<count($siswa);$j++){
				$diff[$j]=array('id'=>$siswa[$j]->id,'selisih'=>$sum2[$j]['prestasi']-$sum1[$j]['prestasi']);
			}
			
			$selisihBaru = array_sort($diff, 'selisih', SORT_DESC);
		
		
			
	}
	
	public function getAllTopGrowthStudentByCity($city){
	
		$sekolah = DB::select("SELECT * FROM sekolah WHERE kota = '$city'");
		$sum1 =array();
		$sum2 =array();
		$diff= array();
		for($i=0;$i<count($sekolah);$i++){
			$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = '$sekolah[$i]->id'");
			
			for($j=0;$j<count($siswa);$j++){
				$sum1[$j] = array('id'=>$siswa[$j]->id,'prestasi'=>'0');
			
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year2'
										GROUP BY prestasi.id_siswa");
				$sum1[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}
			
			for($j=0;$j<count($siswa);$j++){
				$sum2[$j] = array('id'=>$siswa[$j]->id,'prestasi'=>'0');
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi 
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
				$sum2[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
			}	

			for($j=0;$j<count($siswa);$j++){
				$diff[$j]=array('id'=>$siswa[$j]->id,'selisih'=>$sum2[$j]['prestasi']-$sum1[$j]['prestasi']);
			}
								
		}
			$selisihBaru = array_sort($diff, 'selisih', SORT_DESC);
		
		
	}
	
	public function getAllTopStudentByCity($city){
	
		$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND sekolah.kota = '$city'");
		$nilai = array();	
		$prestasi = array();
		for($i=0;$i<count($siswa);$i++){
			$nilaiTemp = DB::select("SELECT AVG(nilai) as rata WHERE nilai.id_siswa = '$siswa[$i]->id' GROUP BY nilai.id_siswa");
			$nilai[$i]= array('id'=>$siswa[$i]->id,'rata'=>$nilaiTemp[0]->rata);
			$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = '$siswa[$i]->id' GROUP BY prestasi.id_siswa");
			$prestasi[$i] = array('id'=>$siswa[$i]->id,'sum'=>$prestasiTemp[0]->sum);
		}
		
		$nilaiBaru = array_sort($nilai, 'rata', SORT_DESC);
		$prestasiBaru = array_sort($prestasi, 'sum', SORT_DESC);
		
	}
	
	public function getAllTopStudentBySchool($id_school){
	
		$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND sekolah.id = '$id_school'");
		$nilai = array();
		$prestasi = array();
		for($i=0;$i<count($siswa);$i++){
			$nilaiTemp = DB::select("SELECT AVG(nilai) as rata WHERE nilai.id_siswa = '$siswa[$i]->id' GROUP BY nilai.id_siswa");
			$nilai[$i]= array('id'=>$siswa[$i]->id,'rata'=>$nilaiTemp[0]->rata);
			$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = '$siswa[$i]->id' GROUP BY prestasi.id_siswa");
			$prestasi[$i] = array('id'=>$siswa[$i]->id,'sum'=>$prestasiTemp[0]->sum);
		}
		
		$nilaiBaru = array_sort($nilai, 'rata', SORT_DESC);
		$prestasiBaru = array_sort($prestasi, 'sum', SORT_DESC);
	}
	
	public function getAllTopStudent(){
	
		$siswa = DB::select("SELECT * FROM siswa 
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0");
		$nilai = array();
		$prestasi = array();
		for($i=0;$i<count($siswa);$i++){
			$nilaiTemp = DB::select("SELECT AVG(nilai) as rata WHERE nilai.id_siswa = '$siswa[$i]->id' GROUP BY nilai.id_siswa");
			$nilai[$i]= array('id'=>$siswa[$i]->id,'rata'=>$nilaiTemp[0]->rata);
			$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = '$siswa[$i]->id' GROUP BY prestasi.id_siswa");
			$prestasi[$i] = array('id'=>$siswa[$i]->id,'sum'=>$prestasiTemp[0]->sum);
		}
		
		$nilaiBaru = array_sort($nilai, 'rata', SORT_DESC);
		$prestasiBaru = array_sort($prestasi, 'sum', SORT_DESC);
	}
}

?>