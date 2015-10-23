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
		$user = new User();
		$user->username = 'admin';
		$user->password = Hash::make('admin');
		$user->save();
		$this->call('CustomSeeder');
		// $this->call('UserTableSeeder');
	}

}
