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
            return var_dump($score);
            $user = User::find(Auth::user()->id);
            $text = Input::get('comment');

            $comment = new Comment;
            $comment->comment($text);
            $comment->setUserId($user->id);
            $comment->SetRecipeId($recipe->id);
            $comment->newComment();

            $rate = Rate::create(array(
                'score'         => $score,
                'recipe_id'     => $recipe->id
                )
            );

            if($rate){
                $recipe->score->update(array('rateCount' => $recipe->score->rateCount + 1));
            }
            $newscore = $rate->score + $recipe->score->scoreSum;

            $recipe->score->update(array('scoreSum'  => $newscore));


            return Redirect::to('recipe/show/'.$recipe->id);
        }
    }   
}
