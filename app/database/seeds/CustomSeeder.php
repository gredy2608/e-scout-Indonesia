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

        //seed sekolah
        //SDN
        for($j = 0 ;$j <=5;$j++){
          $sekolah = new Sekolah();
          $number = $faker->unique()->numberBetween($min = 0, $max = 30);
          $sekolah->nama_sekolah = "SD ".$number;
          $sekolah->tingkat_pendidikan = 0;
          $sekolah->kementrian = $faker->numberBetween($min = 0, $max = 1);
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->email = "sd".$number."@mail.com";
          $sekolah->username =  "SD".$number;
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
        //SMPN
        for($j = 0 ;$j <=5;$j++){
          $sekolah = new Sekolah();
          $number = $faker->unique()->numberBetween($min = 0, $max = 30);
          $sekolah->nama_sekolah = "SMP ".$number ;
          $sekolah->tingkat_pendidikan = $faker->numberBetween($min = 0, $max = 1);
          $sekolah->kementrian = $faker->numberBetween($min = 0, $max = 1);
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->email = "smp".$number."@mail.com";
          $sekolah->username =  "SMP".$number;
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }
        //SMAN
        for($j = 0 ;$j <=5;$j++){
          $sekolah = new Sekolah();
          $number = $faker->unique()->numberBetween($min = 0, $max = 30);
          $sekolah->nama_sekolah = "SMA ".$number;
          $sekolah->tingkat_pendidikan = 2;
          $sekolah->kementrian = $faker->numberBetween($min = 0, $max = 1);
          $sekolah->alamat = $faker->streetAddress;
          $sekolah->kota = $arr_kota_indonesia[$faker->numberBetween($min = 0, $max = 11)];
          $sekolah->kode_pos = $faker->postcode;
          $sekolah->telepon = $faker->phoneNumber;
          $sekolah->email = "sma".$number."@mail.com";
          $sekolah->username =  "SMA".$number;
          $sekolah->password = Hash::make("adminsekolah");
          $sekolah->created_by = 1;
          $sekolah->save();
        }

        //riwayat sekolah
        $array_jurusan = array("IPA","BAHASA","IPS","Perhotelan","Farmasi","Mesin","Teknik Informatika","Sistem Informasi");
        for($k=0;$k<1000;$k++){
          $prob_sekolah = $faker->numberBetween($min = 0, $max = 100);
          if($prob_sekolah<=5){
            $current_school = $faker->numberBetween($min = 1, $max = 6);
            $tahun = $faker->numberBetween($min = 1997, $max = 2005);
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

              if($prob_status<=5){
                //keluar
                $riwayat->status = 3;
                $riwayat->save();
                break;
              }
              else if($prob_status<=20){
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
