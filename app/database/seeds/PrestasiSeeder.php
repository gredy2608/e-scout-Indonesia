<?php

use Faker\Factory as Faker;

class PrestasiSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();
        $arr_kategori = array("Matematika","Fisika","Kimia","Debat","Debat Bahasa Asing","Pidato","Sepak Bola","Basket","Bulu Tangkis","Tenis Meja");
        $arr_tingkat = array("Sekolah","Perguruan Tinggi","Daerah","Nasional","Internasional");
        for($i=0;$i<1000;$i++){
          $probability_prestasi = $faker->numberBetween($min = 0, $max = 100);
          if($probability_prestasi>=70){
            $prestasi = new Prestasi();
            $prestasi->id_siswa = $i+1;
            $no_kategori = $faker->numberBetween($min = 0, $max = 9);
            $kategori = $arr_kategori[$no_kategori];
            $prestasi->nama_event = "Kompetisi ".$kategori." tingkat ".$arr_tingkat[$faker->numberBetween($min = 0, $max = 4)];
            $probability_juara = $faker->numberBetween($min = 0, $max = 100);
            if($probability_juara>=75){
                $prestasi->juara = $faker->numberBetween($min = 1, $max = 6);
            }
            else{
                $prestasi->juara = null;
            }

            $prestasi->kategori = $kategori;
            $prestasi->keterangan = $faker->text;
            if($no_kategori<3){
              $prestasi->tipe = 0;
            }
            else{
              $prestasi->tipe = 1;
            }
            $prestasi->tanggal = $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now');
            $prestasi->created_by = 1;
            $prestasi->save();
            $next_prestasi_prob = $faker->numberBetween($min = 0, $max = 100);
            if($next_prestasi_prob >=90){
              $i--;
            }
          }
        }
    }
}
