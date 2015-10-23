<?php

use Faker\Factory as Faker;

class CustomSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();

        $count = 1;
        $arr_kota_indonesia= array("Jakarta","Bandung","Surabaya","Medan","Palembang","Bengkulu","Semarang","Solo","Bogor","Tangerang","Banten","Denpasar");
        //seed siswa + akta lahir
        //5700
        for($i = 0 ; $i<=1000; $i++){
          //seed akta kelahiran
          $akta = new Akta();
          $akta->kode_akta_lahir = "123450000".$faker->unique()->numberBetween($min = 100, $max = 100000);
          if($i%2 == 0){
            $akta->nama = $faker->firstNameMale.' '.$faker->lastName;
          }
          else{
            $akta->nama = $faker->firstNameFemale.' '.$faker->lastName;
          }
          $akta->tanggal_lahir = $faker->dateTimeBetween($startDate = '-20 years', $endDate = '-10 years');
          $akta->created_by = 1;
          $akta->save();

          $akta_id = $akta->id;

          //seed siswa
          $siswa = new Siswa();
          $siswa->id_akta_lahir = $akta_id;
          $siswa->NISN = "98765500".$faker->unique()->numberBetween($min = 1, $max = 100000);
          if($i%2 == 0){
            $siswa->jenis_kelamin = 0;
          }
          else{
              $siswa->jenis_kelamin = 1;
          }
          $siswa->alamat = $faker->streetAddress;
          $siswa->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $siswa->kode_pos = $faker->postcode;
          $siswa->created_by = 1;
          $siswa->save();
        }

        $array_tipe_sekolah = array("SDN","SDK","SMPN","SMPK","SMAN","SMAK");
        $array_nama_sekolah_katolik_kristen = array("BPK Penabur","Santa Angela","Santo Aloysius");
        //seed sekolah
        //SDN
        for($j = 0 ;$j <=3;$j++){
          $sekolah = new Sekolah();
          $sekolah->nama_sekolah = $array_tipe_sekolah[0]." ".($j+1);
          $sekolah->tingkat_pendidikan = 0;
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->username =  $array_tipe_sekolah[0].($j+1);
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
        //SDK
        for($j = 0 ;$j <3;$j++){
          $sekolah = new Sekolah();
          $sekolah->nama_sekolah = $array_tipe_sekolah[1]." ".$array_nama_sekolah_katolik_kristen[$j];
          $sekolah->tingkat_pendidikan = 0;
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->username =  $array_tipe_sekolah[1].($j+1);
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
        //SMPN
        for($j = 0 ;$j <=3;$j++){
          $sekolah = new Sekolah();
          $sekolah->nama_sekolah = $array_tipe_sekolah[2]." ".($j+1);
          $sekolah->tingkat_pendidikan = 1;
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->username =  $array_tipe_sekolah[2].($j+1);
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
        //SMPK
        for($j = 0 ;$j <3;$j++){
          $sekolah = new Sekolah();
          $sekolah->nama_sekolah = $array_tipe_sekolah[3]." ".$array_nama_sekolah_katolik_kristen[$j];
          $sekolah->tingkat_pendidikan = 1;
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->username =  $array_tipe_sekolah[3].($j+1);
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
        //SMAN
        for($j = 0 ;$j <=3;$j++){
          $sekolah = new Sekolah();
          $sekolah->nama_sekolah = $array_tipe_sekolah[4]." ".($j+1);
          $sekolah->tingkat_pendidikan = 2;
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->username =  $array_tipe_sekolah[4].($j+1);
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
        //SMAK
        for($j = 0 ;$j <3;$j++){
          $sekolah = new Sekolah();
          $sekolah->nama_sekolah = $array_tipe_sekolah[5]." ".$array_nama_sekolah_katolik_kristen[$j];
          $sekolah->tingkat_pendidikan = 2;
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->username =  $array_tipe_sekolah[5].($j+1);
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
    }
}
