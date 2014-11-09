<?php

class CalorieTableSeeder extends Seeder
{
	public function run()
	{
		Calorie::create(array(
			'name'		=>	'เนื้อหมู',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.65'
			));
		Calorie::create(array(
			'name'		=>	'เนื้อไก่',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.65'
			));
		Calorie::create(array(
			'name'		=>	'เนื้อปลา',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.65'
			));
		Calorie::create(array(
			'name'		=>	'เนื้อวัว',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.65'
			));
		Calorie::create(array(
			'name'		=>	'เนื้อเป็ด',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.65'
			));
	}
}