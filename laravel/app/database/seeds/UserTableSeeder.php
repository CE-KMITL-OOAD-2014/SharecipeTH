<?php

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'		=>	'administrator',
			'username' 	=>	'admin',
			'email'		=>	'admin@sharecipeth.com',
			'password'	=>	Hash::make('admin')
			));
		User::create(array(
			'name'		=>	'วรเดช',
			'username' 	=>	'woradej',
			'email'		=>	'guide@sharecipeth.com',
			'password'	=>	Hash::make('12345')
			));
	}
}