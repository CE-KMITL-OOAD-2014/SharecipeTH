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
        return var_dump(Input::get());
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
}
