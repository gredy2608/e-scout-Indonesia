<?php
class ReportGenerator extends BaseController{

	function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

	public function getAllTopSchool(){
		$sekolah = DB::select("SELECT * FROM sekolah");
		$sum =array();
		for($i=0;$i<count($sekolah);$i++){
			$sum[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = ".$sekolah[$i]->id." ;");
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."
										GROUP BY prestasi.id_siswa");
										if($prestasi!=null){
											$sum[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}

			}
		}

		$prestasiBaru = $this->array_sort($sum, 'prestasi', SORT_DESC);

		return Response::json($prestasiBaru);
	}

	public function getTopSchoolByCity($city){
		$sekolah = DB::select("SELECT * FROM sekolah WHERE kota = '$city'");
		$sum=array();
		for($i=0;$i<count($sekolah);$i++){
		$sum[$i] = array('id'=>$sekolah[$i]->id,'prestasi'=>'0');
			$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = ".$sekolah[$i]->id);
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."
										GROUP BY prestasi.id_siswa");
										if($prestasi!=null){
											$sum[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}

			}
		}

		$prestasiBaru = $this->array_sort($sum, 'prestasi', SORT_DESC);
		return Response::json($prestasiBaru);

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
			$siswa = DB::select("SELECT id_siswa FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = ".$sekolah[$i]->id);
			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(id_siswa) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."  AND YEAR(tanggal)= '$year2'
										GROUP BY prestasi.id_siswa");
										if($prestasi!=null){
											$sum1[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}

			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(id_siswa) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
									if($prestasi!=null){
											$sum2[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}

			$diff[$i]=array('id'=>$sekolah[$i],'selisih'=>$sum2[$i]['prestasi']-$sum1[$i]['prestasi']);
		}
		$selisihBaru = $this->array_sort($diff, 'selisih', SORT_DESC);
		return Response::json($selisihBaru);
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
				if($prestasi!=null){
											$sum1[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}

			for($j=0;$j<count($siswa);$j++){
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = '$siswa[$j]->id_siswa'  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
				if($prestasi!=null){
											$sum2[$i]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}

			$diff[$i]=array('id'=>$sekolah[$i],'selisih'=>$sum2[$i]['prestasi']-$sum1[$i]['prestasi']);
		}

		$selisihBaru = $this->array_sort($diff, 'selisih', SORT_DESC);
		return Response::json($selisihBaru);
	}

	public function getAllTopGrowthStudentBySchool($id_sekolah,$year){
		$year2=$year-1;
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
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."  AND YEAR(tanggal)= '$year2'
										GROUP BY prestasi.id_siswa");
				if($prestasi!=null){
											$sum1[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}

			for($j=0;$j<count($siswa);$j++){
				$sum2[$j] = array('id'=>$siswa[$j]->id,'prestasi'=>'0');
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
				if($prestasi!=null){
											$sum2[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}
			//echo var_dump($sum2);
			for($j=0;$j<count($siswa);$j++){
				$diff[$j]=array('id'=>$siswa[$j],'selisih'=>$sum2[$j]['prestasi']-$sum1[$j]['prestasi']);
			}

			$selisihBaru = $this->array_sort($diff, 'selisih', SORT_DESC);
		return Response::json($selisihBaru);


	}

	public function getAllTopGrowthStudentByCity($city,$year){
		$year2=$year-1;
		$sekolah = DB::select("SELECT * FROM sekolah WHERE kota = '$city'");
		$sum1 =array();
		$sum2 =array();
		$diff= array();
		for($i=0;$i<count($sekolah);$i++){
			$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								JOIN akta_lahir ON siswa.id_akta_lahir = akta_lahir.id
								WHERE status=0 AND riwayat_sekolah.id_sekolah = ".$sekolah[$i]->id);

			for($j=0;$j<count($siswa);$j++){
				$sum1[$j] = array('id'=>$siswa[$j]->id,'prestasi'=>'0');

				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."  AND YEAR(tanggal)= '$year2'
										GROUP BY prestasi.id_siswa");
				if($prestasi!=null){
											$sum1[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}

			for($j=0;$j<count($siswa);$j++){
				$sum2[$j] = array('id'=>$siswa[$j]->id,'prestasi'=>'0');
				$prestasi = DB::select("SELECT COUNT(*) as banyak_prestasi FROM prestasi
										WHERE prestasi.id_siswa = ".$siswa[$j]->id_siswa."  AND YEAR(tanggal)= '$year'
										GROUP BY prestasi.id_siswa");
				if($prestasi!=null){
											$sum2[$j]['prestasi']+=$prestasi[0]->banyak_prestasi;
										}
			}

			for($j=0;$j<count($siswa);$j++){
				$diff[$j]=array('id'=>$siswa[$j],'selisih'=>$sum2[$j]['prestasi']-$sum1[$j]['prestasi']);
			}

		}
			$selisihBaru = $this->array_sort($diff, 'selisih', SORT_DESC);

			return Response::json($selisihBaru);
	}

	public function getAllTopStudentByCity($city){

		$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status=0 AND sekolah.kota = '$city'");
								echo count($siswa);
		$nilai = array();
		$prestasi = array();
		for($i=0;$i<count($siswa);$i++){
			//echo $siswa[$i]->id;
			$nilaiTemp = DB::select("SELECT AVG(nilai) as rata FROM nilai WHERE nilai.id_siswa = ".$siswa[$i]->id." GROUP BY nilai.id_siswa");
				//echo var_dump($nilaiTemp);
				if($nilaiTemp!=null){
					$nilai[$i]= array('id'=>$siswa[$i]->id,'rata'=>$nilaiTemp[0]->rata);
				}
				$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = ".$siswa[$i]->id." GROUP BY prestasi.id_siswa");

				if($prestasiTemp!=null){
				$prestasi[$i] = array('id'=>$siswa[$i],'sum'=>$prestasiTemp[0]->sum);
				}
			//echo var_dump($nilai);
		}

		$nilaiBaru = $this->array_sort($nilai, 'rata', SORT_DESC);
		$prestasiBaru = $this->array_sort($prestasi, 'sum', SORT_DESC);

		//return Response::json(array("nilai"=>$nilaiBaru, "prestasi"=>$prestasiBaru));
	}

	public function getAllTopStudentBySchool($id_school){

		$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status<1 AND sekolah.id = '$id_school'");
		$nilai = array();
		$prestasi = array();
		for($i=0;$i<count($siswa);$i++){
			$nilaiTemp = DB::select("SELECT AVG(nilai) as rata FROM nilai WHERE nilai.id_siswa = ".$siswa[$i]->id." GROUP BY nilai.id_siswa");
			if($nilaiTemp!=null){
					$nilai[$i]= array('id'=>$siswa[$i]->id,'rata'=>$nilaiTemp[0]->rata);
				}

			$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = ".$siswa[$i]->id." GROUP BY prestasi.id_siswa");
			if($prestasiTemp!=null){
				$prestasi[$i] = array('id'=>$siswa[$i],'sum'=>$prestasiTemp[0]->sum);
				}
		}

		$nilaiBaru = $this->array_sort($nilai, 'rata', SORT_DESC);
		$prestasiBaru = $this->array_sort($prestasi, 'sum', SORT_DESC);
		return Response::json(array("nilai"=>$nilaiBaru, "prestasi"=>$prestasiBaru));
	}

	public function getAllTopStudent(){

		$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status<=0");
		$nilai = array();
		$prestasi = array();
		for($i=0;$i<count($siswa);$i++){
			$nilaiTemp = DB::select("SELECT AVG(nilai) as rata FROM nilai WHERE nilai.id_siswa = ".$siswa[$i]->id_siswa." GROUP BY nilai.id_siswa");
			//echo var_dump($siswa[$i]->id);
			if($nilaiTemp!=null){
					$nilai[$i]= array('id'=>$siswa[$i],'rata'=>$nilaiTemp[0]->rata);
				}
			$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = ".$siswa[$i]->id_siswa." GROUP BY prestasi.id_siswa");
			if($prestasiTemp!=null){
				$prestasi[$i] = array('id'=>$siswa[$i],'sum'=>$prestasiTemp[0]->sum);
				}
			}

		$nilaiBaru = $this->array_sort($nilai, 'rata', SORT_DESC);
		$prestasiBaru = $this->array_sort($prestasi, 'sum', SORT_DESC);
		return Response::json(array("nilai"=>$nilaiBaru, "prestasi"=>$prestasiBaru));
	}


	public function getTopSchoolCity(){
		$kota = array("Jakarta","Bandung","Surabaya","Medan","Palembang","Bengkulu","Semarang","Solo","Bogor","Tangerang","Banten","Denpasar");
		$prestasi = array();
		for($i=0;$i<count($kota);$i++){
			$prestasi[$i] =array('kota'=>$kota[$i],'sum'=>0);
			$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status<=1 AND sekolah.kota = '".$kota[$i]."'");
			for($j=0;$j<count($siswa);$j++){
				$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = ".$siswa[$j]->id);
				//echo var_dump($prestasiTemp[0]->sum);
				if($prestasiTemp!=null){
				$prestasi[$i]['sum']+= $prestasiTemp[0]->sum;
				}

			}
		}

		$nilaiBaru = $this->array_sort($prestasi, 'sum', SORT_DESC);
			return Response::json($nilaiBaru);

	}

	public function getAllTopStudentNotSchool(){

	  $siswa = DB::select("SELECT DISTINCT * FROM siswa
	              JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
	              JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
	              WHERE status=3");
	              //echo var_dump($siswa);
	  $nilai = array();
	  $prestasi = array();
	  for($i=0;$i<count($siswa);$i++){
	    $nilaiTemp = DB::select("SELECT AVG(nilai) as rata FROM nilai WHERE nilai.id_siswa = ".$siswa[$i]->id_siswa." GROUP BY nilai.id_siswa");
	    //echo var_dump($siswa[$i]->id);
	    if($nilaiTemp!=null){
	        $nilai[$i]= array('id'=>$siswa[$i],'rata'=>$nilaiTemp[0]->rata);
	      }
	    $prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE prestasi.id_siswa = ".$siswa[$i]->id_siswa." GROUP BY prestasi.id_siswa");
	    if($prestasiTemp!=null){
	      $prestasi[$i] = array('id'=>$siswa[$i],'sum'=>$prestasiTemp[0]->sum);
	      }
	    }

	  $nilaiBaru = $this->array_sort($nilai, 'rata', SORT_DESC);
	  $prestasiBaru = $this->array_sort($prestasi, 'sum', SORT_DESC);
	  return Response::json(array( "prestasi"=>$prestasiBaru));
	}

	public function getTopGrowthCity($year){
		$year2=$year-1;
		$kota = array("Jakarta","Bandung","Surabaya","Medan","Palembang","Bengkulu","Semarang","Solo","Bogor","Tangerang","Banten","Denpasar");
		$prestasi1 = array();
		$prestasi2 = array();
		$diff = array();
		for($i=0;$i<count($kota);$i++){
			$prestasi1[$i] =array('kota'=>$kota[$i],'sum'=>0);
			$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status<=1 AND sekolah.kota = '".$kota[$i]."'");
			for($j=0;$j<count($siswa);$j++){
				$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE YEAR(tanggal)='$year' AND prestasi.id_siswa = ".$siswa[$j]->id);
				$prestasi1[$i]['sum']+= $prestasiTemp[0]->sum;
			}

			$prestasi2[$i] =array('kota'=>$kota[$i],'sum'=>0);
			$siswa = DB::select("SELECT * FROM siswa
								JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id
								JOIN sekolah ON  riwayat_sekolah.id_sekolah = sekolah.id
								WHERE status<=1 AND sekolah.kota = '".$kota[$i]."'");
			for($j=0;$j<count($siswa);$j++){
				$prestasiTemp = DB::select("SELECT count(*) as sum FROM prestasi WHERE YEAR(tanggal)='$year2' AND prestasi.id_siswa = ".$siswa[$j]->id);
				$prestasi2[$i]['sum']+= $prestasiTemp[0]->sum;
			}
			//echo var_dump($prestasi2);
				$temp = $prestasi2[$i]['sum']-$prestasi1[$i]['sum'];
				$diff[$i]=array('id'=>$kota[$i],'selisih'=> $temp);


		}


		$selisih = $this->array_sort($diff, 'selisih', SORT_DESC);

			return Response::json($selisih);
	}

	public function getTotalStudentByCategory(){
		$kategori = array("Matematika","Fisika","Kimia","Debat","Debat Bahasa Asing","Pidato","Sepak Bola","Basket","Bulu Tangkis","Tenis Meja");
		$prestasi = array();
		for($i=0;$i<count($kategori);$i++){
			$prestasiTemp = DB::select("SELECT siswa.id, count(*) as sum  FROM prestasi JOIN siswa ON siswa.id= prestasi.id_siswa
						WHERE prestasi.kategori = '$kategori[$i]'");
			$prestasi[$i] = array('kategori'=>$kategori[$i], 'sum' => $prestasiTemp[0]->sum);

		}
		$nilaiBaru = $this->array_sort($prestasi, 'sum', SORT_DESC);
			return Response::json($nilaiBaru);
	}

	public function getTopStudentByCategory(){
		$kategori = array("Matematika","Fisika","Kimia","Debat","Debat Bahasa Asing","Pidato","Sepak Bola","Basket","Bulu Tangkis","Tenis Meja");
		$prestasi = array();
		for($i=0;$i<count($kategori);$i++){
			$prestasiKategori=array();
			$prestasiTemp = DB::select("SELECT *, count(id_siswa) as sum  FROM siswa
									JOIN prestasi ON prestasi.id_siswa = siswa.id
									WHERE kategori = '$kategori[$i]'
									GROUP BY id_siswa ORDER BY sum desc LIMIT 5");
			for($j=0;$j<count($prestasiTemp);$j++){
				$prestasiKategori[$j] = array('id'=>$prestasiTemp[$j]->id_siswa,'kategori'=>$kategori[$i], 'sum' => $prestasiTemp[$j]->sum);
			}

			$prestasi[$i] = array('kategori'=>$kategori[$i],'presKategori'=>$prestasiKategori);


		}
			return Response::json($prestasi);
	}
}

?>
