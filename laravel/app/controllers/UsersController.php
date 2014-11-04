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

			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			$name = Input::get('name');

			$user = User::create(array(
				'username' => $username,
				'password' => Hash::make($password),
				'email' => $email,
				'name' => $name
				));
			
			return View::make('users/login');
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
              	$userdata = array(
					'username' 	=> Input::get('username'),
					'password' 	=> Input::get('password')
				);
				$messages = array(
                   	array('พบไม่ข้อมูลผู้ใช้งาน..กรุณาตรวจสอบข้อมูลใหม่ด้วยครับ...')
                );
	           	if (Auth::attempt($userdata)){
	            	 return Redirect::to('user/profile');
	        	}else {	 	
				// validation not successful, send back to form	
				return Redirect::to('user/login')->withErrors($messages)->withInput();
				}	
            }
        } 
    }

    public function profileAction(){
        $val = Session::get('user');
        return View::make('users/profile');
    }

    public function logoutAction(){
		Auth::logout();
		return Redirect::to('/');
    }
}
