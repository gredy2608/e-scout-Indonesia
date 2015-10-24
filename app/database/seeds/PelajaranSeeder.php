<?php

use Faker\Factory as Faker;

class PelajaranSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();
        $arr_pelajaran = array("Bahasa Indonesia","Matematika","Fisika","Kimia","Biologi","Kewarganegaraan","Bahasa Inggris","Ekonomi","Sejarah");
        foreach($arr_pelajaran as $mata_pelajaran){
          $pelajaran = new Pelajaran();
          $pelajaran->nama_pelajaran = $mata_pelajaran;
          $pelajaran->tipe = 1;
          $pelajaran->created_by = 1;
          $pelajaran->save();
        }
    }
}
