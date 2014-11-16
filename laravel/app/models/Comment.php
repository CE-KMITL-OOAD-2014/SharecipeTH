<?php

class Comment extends Eloquent {

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

/*class Comment {

	private $id;
	private $comment;
	private $recipe_id;
	private $user_id;

	function __construct() {
		$this->id = null;
		$this->comment = null;
		$this->recipeId = null;
		$this->userId = null;
	}

	public function setId($value)
	{
		$this->id = $value;
	}
	public function setComment($value)
	{
		$this->comment = $value;
	}
	public function setRecipeId($value)
	{
		$this->recipeId = $value;
	}
	public function setUserId($value)
	{
		$this->userId = $value;
	}
	
	public function getId()
	{
		return $this->id;
	}
	public function getComment()
	{
		return $this->comment;
	}
	public function getRecipeId()
	{
		return $this->recipeId;
	}
	public function getUserId()
	{
		return $this->userId;
	}

	public static function getComment($id){
		if(CommentRepository::isExist($id)){
			$comment = new Comment();
			$comment->setId($id);
			$comment->setComment(CommentRepository::getText($id));
			$comment->setRecipeId(CommentRepository::getRecipeId($id));
			$comment->setUserId(CommentRepository::getUserId($id));
			return $comment;
		}
		else {
			return NULL;
		}
	}

	public function setComment(){
		if(CommentRepository::isExist($this->id)){
			CommentRepository::setComment($this->id,$this->comment);
			CommentRepository::setRecipeId($this->id,$this->recipeId);
			CommentRepository::setUserId($this->id,$this->userId);
		}	
		else {
		}
	}

	public function newComment()
	{
		$comment = new commentDatabase;
		$comment->comment=$this->comment;
		$comment->user_id=$this->userId;
		$comment->recipe_id=$this->recipeId;
		$comment->save();
	}

	public function deleteComment()
	{
		$comment = commentDatabase::find($this->id);
		$comment->delete();
	}

	public static function getFromId($id)
	{
		$comment = commentDatabase::find($id);
           
            if($comment==NULL){
                return NULL;
            }else{        
	            $com = new Comment;
	            $com->id = $comment->id;
	            $com->comment = $comment->comment;
	            $com->recipeId = $comment->recipeId;
	            $com->userId = $comment->userId;
	            return $com;
        	}
	}

	public static function getFromRecipe($recipeid)
	{
		$comment = commentDatabase::where('recipe_id','=',$recipeId)->get();
		$size = count($comment);

		if($data == NULL){
			return NULL;
		}else{
			$comments = array();
			for($i = 0;$i < $size;$i++){
				$obj = new Comment;
				$obj->id = $data[$i]->id;
            	$obj->comment = $data[$i]->comment;
            	$obj->recipeId = $data[$i]->recipeId;
            	$obj->userId = $data[$i]->userId;
            	$comments[$i] = $obj;
			}
		return $comments;
		}
	}
}*/