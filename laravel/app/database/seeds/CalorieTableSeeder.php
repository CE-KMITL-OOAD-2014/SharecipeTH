<?php

class CalorieTableSeeder extends Seeder
{
	public function run()
	{
		Calorie::create(array(
			'name'		=>	'เนื้อไก่',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.65'
			));
	}
}