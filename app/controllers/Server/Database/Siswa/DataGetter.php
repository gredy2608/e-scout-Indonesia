<?php
class DataGetter extends BaseController{


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
	
	public function getSkillSets($skill,$city){
		$siswa = DB::select("SELECT * from skill JOIN siswa ON siswa.id = skill.id_siswa JOIN akta_lahir ON akta_lahir.id = siswa.id_akta_lahir
							JOIN riwayat_sekolah ON riwayat_sekolah.id_siswa = siswa.id 
							JOIN sekolah ON sekolah.id = riwayat_sekolah.id_sekolah WHERE riwayat.status <=2 
							AND skill.skill = '$skill' AND sekolah.kota= '$city'");
		return Response::json($siswa);
	
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
		$nilai2 = array();
		//echo $nilaiBaru[0];
		$ct=0;	
		foreach ($nilaiBaru as $id => $value){
		
			$nilai2[$ct] = array('ranking'=>$ct+1,'id'=>$this->changeToId($kota[$id]),'title'=>$this->changeToTitle($kota[$id]),'jumlah'=>$nilaiBaru[$id]['sum']);
			$ct++;
		}
		$nilai2[11] = array('ranking'=>12,'id'=>'ID-AC','title'=>'Aceh','jumlah'=>0);
		$nilai2[12] = array('ranking'=>13,'id'=>'ID-BB','title'=>'Bangka Belitung','jumlah'=>0);
		$nilai2[13] = array('ranking'=>14,'id'=>'ID-KB','title'=>'Kalimantan Barat','jumlah'=>0);
		$nilai2[14] = array('ranking'=>15,'id'=>'ID-KI','title'=>'Kalimantan Timur','jumlah'=>0);
		$nilai2[15] = array('ranking'=>16,'id'=>'ID-KR','title'=>'Kepulauan Riau','jumlah'=>0);
		$nilai2[16] = array('ranking'=>17,'id'=>'ID-KS','title'=>'Kalimantan Selatan','jumlah'=>0);
		$nilai2[17] = array('ranking'=>18,'id'=>'ID-KT','title'=>'Kalimantan Tengah','jumlah'=>0);
		$nilai2[18] = array('ranking'=>19,'id'=>'ID-KU','title'=>'Kalimantan Utara','jumlah'=>0);
		$nilai2[19] = array('ranking'=>20,'id'=>'ID-LA','title'=>'Lampung','jumlah'=>0);
		$nilai2[20] = array('ranking'=>21,'id'=>'ID-MA','title'=>'Maluku','jumlah'=>0);
		$nilai2[21] = array('ranking'=>22,'id'=>'ID-MU','title'=>'Maluku Utara','jumlah'=>0);
		$nilai2[22] = array('ranking'=>23,'id'=>'ID-NB','title'=>'Nusa Tenggara Barat','jumlah'=>0);
		$nilai2[23] = array('ranking'=>24,'id'=>'ID-NT','title'=>'Nusa Tenggara Timur','jumlah'=>0);
		$nilai2[24] = array('ranking'=>25,'id'=>'ID-PA','title'=>'Papua','jumlah'=>0);
		$nilai2[25] = array('ranking'=>26,'id'=>'ID-PB','title'=>'Papua Barat','jumlah'=>0);
		$nilai2[26] = array('ranking'=>27,'id'=>'ID-RI','title'=>'Riau','jumlah'=>0);
		$nilai2[27] = array('ranking'=>28,'id'=>'ID-SA','title'=>'Sulawesi Utara','jumlah'=>0);
		$nilai2[28] = array('ranking'=>29,'id'=>'ID-SB','title'=>'Sumatera Barat','jumlah'=>0);
		$nilai2[29] = array('ranking'=>30,'id'=>'ID-SG','title'=>'Sulawesi Tenggara','jumlah'=>0);
		$nilai2[30] = array('ranking'=>31,'id'=>'ID-SN','title'=>'Sulawesi Selatan','jumlah'=>0);
		$nilai2[31] = array('ranking'=>32,'id'=>'ID-SR','title'=>'Sulawesi Barat','jumlah'=>0);
		$nilai2[32] = array('ranking'=>33,'id'=>'ID-ST','title'=>'Sulawesi Tengah','jumlah'=>0);
		$nilai2[33] = array('ranking'=>34,'id'=>'ID-YO','title'=>'Yogyakarta','jumlah'=>0);
		
		
		
			return Response::json($nilai2);

	}
	
	public function changeToId($kota){
		if($kota=='Jakarta'){
			return 'ID-JK';
		}else if($kota=='Bandung'){
		return 'ID-JB';
		}else if($kota=='Surabaya'){
		return 'ID-JI';
		}else if($kota=='Medan'){
		return 'ID-SU';
		}else if($kota=='Palembang'){
		return 'ID-SS';
		}else if($kota=='Bengkulu'){
		return 'ID-BE';
		}else if($kota=='Solo'){
		return 'ID-JT';
		}else if($kota=='Bogor'){
		return 'ID-JA';
		}else if($kota=='Tangerang'){
		return 'ID-GO';
		}else if($kota=='Banten'){
		return 'ID-BT';
		}else if($kota=='Denpasar'){
		return 'ID-BA';
		}
	}
	
	public function changeToTitle($kota){
		if($kota=='Jakarta'){
			return 'Jakarta Raya';
		}else if($kota=='Bandung'){
		return 'Jawa Barat';
		}else if($kota=='Surabaya'){
		return 'Jawa Timur';
		}else if($kota=='Medan'){
		return 'Sumatera Utara';
		}else if($kota=='Palembang'){
		return 'Sumatera Selatan';
		}else if($kota=='Bengkulu'){
		return 'Bengkulu';
		}else if($kota=='Solo'){
		return 'Jawa Tengah';
		}else if($kota=='Bogor'){
		return 'Jambi';
		}else if($kota=='Tangerang'){
		return 'Gorontalo';
		}else if($kota=='Banten'){
		return 'bANTEN';
		}else if($kota=='Denpasar'){
		return 'Bali';
		}
	}
	
}


?>