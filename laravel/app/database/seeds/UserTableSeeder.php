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
			'password'	=>	Hash::make('admin'),
			'profilePicture' => 'anonymous.jpg'
			));
		User::create(array(
			'name'		=>	'วรเดช',
			'username' 	=>	'guide',
			'email'		=>	'guide@sharecipeth.com',
			'password'	=>	Hash::make('12345'),
			'profilePicture' => 'anonymous.jpg'
			));
		User::create(array(
			'name'		=>	'รักษิณา',
			'username' 	=>	'warm',
			'email'		=>	'warm@sharecipeth.com',
			'password'	=>	Hash::make('12345'),
			'profilePicture' => 'anonymous.jpg'
			));
	}
}