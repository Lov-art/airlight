<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{


    public function index (Request $request,string $lang)
    {
        app() ->setLocale($lang);

        $validation = $request->validate([
            'fio' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'district' => 'required',
        ]);


        $request=$request->post();

        Mail::send('mail.index',$request,function (Message $message){
                $message->to('info@air-light.com.ua','airlight-user')->subject('new user');
                $message->from('site.user@air-light.com.ua','airlight site form');
            });
    }



}
