<?php

class Recipe extends Eloquent {

	public $timestamps = false;

	protected $table = 'recipes';

	protected $fillable = array('user_id', 'name', 'time_hour', 'time_minute', 'method', 'prepare', 'recipe_picture');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Recipe HAS many Ingredient

	public function ingredient()
	{
		return $this->hasMany('Ingredient');	
	}
}