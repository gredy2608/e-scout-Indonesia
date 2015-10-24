<?php

use Faker\Factory as Faker;

class CampaignSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();
        for($i=0;$i<20;$i++){
          $sumbangan = new Campaign();
          $sumbangan->no_ktp_penggagas_campaign = $faker->creditCardNumber;
          $sumbangan->nama_penggagas_campaign = $faker->name;
          $sumbangan->email_penggagas_campaign = $faker->freeEmail;
          $sumbangan->no_telepon_penggagas_campaign = $faker->phoneNumber;
          $sumbangan->nama_campaign = "Bantuan Bagi ".$faker->firstName;
          $sumbangan->detail_campaign = $faker->text;
          $sumbangan->id_anak =  $faker->numberBetween($min = 1, $max = 2000);
          $sumbangan->created_by = 1;
          $sumbangan->save();
        }
    }
}
