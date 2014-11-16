<?php

class Score extends Eloquent {

	public $timestamps = false;

	protected $table = 'scores';

	protected $fillable = array('scoreSum', 'scoreAvg','rateCount','recipe_id');

		public function recipe()
	{
		return $this->belongTo('recipe');	
	}
}