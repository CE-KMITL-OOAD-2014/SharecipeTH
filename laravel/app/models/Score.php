<?php

class Score extends Eloquent {

	public $timestamps = false;

	protected $table = 'scores';

	protected $fillable = array('score', 'recipe_id');
}