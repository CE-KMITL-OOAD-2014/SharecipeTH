<?php
class UsersController extends BaseController {
    protected $layout = 'layouts.main'; // กำหนด Layouts ที่ใช้งานเป็น main.blade.php


    public function mainAction() {
        return View::make('users/main');
    }
    public function indexAction() {
        $user = Session::get('user');
        if (empty($user)) {
           return View::make('users/login');
        } else {
            return View::make('users/profile')->with('resuft',$user);
        }
    }
    public function registershowAction() {
        $user = Session::get('user');
        if (empty($user)) {
           return View::make('users/register');
        } else {
            return View::make('users/profile')->with('resuft',$user);
        }
    }
    public function registerAction(){

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
			user::create(array(
				'email' => Input::get('email'),
				'username' => Input::get('username'),
				'password' => Hash::make(Input::get('password')),
			));
			
			return View::make('users/profile')->with('resuft',$user);
		}	
    }

    public function loginAction(){
        $msg = array(
            'username.required' => 'username ไม่สามารถเว้นว่างได้',
            'password.required' => 'password ไม่สามารถเว้นว่างได้',
            'username.min' => 'username ต้องมากกว่า :min ตัวอักษร',
            'password.min' => 'password ต้องมากกว่า :min ตัวอักษร',
        );
        $rules = array(
            'username' => 'required|min:5',
            'password' => 'required|min:5'
        );
        if (Input::server("REQUEST_METHOD") == "POST"){
           $validator = Validator::make(Input::all(),$rules,$msg);
            if($validator->fails()){
                $messages = $validator->messages();
                return Redirect::to('user/login')->withErrors($messages)->withInput();
            }else{
              $username = Input::get('username');
              $password = Input::get('password');
              $users = User::where('username','=',$username)
                    ->where('password','=',$password)
                    ->count();
              if(empty($users)){
                $messages = array(
                   array('พบไม่ข้อมูลผู้ใช้งาน..กรุณาตรวจสอบข้อมูลใหม่ด้วยครับ...')
                );
                return Redirect::to('user/login')->withErrors($messages)->withInput();
              }else{
                $users = User::where('username','=',$username)
                    ->where('password','=',$password)
                    ->get();
                Session::put('user',$users);
                return Redirect::to('user/profile');
              }
            }
        } 
    }
    public function profileAction(){
        $val = Session::get('user');
        return View::make('users/profile')->with('resuft',$val);
    }
}