<?php

class UsersController extends BaseController {
    protected $layout = 'layouts.main'; // กำหนด Layouts ที่ใช้งานเป็น main.blade.php

    public function mainAction() {
        return View::make('users/main');
    }

    public function indexAction() {
        if (Auth::check())
        {
            return Redirect::to('user/profile'); 
        } else {
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

        $validator = Validator::make(Input::all(),$rules,$msg);
        if($validator->fails()){
            $messages = $validator->messages();
            return Redirect::to('login')->withErrors($messages)->withInput();
        }else{
            $userdata = array(
                'username'  => Input::get('username'),
                'password'  => Input::get('password')
            );
            $messages = array(
                array('พบไม่ข้อมูลผู้ใช้งาน..กรุณาตรวจสอบข้อมูลใหม่ด้วยครับ...')
            );
            if (Auth::attempt($userdata)){
                return Redirect::to('user/profile')->with('login', 'เข้าสู่ระบบสำเร็จ');
            }else {     
            // validation not successful, send back to form 
            return Redirect::to('login')->withErrors($messages)->withInput();
            }   
        }
         
    }

    public function registershowAction() {
        if (Auth::check())
        {
            return Redirect::to('user/profile');
        } else {
            return View::make('users/register');
        }
    }

    public function registerAction(){
    	$validator = Validator::make(Input::all(),
			array(
                'name' => 'required',
                'userame' => 'unique:user,username',
				'email' => 'required|email|unique:users,email',
				'password' => 'required|min:5',
				'password_again' => 'required|same:password'
			)
		);
		
		if($validator->fails()){
			return Redirect::Route('register')->withErrors($validator)->withInput(Input::except('password'));
		}else{
            //check when user upload image
            if(Input::hasfile('profilePicture')){
                $file = Input::file('profilePicture');
                $path = storage_path('pic/user/'); 
                $ext = $file->guessExtension();
                $newFilename = Input::get('username').".".$ext;
                $upload = $file->move($path,$newFilename);       
                $picture = Input::get('username').".".$ext;
            }
            else {
                $picture = 'anonymous.jpg';
            }

			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			$name = Input::get('name');

			$user = User::create(array(
				'username'      => $username,
				'password'      => Hash::make($password),
				'email'         => $email,
				'name'          => $name,
                'profilePicture'=> $picture
				));
			
			return View::make('users/login');
		}	
    }

    public function profileAction(){
        return View::make('users/profile');
    }

    public function logoutAction(){
		Auth::logout();
		return Redirect::to('/');
    }

    public function editShowAction(){
        return View::make('users/edit');
    }

    public function editAction()
    {
        $validator = Validator::make(Input::all(),
            array(
                'email' => 'email|unique:users,email',
                'password' => 'min:5',
                'password_again' => 'same:password',
                'profilePicture' => 'image'
            ),
            array(
                'email.unique' => 'อีเมลนี้มีอยู่แล้วกรุณากรอกใหม่',
                'password.min' => 'รหัสผ่าน ต้องมากกว่า :min ตัวอักษร',
                'password_again.same' => 'รหัสผ่านยืนยันไม่ตรงกัน'
            )
        );

        if($validator->fails()){
            return Redirect::to('user/edit')->withErrors($validator)->withInput(Input::except('password'));
        }else{

            $user = User::find(Auth::user()->id);
            if(Input::has('name')){
                $name = Input::get('name');
                $user->update(array('name'  => $name));
            }
            if(Input::has('email')){
                $email = Input::get('email');
                $user->update(array('email'  => $email));
            }
            if(Input::has('info')){
                $info = Input::get('info');
                $user->update(array('info'  => $info));
            }
            if(Input::has('password')){
                if (Hash::check(Input::get('old_password'),$user->getAuthPassword())) {
                    $password = Hash::make(Input::get('password'));
                    $user->update(array('password'  => $password));
                } else {
                    $messages = array(
                        'พาสเวิร์ดเดิมของคุณไม่ถูกต้อง',
                    );
                     return Redirect::to('user/edit')->withErrors($messages);
                } 
            }
            if(Input::hasfile('profilePicture')){
                $file = Input::file('profilePicture');
                $path = storage_path('pic/user/'); 
                $ext = $file->guessExtension();
                $picture = $user->username.".".$ext;
                File::delete($path,$picture);
                $upload = $file->move($path,$picture);       
                $user->update(array('profilePicture'  => $picture));
            }

            return Redirect::Route('profile');
        }
    }

    public function removeShowAction() {
        return View::make('users/remove');
    }

    public function removeAction() {
        $validator = Validator::make(Input::all(),
            array(
                'password' => 'min:5',
                'password_again' => 'same:password',
            ),
            array(
                'password.min' => 'รหัสผ่าน ต้องมากกว่า :min ตัวอักษร',
                'password_again.same' => 'รหัสผ่านยืนยันไม่ตรงกัน'
            )
        );
        if($validator->fails()){
            return Redirect::to('user/remove')->withErrors($validator);
        }else{
            $user = User::find(Auth::user()->id);
            $user->delete();

            return Redirect::to('/');
        }
    }

    public function user($username){
        if (Auth:: check()) {
            $user = User::where('username', '=', $username);

            if ($user->count()) {
                $user = $user->first();
                return View::make('profile')->with('user', $user);

            } else {
                return App::abort(404);
            }
        }else{
            return Redirect::Route('login');
        }
    }
}
