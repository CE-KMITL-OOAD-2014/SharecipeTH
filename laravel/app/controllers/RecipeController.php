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
                $path = public_path('pic/recipe/'); 
                $ext = $file->guessExtension();
                $newFilename = time()."_".str_random(20).".".$ext;
                $upload = $file->move($path,$newFilename);       
                $picture = $newFilename;

            }
            else {
                $picture = 'empty-dish.jpg';
            }
            $name    = Input::get('name');
            $hour    = Input::get('timeH');
            $minute  = Input::get('timeM');
            $method  = Input::get('method');
            $prepare = Input::get('prepare');
            $time    = ($hour * 60) + $minute;
            //array
            $ingredients = Input::get('ingredient');
            $quantity    = Input::get('quantity');
            $unit        = Input::get('unit');

            $recipe = Recipe::create(array(
                'user_id'        => $user->id,
                'name'           => $name,
                'time_hour'      => $hour,
                'time_minute'    => $minute,
                'time'           => $time,
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

            $score = Score::create(array(
                'scoreSum' => 0,
                'scoreAvg' => 0,
                'rateCount' => 0,
                'recipe_id' => $recipe->id
                )
            );
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
    }   

    public function searchAction() {
        if (Auth::check())
        {   
            $n = Input::get('name');
            $time = Input::get('time');
            if (Input::get('type') == '0') {
            $m = null; // or 'NULL' for SQL
            }else{
                $m = Input::get('type');
            }
            if (Input::get('cal') =='0') {
            $c = null; // or 'NULL' for SQL
            }else{
                $c = Input::get('cal');
            }

            if ($time == 1) {
                $t1 = 0;
                $t2 = 16;
            }elseif ($time == 2) {
                $t1 = 15;
                $t2 = 31;
            }elseif ($time == 3) {
                $t1 = 30;
                $t2 = 61;
            }elseif ($time == 4) {
                $t1 = 60;
                $t2 = 91;
            }elseif ($time == 5) {
                $t1 = 90;
                $t2 = 121;
            }elseif ($time == 6) {
                $t1 = 120;
                $t2 = 151;
            }elseif ($time == 7) {
                $t1 = 150;
                $t2 = 181;
            }elseif ($time == 8) {
                $t1 = 180;
                $t2 = 211;
            }elseif ($time == 9) {
                $t1 = 210;
                $t2 = 241;
            }elseif ($time == 10) {
                $t1 = 240;
                $t2 = 271;
            }elseif ($time == 11) {
                $t1 = 270;
                $t2 = 301;
            }elseif ($time == 12) {
                $t1 = 300;
                $t2 = 780;
            }else {
                $t1 = null;
                $t2 = null;
            }
            $recipes = Recipe::whereRaw('name LIKE ? and method LIKE ? or time > ? and time < ?' ,array("%$n%","%$m%",$t1,$t2))->get();
            //$recipes = Recipe::whereRaw('name LIKE ? and method LIKE ? or time > ? and time < ? or cal < ?' ,array("%$n%","%$m%",$t1,$t2,$c))->get();
                
            return View::make('recipes/search')->with('recipes',$recipes);
        } else {
            return Redirect::route('login');
        }
    }
}
