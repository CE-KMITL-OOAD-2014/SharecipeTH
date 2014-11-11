<?php
class ReportController extends BaseController {
    public function reportShowAction(){
        if (Auth::check())
        {
            return View::make('users/report'); 
        } else {
            return Redirect::to('user/login');
        }
    }
    public function reportAction(){
        $validator = Validator::make(Input::all(),array('report' => 'required'));
        
        if($validator->fails()){
            return Redirect::to('report')->with('error', 'กรุณาใส่ข้อความ');
        }else{
            $report = Input::get('report');
            $name = Auth::user()->username;
            return Redirect::to('user/profile')->with('success', 'ขอบคุณสำหรับข้อเสนอแนะ');
        }
    }
}