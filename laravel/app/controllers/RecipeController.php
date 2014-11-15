<?php

class RecipeController extends BaseController {
    protected $layout = 'layouts.masterProfile'; // กำหนด Layouts ที่ใช้งานเป็น main.blade.php

    public function createShowAction() {
        if (Auth::check())
        {
            return View::make('recipes/create');
        } else {
            return View::make('users/login');
        }
    }

    public function createAction(){
        $validator = Validator::make(Input::all(),
            array(
            'name'    => 'required|unique:recipes',
            'timeH'   => 'required|numeric|min:0|max:24',
            'timeM'   => 'required|numeric|min:0|max:59',
            'method'  => 'required',
            'prepare' => 'required',
            'ingredient' => 'required'
            )
        );

        if($validator->fails()){
            return Redirect::to('recipe/create')->withErrors($validator);
        }else{
            $user = User::find(Auth::user()->id);
            if(Input::hasfile('recipePicture')){
                $file = Input::file('recipePicture');
                $path = storage_path('pic/recipe/'); 
                $ext = $file->guessExtension();
                $newFilename = time()."_".str_random(20).".".$ext;
                $upload = $file->move($path,$newFilename);       
                $picture = $newFilename;

            }
            else {
                $picture = 'empty-dish.jpeg';
            }
            $name    = Input::get('name');
            $hour    = Input::get('timeH');
            $minute  = Input::get('timeM');
            $method  = Input::get('method');
            $prepare = Input::get('prepare');
            //array
            $ingredients = Input::get('ingredient');
            $quantity    = Input::get('quantity');
            $unit        = Input::get('unit');

            $recipe = Recipe::create(array(
                'user_id'        => $user->id,
                'name'           => $name,
                'time_hour'      => $hour,
                'time_minute'    => $minute,
                'method'         => $method,
                'prepare'        => $prepare,
                'recipe_picture' => $picture
                )
            );
            $count = 0;
            foreach ($ingredients as $ingre) {

                $ingredient = Ingredient::create(array(
                    'name' => $ingre,
                    'quantity' => $quantity[$count],
                    'unit' => $unit[$count],
                    'recipe_id' => $recipe->id
                    )
                );

                $count++;

            }        
        return Redirect::to('user/profile');
        }
    }

    public function editShowAction() {
        if (Auth::check())
        {
            return View::make('recipes/edit');
        } else {
            return View::make('users/login');
        }
    }

    public function editAction(){
        $validator = Validator::make(Input::all(),
            array(
            'name' => 'required',
            'timeH' => 'required|numeric|min:0|max:24',
            'timeM' => 'required|numeric|min:0|max:59',
            'method' => 'required',
            'prepare' => 'required',
            )
        );

        if($validator->fails()){
            return Redirect::to('recipe/create')->withErrors($validator);
        }else{
            
        return View::make('users/profile');
        }   
    }

    public function showRecipeAction($id)
    {   $recipe = Recipe::where('id','=',$id);
        if ($recipe->count()) {
            $recipe = $recipe->first();
            return View::make('recipes/recipe')->with('recipe',$recipe);
        }else{
            return App::abort(404);
        }
    }

    public function commentAction(){
        $validator = Validator::make(Input::all(),
            array(
            'comment' => 'required'
            )
        );
        $recipe = Input::get('recipe_id');
        if($validator->fails()){
            
            return Redirect::to('recipe/show/'.$recipe)->withErrors($validator);
        }else{
            $user = User::find(Auth::user()->id);
            $text = Input::get('comment');
            $comment = Comment::create(array(
                'comment' => $text,
                'user_id' => $user->id,
                'recipe_id' => $recipe
                )
            );

        return Redirect::to('recipe/show/'.$recipe);
        }   

    public function searchAction() {
        if (Auth::check())
        {
            return View::make('recipes/search');
        } else {
            return Redirect::route('login');
        }
    }
}
