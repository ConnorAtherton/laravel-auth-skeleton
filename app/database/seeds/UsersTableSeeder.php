<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();

		$users = array(
			array(
			  'email' => 'connor@example.com',
			  'firstname' => 'Connor',
			  'lastname' => 'Atherton',
			  'password' => Hash::make('mySuperSecurePassword')
			)

		);

		DB::table('users')->insert($users);
	}

}
