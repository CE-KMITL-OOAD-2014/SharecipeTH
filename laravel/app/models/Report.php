<?php

class Report extends Eloquent {

	public $timestamps = false;

	protected $table = 'reports';

	protected $fillable = array('report', 'username');
}