<?php

use Faker\Factory as Faker;

class RiwayatSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();
        $array_jurusan = array("IPA","BAHASA","IPS","Perhotelan","Farmasi","Mesin","Teknik Informatika","Sistem Informasi");
        for($k=0;$k<1000;$k++){
          $prob_sekolah = $faker->numberBetween($min = 0, $max = 100);
          if($prob_sekolah<=5){
            $current_school = $faker->numberBetween($min = 1, $max = 6);
            $tahun = $faker->numberBetween($min = 1997, $max = 2009);
            for($i=0;$i<12&&$tahun<=2015;$i++){
              $riwayat = new Riwayat();
              $riwayat->id_siswa = $k+1;
              $riwayat->id_sekolah = $current_school;
              $riwayat->kelas = $i+1;
              if($i<6){
                $riwayat->tingkat_pendidikan = 0;
                $riwayat->jurusan="";
              }
              else if($i<9){
                $riwayat->tingkat_pendidikan = 1;
                $riwayat->jurusan="";
              }
              else{
                $riwayat->tingkat_pendidikan = 2;
                $riwayat->jurusan = $array_jurusan[$faker->numberBetween($min = 0, $max = 7)];
              }
              $riwayat->tahun_ajaran = $tahun."/".($tahun+1);

              $prob_status = $faker->numberBetween($min = 0, $max = 100);

              $riwayat->created_by = 1;

              //nilai

              $banyak_nilai =  $faker->numberBetween($min = 10, $max = 25);
              for($f=0;$f<$banyak_nilai;$f++){
                $nilai = new Nilai();
                $nilai->id_siswa= $k+1;
                $nilai->id_sekolah = $current_school;
                $nilai->id_pelajaran = $faker->numberBetween($min = 1, $max = 9);
                $nilai->nilai =  $faker->numberBetween($min = 0, $max = 100);
                $nilai->tahun_ajaran = $tahun."/".($tahun+1);
                $nilai->kelas = $i+1;
                $nilai->created_by = 1;
                $nilai->save();
              }

              if($prob_status<=5){
                //keluar
                $riwayat->status = 3;
                $riwayat->save();
                break;
              }
              else if($prob_status<=10){
                //tinggal kelas
                $riwayat->status = 2;
                $riwayat->save();
                $i--;
              }
              else{
                if($tahun==2015){
                  $riwayat->status = 0;
                  $riwayat->save();
                  break;
                }
                else{
                  $riwayat->status = 1;
                  $riwayat->save();
                }
              }
              if($i==5){
                $current_school = $faker->numberBetween($min = 7, $max = 12);
              }
              else if($i==8){
                $current_school = $faker->numberBetween($min = 13, $max = 18);
              }
              $tahun++;
            }
          }
        }
    }
}
