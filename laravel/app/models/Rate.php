<?php

class Rate extends Eloquent {

	public $timestamps = false;

	protected $table = 'rates';

	protected $fillable = array('score', 'recipe_id');

	public function recipe()
	{
		return $this->belongTo('recipe');	
	}
}