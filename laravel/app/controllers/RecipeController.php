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
        'email' => 'required|email',
        'password' => 'required|min:5',
        'password_again' => 'required|same:password'
        )
        );

        if($validator->fails()){
            return Redirect::to('user/register')->withErrors($validator)->withInput(Input::except('password'));
        }else{
            $email = Input::get('email');
            $username = Input::get('username');
            $password = Input::get('password');
            $name = Input::get('name');
            $user = User::create(array(
                'username' => $username,
                'password' => Hash::make($password),
                'email' => $email,
                'name' => $name
            )
            );

        return View::make('users/login');
        }	
    }
}
