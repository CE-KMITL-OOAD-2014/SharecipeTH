<?php

class ReportController extends BaseController {
    public function reportShowAction(){
        if (Auth::check())
        {
            return View::make('users/report'); 
        } else {
            return Redirect::to('login');
        }
    }
    public function reportAction(){
        $validator = Validator::make(Input::all(),array('report' => 'required'));
        
        if($validator->fails()){
            return Redirect::to('user/report')->with('error', 'กรุณาใส่ข้อความ');
        }else{
            $text = Input::get('report');
            $name = Auth::user()->username;
            
        /*
        | call class Report
        */
            $report = new Report;
            $report->setReport($text);
            $report->setUsername($name);
            $report->newReport();


            return Redirect::to('user/profile')->with('success', 'ขอบคุณสำหรับข้อเสนอแนะ');
        }
    }
}