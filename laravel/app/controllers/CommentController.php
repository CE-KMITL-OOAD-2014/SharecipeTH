<?php

class CommentController extends BaseController {

    public function commentAction(){
        $recipe = Recipe::where('id','=',Input::get('recipe_id')); 
        $validator = Validator::make(Input::all(),
            array(
            'comment' => 'required'
            )
        );
        if($validator->fails()){
            return Redirect::to('recipe/show/'.$recipe->id)->withErrors($validator);
        }else{
            $score = Input::get('score');
            $user = User::find(Auth::user()->id);
            $text = Input::get('comment');

            $comment = new Comment;
            $comment->comment=$text;
            $comment->user_id=$user->id;
            $comment->recipe_id=$recipe->id;
            $comment->save();

            $rate = Rate::create(array(
                'score'         => $score,
                'recipe_id'     => $recipe->id
                )
            );

            if($rate){
                $recipe->score->update(array('rateCount' => $recipe->score->rateCount + 1));
            } 
            $rscore=$recipe->score->get();
            $newscore = $rate->score + $rscore->scoreSum;
        
            $rscore->update(array('scoreSum'  => $newscore));

            return Redirect::to('recipe/show/'.$recipe->id);
        }
    }   
}
