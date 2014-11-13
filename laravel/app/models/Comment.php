<?php

class Comment {

	private $text;
	private $recipe;

	function __construct() {
		$this->text = null;
		$this->recipe = null;
	}

	public function setText($value)
	{
		$this->text = $value;
	}
	public function setRecipe($value)
	{
		$this->recipe = $value;
	}

	public function getText()
	{
		return $this->text;
	}
	public function getRecipe()
	{
		return $this->recipe;
	}

	public static function getComment($id){
		if(CommentRepository::isExist($id)){
			$comment = new Comment();
			$comment->setId($id);
			$comment->setText(CommentRepository::getText($id));
			$comment->setRecipe(CommentRepository::getRecipe($id));
			return $comment;
		}
		else {
			return NULL;
		}
	}

	public function setComment(){
		if(CommentRepository::isExist($this->id)){
			CommentRepository::setText($this->id,$this->text);
			CommentRepository::setRecipe($this->id,$this->recipe);
		}
		else {
		}
	}
}