<?php 

namespace repository;

class CommentRepository
{
	// check if exsit this comment by search from DB
	public static function isExist($id){
		$comment = CommentDatabase::find($id);
		return !is_null($comment);
		/*if($comment!=null){
			return true;
		}
		else {
			return false;
		}*/
	} 
	// new comment
	public static function newComment(){
		$comment = new CommentDatabase();
		$comment->save();
		return $comment->id;
	}

	// get data from database
	public static function getText($id){
		$comment = CommentDatabase::find($id);
		if($comment!=null){
			return $comment->role;
		}
		else {
			return null;
		}
	}
	public static function getRecipe($id){
		$comment = CommentDatabase::find($id);
		if($comment!=null){
			return $comment->username;
		}
		else {
			return null;
		}
	}

	// Seve data to database
	public static function setText($id,$value){
		$comment = CommentDatabase::find($id);
		if($comment!=null){
			$comment->role=$data;
			$comment->save();
		}
		else {}
	}
	public static function setRecipe($id,$value){
		$comment = CommentDatabase::find($id);
		if($comment!=null){
			$comment->username=$data;
			$comment->save();
		}
		else {}
	}
}
 ?>