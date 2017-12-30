<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function send(Request $request)
    {
        $data = ['first_name'=>$request['first_name'],'second_name'=>$request['last_name'],
                 'email'=>$request['email'],'text'=>$request['message']];
        Mail::send(['text'=>'mails/client'],$data, function ($message){
            $message->to('shpulka9519@gmail.com', 'Yuliya Berdiy')->subject('New Client');
            $message->from('y.berdiy@gmail.com', 'Yuliya');
        } );

        return view('contact');
    }
}
