<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        return view('emails.index');
    }

    public function email()
    {
        return view('email');
    }
    public function sendemail(Request $request)
    {
            $datas = DB::select('SELECT * FROM sms_controller WHERE status = 0 LIMIT 500');
            // $tmp = [];
            // foreach($datas as $data)
            //   {
            //     Mail::send('emails.index', $tmp, function($message) use ($data) {
            //         $message->from('info@mover.az');
            //         $message->to($data->email);
            //         $message->subject('DİQQƏT! İş saatlarımız dəyişdi');
            //         DB::update('UPDATE sms_controller SET status = ? WHERE email = ?', [1, $data->email]);
            //     }); 
            //   }

            $tmp = [];
            Mail::send('emails.index', $tmp, function($message){
                $message->from('info@mover.az');
                $message->to('memmed199@gmail.com');
                $message->subject('DİQQƏT! İş saatlarımız dəyişdi');
            }); 
    

            // foreach($mails as $mail){
            //    Mail::send('emails.index', $data, function($message) use ($mail){
            //         $message->from('info@mover.az');
            //         $message->to($mail);
            //         $message->subject('DİQQƏT! İş saatlarımız dəyişdi');
            //     }); 
            // }
            // Mail::send('emails.index', $data, function($message) {
            //     $message->from('info@mover.az');
            //     $message->to('shamistanli@mover.az');
            //     $message->subject('DİQQƏT! İş saatlarımız dəyişdi');
            // }); 
        

        return back();
    }

    public function data()
    {
        $data =DB::update('UPDATE sms_controller SET status = ? WHERE email = ?', [0, 'drmint80@gmail.com']);
        dd($data);
    }

    public function testindex()
    {
        return view('index');
    }
}
