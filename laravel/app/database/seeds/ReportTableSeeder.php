<?php

class ReportTableSeeder extends Seeder
{
	public function run()
	{
		Report::create(array(
			'report'		=>	'ทดสอบการส่งข้อเสนอแนะ',
			'username'		=>	'admin'
			));
	}
}