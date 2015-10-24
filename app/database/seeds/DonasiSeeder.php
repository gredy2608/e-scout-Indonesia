<?php

use Faker\Factory as Faker;

class DonasiSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();
        for($i=0;$i<200;$i++){
          $sumbangan = new Sumbangan();
          $sumbangan->no_ktp_penyumbang = $faker->creditCardNumber;
          $sumbangan->nama_penyumbang = $faker->name;
          $sumbangan->email_penyumbang = $faker->freeEmail;
          $sumbangan->no_telepon_penyumbang = $faker->phoneNumber;
          $sumbangan->no_rekening_penyumbang = $faker->creditCardNumber;
          $sumbangan->bank_tujuan = "BRI";
          $sumbangan->besar_uang_sumbangan = $faker->numberBetween($min = 100, $max = 1000000)."000";
          $sumbangan->created_by = 1;
          $sumbangan->save();
        }
    }
}
