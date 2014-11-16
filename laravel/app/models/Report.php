<?php

class Report {
	private $report;
	private $username;

	public function getReport()
	{
		return $this->report;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setReport($value)
	{
		$this->report = $value;
	}

	public function setUsername($value)
	{
		$this->username = $value;
	}

	public function newReport()
	{
		$report = new ReportDatabase;
		$report->report = $this->report;
		$report->username = $this->username;
		$report->save();
	}
}