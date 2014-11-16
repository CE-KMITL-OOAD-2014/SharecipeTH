<?php

class Recipe extends Eloquent {

	public $timestamps = false;

	protected $table = 'recipes';

	protected $fillable = array('id','user_id', 'name', 'time_hour', 'time_minute', 'time', 'method', 'prepare', 'recipe_picture');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each Recipe HAS many Ingredient

	public function score()
	{
		return $this->hasOne('Score');
	}

	public function rate()
	{
		return $this->hasMany('Rate');
	}

	public function ingredient()
	{
		return $this->hasMany('Ingredient');	
	}

	public function comment()
	{
		return $this->hasMany('Comment');	
	}

	public function user()
	{
		return $this->belongsTo('User','user_id');
	}
}