<?php

class CommentDatabase extends Eloquent {

	protected $table = 'comments';

	protected $fillable = array('comment', 'user_id', 'recipe_id');

	public function recipe()
	{
		return $this->belongsTo('Recipe');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}