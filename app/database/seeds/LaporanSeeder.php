<?php

use Faker\Factory as Faker;

class LaporanSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();
        $arr_kota_indonesia= array("Jakarta","Bandung","Surabaya","Medan","Palembang","Bengkulu","Semarang","Solo","Bogor","Tangerang","Banten","Denpasar");
        for($i=0;$i<100;$i++){
          $laporan = new Laporan();
          $laporan->tipe =$faker->numberBetween($min = 0, $max = 1);
          $laporan->no_ktp_pelapor = $faker->creditCardNumber;
          $laporan->nama_pelapor = $faker->name;
          $laporan->email_pelapor = $faker->freeEmail;
          $laporan->no_telepon_pelapor = $faker->phoneNumber;
          $laporan->nama_anak = $faker->name;
          $laporan->umur_anak = $faker->numberBetween($min = 6, $max = 15);
          $laporan->sekolah_anak = "Tidak Sekolah";
          $laporan->alamat_anak = $faker->streetAddress;
          $laporan->kota_anak = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $laporan->keterangan = $faker->text;
          $laporan->created_by = 1;
          $laporan->save();
        }
    }
}
