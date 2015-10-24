<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		/*$user = new User();
		$user->username = 'admin';
		$user->password = Hash::make('admin');
		$user->save();
		$this->call('CustomSeeder');
		$this->call('PrestasiSeeder');
		$this->call('PelajaranSeeder');
		$this->call('RiwayatSeeder');
		$this->call('LaporanSeeder');
		$this->call('DonasiSeeder');*/
		$this->call('CampaignSeeder');
		// $this->call('UserTableSeeder');
	}

}
