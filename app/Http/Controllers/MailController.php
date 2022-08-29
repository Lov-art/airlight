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

        $request=$request->post();

        Mail::send('mail.index',$request,function (Message $message){
                $message->to('lovin.a@vuso.ua');
            });
    }



}
