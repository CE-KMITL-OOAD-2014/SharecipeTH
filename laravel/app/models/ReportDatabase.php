<?php

class ReportDatabase extends Eloquent {

	public $timestamps = false;

	protected $table = 'reports';

	protected $fillable = array('report', 'username');
}