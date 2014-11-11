<?php

class CalorieTableSeeder extends Seeder
{
	public function run()
	{
		Calorie::create(array(
			'name'		=>	'เนื้อหมู',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.08'
			));
		Calorie::create(array(
			'name'		=>	'เนื้อไก่',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.65'
			));
		Calorie::create(array(
			'name'		=>	'เนื้อวัว',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.34'
			));
		Calorie::create(array(
			'name'		=>	'เนื้อเป็ด',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.99'
			));
		Calorie::create(array(
			'name'		=>	'แหนม',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'1.85'
			));
		Calorie::create(array(
			'name'		=>	'หมูยอ',
			'quantity' 	=>	'1',
			'unit'		=>	'กรัม',
			'calorie'	=>	'3.41'
			));
	}
}